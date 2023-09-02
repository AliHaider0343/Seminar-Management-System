<?php
    session_start();
    include('config.php');
    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $speaker = $_POST['speaker'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $number = $_POST['number'];
        $text = $_POST['text'];
        $status = $_POST['status'];
        $text = $_POST['link'];
        $status = $_POST['box'];
        $query = $connection->prepare("INSERT INTO forms(title,speaker,date,time,number,text,status,link,box) VALUES (:title,:speaker,:date,:time,:number,:text,:status,:link,:box)");
    }
?>