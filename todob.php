<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "todoo";


$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if(isset($_POST['submit'])){
$title = $_POST['title'];
$desc = $_POST['desc'];
$sql = "INSERT into memo (Title,Description) VALUES ('$title','$desc')";
mysqli_query($conn,$sql);
// $printing = "SELECT Title,Description FROM memo";
// $result = mysqli_query($conn,$printing);
// // if(mysqli_num_rows($result) > 0){
//     while($row = mysqli_fetch_assoc($result)){
// //         echo "Title : ".$row["Title"]."<br>Description :".$row["Description"]."<br><br>";
// //         echo "Hello";
// $tit = $row["Title"];
// $des = $row["Description"];
//         echo "Title : ".$tit;
//         echo "<br>";
//         echo "Description : ".$des;
//         echo "<br><br>";
//     }
//     $result->free();
// // }else{
// //     echo "0 results";
// // }
header("Location: todo.php?Success");
exit();
}
else{
    header("Location: todo.php?Error");
}
