<?php
include 'head.php';
include "vacancies.php";
session_start();
$vacancy = new Vacancy();
$vacancy->setPosition("SMM manager");
?>
!DOCTYPE html>
<html lang="en">
<head>
    <title>Team Members</title>
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
<p><?php $vacancy->ShortDescription()?></p>