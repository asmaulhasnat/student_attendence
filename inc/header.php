<?php

  include_once 'classes/student.php';
  include_once 'lib/session.php';
  include_once 'helpers/Format.php';
  $stu= new student();
  $fm=new Format();
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>attendence system</title>
    <link href="scriptstyle/css/bootstrap.min.css" rel="stylesheet">
    <script src="scriptstyle/js/jquery.js"></script>
    <script src="scriptstyle/js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="container">
        <div class="well text-center">
              <h2>student attendence (roll call) system</h2>
        </div>