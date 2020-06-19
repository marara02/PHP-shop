<?php
include 'head.php';
include "vacancies.php";
include_once 'vvShow.php';
session_start();

class vvShow{
    public function choose()
    {
        $conn = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
        $sql = "SELECT * FROM vacancy";
        $stmt = $conn->prepare($sql);
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $Vacancy = new Vacancy();
        $Vacancy->setPosition($row['position']);
        $Vacancy->setSalary($row['salary']);
        $Vacancy->ShortDescription($row['description']);
    }
}
?>
!DOCTYPE html>
<html lang="en">
<head>
    <title>Vacancies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<h1 class = "display-3" style="text-align: center;padding-bottom: 10px; margin-top: 20px">Open vacancies in shop</h1>