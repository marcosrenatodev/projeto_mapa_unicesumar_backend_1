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
      height: fit-content;
    }

    .grid-container {
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

    .grid-container h4 {
      text-align: center;
    }

    .main-recipe {
      display: flex;
      flex-direction: row;
      box-sizing: border-box;
    }

    .view-recipe {
      display: flex;
      /* flex-direction: column; */
      margin: auto;
      margin-top: 70px;
      margin-bottom: 50px;
      align-items: center;
      justify-content: center;
      /* background-color: moccasin;   */
      width: fit-content;
    }

    .image {
      flex: 70%;
      width: 100%;
    }

    .box-info {
      display: flex;
      flex-direction: column;
      flex: 30%;
      width: fit-content;
      align-items: center;
      justify-content: center;


    }

    .tituloReceita {
      padding: 0px;
      text-align: center;
    }

    .descricao {
      text-align: justify;
      padding: 10px;
      border-radius: 15px;
      width: 300px;
    }

    .btn {
      background-color: brown;

      border: none;
      color: white;
      padding: 12px 30px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      border-radius: 20px;
    }

    .preco {
      display: inline-block;

      width: auto;
      height: 38px;

      background-color: #6ab070;
      -webkit-border-radius: 3px 4px 4px 3px;
      -moz-border-radius: 3px 4px 4px 3px;
      border-radius: 3px 4px 4px 3px;

      border-left: 1px solid #6ab070;

      /* This makes room for the triangle */
      margin-left: 19px;

      position: relative;

      color: white;
      font-weight: 300;
      font-size: 38px;
      line-height: 38px;

      padding: 0 10px 0 10px;
    }

    /* Makes the triangle */
    .preco:before {
      content: "";
      position: absolute;
      display: block;
      left: -19px;
      width: 0;
      height: 0;
      border-top: 19px solid transparent;
      border-bottom: 19px solid transparent;
      border-right: 19px solid #6ab070;
    }

    /* Makes the circle */
    .preco:after {
      content: "";
      background-color: white;
      border-radius: 50%;
      width: 4px;
      height: 4px;
      display: block;
      position: absolute;
      left: -9px;
      top: 17px;
    }
  </style>

</head>
<?php include "layout/navbar.php"; ?>

<body>