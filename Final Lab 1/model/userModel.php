<?php
    require_once('db.php');


    function login($username, $password)
    {
        $con = getConnection();
        $sql = "select * from employee where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        $user = mysqli_fetch_assoc($result);


        if ($count == 1) {
            session_start();
            $_SESSION['id'] = $user['id'];
            return true;
        } else {
            return false;
        }
    }

    function userrole($username)
    {
        $con = getConnection();
        $sql = "select role from employee where username='{$username}'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }


    function getUser($id)
    {
        $con = getConnection();
        $sql = "select * from employee where id = '$id'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            $row = mysqli_fetch_assoc($result);
            return $row;
        } else {
            echo "Invalid User";
            return false;
        }
    }

    function getAllUser()
    {
        $con = getConnection();
        $sql = "select * from employee";
        $result = mysqli_query($con, $sql);
        $users = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($users, $row);
        }

        return $users;
    }

    function addUser($name, $phoneNumber, $username, $password)
    {
        $name = $_REQUEST["employeeName"];
        $phoneNumber = $_REQUEST['contact'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $con = getConnection();
        $sql = "INSERT INTO employee (name, contact, username, password) VALUES ('{$name}', '{$phoneNumber}', '{$username}', '{$password}')";
        mysqli_query($con, $sql);
        return true;
    }

    function updateUser($user)
    {
        $username = $user["username"];
        $email = $user["email"];
        $id = $user["id"];
        $gender = $_REQUEST['gender'];
        $phoneNumber = $_REQUEST['phoneNumber'];
        $con = getConnection();
        $sql = "update employee set username='$username', email='$email', gender='$gender', phoneNumber='$phoneNumber' where id = '$id'";
        mysqli_query($con, $sql);
        return true;
    }

    function deleteUser($id)
    {
        $con = getConnection();
        $sql = "delete from employee where id='{$id}'";
        mysqli_query($con, $sql);
        return true;
    }


    function getId($id)
    {
        $con = getconnection();
        $sql = "select * from employee where id='{$id}'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        if ($row) {
            return $row;
        } else {
            return null;
        }
    }

    function updatePassword($id, $password)
    {
        $con = getConnection();
        $sql = "update employee set password='{$password}' where id = '{$id}'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function useremail($email)
    {
        $con = getConnection();
        $sql = "select * from employee where email='{$email}'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            session_start();
            $_SESSION['userid'] = $row['id'];
            return true;
        } else {
            return false;
        }
    }
?>