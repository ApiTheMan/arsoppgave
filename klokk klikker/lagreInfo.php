<?php
include 'tilkoblingInfo.php';
if (isset($_POST['lagrepoeng'])){
            $navn = $_POST['username'];
            $scorePoeng = $_POST['score'];

            $sql = "INSERT INTO users (username, clicks) VALUES ('$navn', '$scorePoeng')";
            $conn->query($sql);
            header("Location: index.php?success");
        }
?>