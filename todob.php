<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "todoo";


$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $sql = "INSERT into memo (Title,Description) VALUES ('$title','$desc')";
    mysqli_query($conn, $sql);
    header("Location: todo.php?Success");
    exit();
}
$rrr = "SELECT * FROM memo";
$rr = mysqli_query($conn, $rrr);
if (mysqli_num_rows($rr) > 0) {
    // echo "<button class='delete' name='delete'>Delete All</button>";
    if (isset($_POST['delete'])) {
        $del = "DELETE FROM memo";
        $res = mysqli_query($conn, $del);
        // alert("All memos deleted");
        header("Location: todo.php?MemosDeleted");
    }
} else {
    header("Location: todo.php?Error");
}
