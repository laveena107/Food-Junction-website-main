<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    @import "https://fonts.googleapis.com/css?family=Open+Sans&display=swap";

body {
background-image: url('wood-background--dark-wooden-background.jpg');
background-size: cover;
	background-repeat: no-repeat;
	background-attachment: fixed;
display:flex;

flex-direction:row;
justify-content:center;
align-content:center;
align-items:center;
}
.main {
display:flex;
position:absolute;
width:1380px;
height:688px;
left:0;
top:0;
flex-direction:row;
justify-content:center;
align-content:center;
align-items:center;

}





.heading {
display:flex;
position:absolute;
width:410px;
height:121px;
left:150px;
top:100px;
font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;
font-style:normal;
font-weight:700;
font-size:30px;
line-height:65px;
color:#FFF;
}
.signupPage {
display:flex;
position:absolute;
width:450px;
height:537px;
left:840px;
top:100px;
background:#FFF;
box-shadow:0 6px 9px rgba(0,0,0,0.08);
border-radius:0 60px;
transform:matrix(1,0,0,-1,0,0);
}

.createPage {
position:absolute;
width:450px;
height:537px;
left:840px;
top:186px;
display:flex;
}

.username {
position:absolute;
width:79px;
height:19px;
left:904px;
top:150px;
font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;
font-style:normal;
font-weight:700;
font-size:16px;
line-height:19px;
display:flex;
align-items:center;
letter-spacing:.01em;
color:#000;
}

.usertext {
position:absolute;
width:322px;
height:50px;
left:904px;
top:200px;
background:#FFF;
border:1px solid #E4E4E4;
box-sizing:border-box;
box-shadow:0 2px 4px rgba(0,0,0,0.08);
border-radius:2px;
font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;
font-style:normal;
font-weight:400;
font-size:16px;
line-height:22px;
display:flex;
align-items:center;
letter-spacing:.01em;
color:black;
}

.email {
position:absolute;
width:79px;
height:19px;
left:904px;
top:280px;
font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;
font-style:normal;
font-weight:700;
font-size:16px;
line-height:19px;
display:flex;
align-items:center;
letter-spacing:.01em;
color:#000;
}

.emailtext {
position:absolute;
width:322px;
height:50px;
left:904px;
top:320px;
background:#FFF;
border:1px solid #E4E4E4;
box-sizing:border-box;
box-shadow:0 2px 4px rgba(0,0,0,0.08);
border-radius:2px;
font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;
font-style:normal;
font-weight:400;
font-size:16px;
line-height:22px;
display:flex;
align-items:center;
letter-spacing:.01em;
color:black;
}

.password {
position:absolute;
width:79px;
height:19px;
left:904px;
top:400px;
font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;
font-style:normal;
font-weight:700;
font-size:16px;
line-height:19px;
display:flex;
align-items:center;
letter-spacing:.01em;
color:black;
}

.passwordtext {
position:absolute;
width:322px;
height:50px;
left:904px;
top:440px;
background:#FFF;
border:1px solid #E4E4E4;
box-sizing:border-box;
box-shadow:0 2px 4px rgba(0,0,0,0.08);
border-radius:2px;
font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;
font-style:normal;
font-weight:400;
font-size:16px;
line-height:22px;
display:flex;
align-items:center;
letter-spacing:.01em;
color:black;
}

.submit {
position:absolute;
width:322px;
height:50px;
left:904px;
top:540px;
background:#FE9A28;
border-radius:2px;
font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;
font-style:normal;
font-weight:700;
font-size:18px;
line-height:22px;
display:flex;
align-items:center;
letter-spacing:.01em;
color:#FFF;
justify-content:center;
}


    </style>
</head>
<body>
    <form method="POST" action="" id="myform">
    <div class="container">
    <div class="main">
        <div class = "submain">
            <label class = "heading">"The purpose of life is not to be happy. It is to be useful, to be honorable, to be compassionate, to have it make some difference that you have lived and lived well." -  Ralph Waldo Emerson</label>
            <div class = "signupPage"></div>
            <label class = "username">USERNAME</label>
            <input type="text" class = "usertext" name="username" id = "usertext" placeholder="Enter your username"/>
            <div id="name_error" class="nameerror"></div>
            <label class = "email">PASSWORD</label>
            <input type="password" class = "emailtext" name="password" id = "emailtext" placeholder="Enter your email"/>
            <div id="email_error" class="emailerror"></div>
            <label class = "password">CONFIRM PASSWORD</label>
            <input type="password" class = "passwordtext" name="confirm_password" id = "passwordtext" placeholder="Enter your password"/>
            <div id="password_error" class="passworderror"></div>
            <button type="submit" class = "submit" id="submit" value = "Sign Up" >SUBMIT</button>
        </div>
    </div>
    </div>
</form>

</body>

</html>