<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Dona Rita Marmitas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      margin: 0;
    }

    .main {
      padding: 16px;
      margin-top: 70px;
      height: 1500px;
    }
    .grid-container{
      display: grid;
      grid-template-columns: auto auto auto auto;
      grid-template-rows: auto auto;
      grid-auto-flow: column;
      align-content: center;
    }

    /*Estilo da barra de navegacao*/
    .navbar {
      overflow: hidden;
      background-color: #333;
      position: fixed;
      top: 0;
      width: 100%;
    }

    .navbar a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: auto;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .navbar a:hover {
      background: #ddd;
      color: black;
    }

    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      color: black;
      text-align: center;
    }

    .grid-container h4{
      text-align: center;
    }

    .view-recipe{
      box-sizing: border-box;
    }
  </style>

</head>
<?php include "layout/navbar.php"; ?>

<body>