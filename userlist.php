<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        * {box-sizing: border-box;}
        .user-detail {
            height: 100vh;
            border: 2px solid #f1f1f1;
            padding: 16px;
            background-color: white;
            width: 30%;}
        input{
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: pink;}
        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;}
        button[type=submit] {
            background-color: #434140;
            color: #ffffff;
            padding: 10px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            font-size: 20px;}
        label{
            font-size: 18px;;}
        button[type=submit]:hover {
            background-color:#3d3c3c;}
        .form-title a, .form-title h2{
            display: inline-block;}
        .form-title a{
            text-decoration: none;
            font-size: 20px;
            background-color: green;
            color: honeydew;
            padding: 2px 10px;}
        table, td, th {
            border: 1px solid #ddd;
            text-align: left;}
        table {
            border-collapse: collapse;
            width: 50%;}
        .table-data{
            position: relative;
            left:50px;
            top:50px;}
        th, td {
            padding: 15px;
        }
        body{
            overflow-x: hidden;}
        .list-title a, .list-title h2{
            display: inline-block;
            margin: 0px 35px;}
        .list-title a{
            text-decoration: none;
            font-size: 20px;
            background-color: green;
            color: honeydew;
            padding: 2px 10px;}
    </style>
</head>
<body>
<?php
session_start();
require_once 'header1.php';
?>
<a id="userslink">Show User Data</a>

<div id="table-container" ></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="ajax-script.js"></script>

</body>
</html>