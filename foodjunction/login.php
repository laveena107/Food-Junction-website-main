<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: grid.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: grid.php");
                            
                        }
                    }

                }

    }
}    


}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>*{
    margin:0;
    padding:0;
    box-sizing: border-box;
}
body{
    background-image: url('pngtree-red-real-brick-wall-background-picture-image_990508.jpeg');
    

}

/* Container */
.container{
    display: flex;
    height: 500px;
    width: 800px;
   /* border: 1px solid black; */
    margin: auto;
    margin-top: 80px;
    box-shadow: 25px 25px 40px black;

}
.form{
    display: flex;
    flex-direction: column;
    width: 50%;
    align-items: center;
    background-color: rgb(180, 173, 165);

}
.form h2{
    font-size: 3rem;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    margin: 40px;
}

.box{
    padding: 12px;
    width: 65%;
    margin: 8px;
    border: 1px solid black;
    outline:none;
    border-radius: 20px;
}
.form button{
    padding:12px 30px;
    width:120px;
    margin-top: 25px;
    background-color: rgba(52, 45, 27, 0.263);
    color: azure;
    font-weight: bold;
    border:none;
    outline: none;
    border-radius: 20px;

}

.form button:hover{
    cursor: pointer;
    background-color: rgb(104, 84, 48);
    margin-top: 20px;
}
.form a{
    text-decoration: none;
    color:black;
    margin-top: 20px;
}
.form a:hover{
    color:rgb(136, 31, 13);
}


/*right side*/
.side{
    display:flex;
    justify-content: center;
    align-items: center;
    width: 50%;
    background-color: brown;

}
.side img{
    width: 450px;
    height: 450px;
}</style>
</head>
<body>
    <div class="container">
        <form action="" class="form" method="POST">
            <h2>SIGN IN</h2>
            <input type="text" name="username" class="box" placeholder="Enter username">
            <input type="password" name="password" class="box" placeholder="Enter password">
           
             <button type="sumbit" value="SUBMIT" id="submit">SUBMIT</button></a>
            </button>
          
            <br>
            <br>
        
                <h3 style="font: size 24px;"><b>New User ? </b></h3>
            <a href="http://localhost/foodjunction/register.php">Create a new account...</a>
            
            
            
        </form>
        <div class="rside">
            <img src="photo-1559305616-3f99cd43e353.jpeg" alt="image" width="400px" height="500px">
        </div>
    </div>
</body>
</html>