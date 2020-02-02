<html>

<head>
    <title>
        Memo
    </title>
    <meta charset="utf-8">
</head>
<link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Montserrat', sans-serif;
        background-color: #fae8c8;
    }

    .text1 {
        width: 30%;
        margin-left: 35%;
        margin-bottom: 1%;
        height: 6%;
        border-radius: 10px;
        border: none;
        background-color: #c9d99e;
        padding: 10px;
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        color: #445c3c;
    }

    .text2 {
        color: #445c3c;
        width: 30%;
        margin-left: 35%;
        border-radius: 10px;
        border: none;
        background-color: #c9d99e;
        padding: 10px;
        height: 25%;
        font-family: 'Montserrat', sans-serif;
        padding-top: 10px;
        overflow: hidden;
        font-size: 14px;
    }

    h1 {
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        margin-left: 35%;
        margin-bottom: 2%;
        margin-top: 2%;
        font-size: 50px;
        color: #445c3c;
    }

    .btn {
        width: 12%;
        height: 8%;
        margin-left: 44%;
        margin-top: 2%;
        font-family: 'Montserrat', sans-serif;
        background-color: #445c3c;
        border: none;
        color: #fae8c8;
        font-size: 16px;
        border-radius: 10px;
        font-weight: bold;
    }

    .btn:hover {
        font-weight: bold;
        border: 1px solid #445c3c;
        color: #445c3c;
        background-color: #fae8c8;
        margin-left: 42.5%;
        width: 15%;
        transition-duration: 0.3s;
        transition-timing-function: ease-out;
    }

    .title {
        color: #445c3c;
        font-size: 20px;
    }

    .desc {
        color: #445c3c;
    }

    .memo {
        border: 1px solid #445c3c;
        padding: 15px;
        width: 27.3%;
        margin-left: 35%;
        border-radius: 10px;
        margin-top: 1%;
        /* opacity: 0.5; */
        text-align: justify;
        background-color: #c9d99e;
        overflow: auto;
        /* padding-right: 15px; */
    }

    b {
        font-size: 20px;
    }

    h3 {
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        margin-left: 35%;
        margin-bottom: 1%;
        margin-top: 3%;
        font-size: 30px;
        color: #445c3c;
    }

    .bdes {
        line-height: 35px;
    }

    .none {
        text-align: center;
        margin-top: 3%;
        font-size: 20px;
        color: #445c3c;

    }

    .delete {
        width: 8%;
        height: 5%;
        margin-left: 46%;
        margin-top: 1%;
        font-family: 'Montserrat', sans-serif;
        background-color: #445c3c;
        border: none;
        color: #fae8c8;
        font-size: 12px;
        border-radius: 7px;
    }

    .delete1 {
        width: 20%;
        height: 10%;
        margin-left: 46%;
        margin-top: 1%;
        font-family: 'Montserrat', sans-serif;
        background-color: #445c3c;
        border: none;
        color: #fae8c8;
        font-size: 12px;
        border-radius: 7px;
    }
</style>

<body>
    <h1>Memo</h1>
    <form action="todob.php" method="POST">
        <input type="text" placeholder="--Title here--" name="title" class="text1">
        <textarea class="text2" name="desc" placeholder="--Description Here--"></textarea><br>
        <button type="submit" name="submit" class="btn">Submit</button><br>
        <?php
        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "todoo";


        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
        $printing = "SELECT Title,Description FROM memo";
        $result = mysqli_query($conn, $printing);
        if (mysqli_num_rows($result) > 0) {
            echo "<h3>Recent Memos</h3>";
            // echo "<button class='delete'>Delete All</button>";
            while ($row = mysqli_fetch_assoc($result)) {
                //         echo "Title : ".$row["Title"]."<br>Description :".$row["Description"]."<br><br>";
                //         echo "Hello";
                $tit = $row["Title"];
                $des = $row["Description"];
                echo "<div class='memo'>";
                echo "<p class='title'><b>Title : </b>" . $tit;
                echo "</p>";
                echo "<p class='desc'><b class='bdes'>Description : </b><br>" . $des;
                echo "</p>";
                // echo "<button class='delete1'>Delete</button>";
                echo "</div>";
            }
            $result->free();
        } else {
            echo "<p class='none'>No Memos to Show.</p>";
        }
        ?>
        <?php
        $rrr = "SELECT * FROM memo";
        $rr = mysqli_query($conn, $rrr);
        if (mysqli_num_rows($rr) > 0) {
            echo "<button class='delete' name='delete'>Delete All</button>";
        }

        ?>

    </form>

</body>

</html>