<?php 

function registerUser($title,$first_name,$last_name,$email,$password) {
    global $db;
    $password_hash = password_hash($password,PASSWORD_DEFAULT);
    $sql = $db->prepare("INSERT INTO users (title,first_name,last_name,email,password) VALUES (?,?,?,?,?)");
    $sql->bind_param("sssss",$title,$first_name,$last_name,$email,$password_hash);
    $sql->execute();

    if($sql->errno == 0) {
        $_SESSION["id"] = $db->insert_id;
        header("Location:users/home.php");
    } else {
        header("Location:errors.php");
    }
}


function loginUser($email,$password) {
        global $db;
        $user_password = getPasswordFromDb($email);
        if(!$user_password) {
            return false;
        }

        if(!password_verify($password,$user_password)) {
            return false;
        }
        $sql = $db->prepare("SELECT id FROM users WHERE email = ? AND password = ?");
        $sql->bind_param("ss",$email,$user_password);
        $sql->execute();
        if($sql->errno == 0) {
            $result = $sql->get_result();
            $id = $result->fetch_assoc()["id"];
            $_SESSION["id"] = $id;
            return true;
        } else {
            header("Location: error.php");
        }
}

function getPasswordFromDb($email) {
    global $db;
    $sql = $db->prepare("SELECT password FROM users WHERE email = ?");
    $sql->bind_param("s",$email);
    $sql->execute();
    $result = $sql->get_result();
    if($result->num_rows == 0) {
        return false;
    }
    $password = $result->fetch_assoc()["password"];
    return $password;
}


function getUser($id) {
    global $db;
    $sql = $db->prepare("SELECT * FROM users WHERE id = ?");
    $sql->bind_param("i",$id);
    $sql->execute();
    $result = $sql->get_result();
    $user   = $result->fetch_assoc();
    return $user;
}


function isLogged() {
    if(isset($_SESSION["id"])) {
        return true;
    } else {
        return false;
    }
}