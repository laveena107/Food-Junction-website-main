<?php

    $conn = mysqli_connect("localhost", "root", "", "foodjunctiondata");
    if(!$conn) {
        echo "<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'>Not able establish Database Connection</h3>";
    }
    $sql="SELECT * FROM data";
    $query=mysqli_query($conn,$sql);

    if(isset($_REQUEST["new_post"])){
        $content = $_REQUEST["content"];
        $sql = "INSERT INTO data (content) VALUES ('$content')";
        mysqli_query($conn, $sql);

        header("Location: jn.php");
        exit();
    }

?>
