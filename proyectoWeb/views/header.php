<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Proyecto Web</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel=stylesheet href="css/main.css" type="text/css" media=screen>
   </head>
   <body>
      <nav class="nav_container">
         <ul class="main_menu">
            <li><a href="../views/index.php">Inicio</a></li>
            <li class="show_sub">
               <a>Menu 1</a>
               <ul class="sub_menu">
                  <li><a href="../views/">Menu 1</a></li>
                  <li><a href="../views/">Menu 1</a></li>
               </ul>
            </li>
            <li><a href="../views/Sites/Create.php">Crear Sitio</a></li>
            <li><a href="../views/">Menu 1</a></li>
            <li><a href="../views/">Menu 1</a></li>
            <li><a href="../views/">Menu 1</a></li>
         </ul>
      </nav>