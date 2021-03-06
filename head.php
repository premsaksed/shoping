<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ระบบร้านค้าออนไลน์</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">ระบบร้านค้าออนไลน์</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <?php session_start(); ?>
          <?php

          if (!$_SESSION["UserID"]) {
          ?>
            <li class="nav-item">
              <a class="nav-link" href="loginform.php">เข้าสู่ระบบ</a>
            </li>
          <?php
          } else { ?>
            <li class="nav-item">
              <a class="nav-link" href="myorder.php">ออเดอร์ของฉัน</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="pass.php">เปลี่ยนรหัสผ่าน</a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">
                ออกจากระบบ
            </li>
            </a>

          <?php  } ?>
          <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->

        </ul>
        <div class="mx-5">


          <a href="show.php"> <img src="img/cart.svg" width="40" alt=""> </a>
        </div>
        <!-- <form class="d-flex">
      
      <a href="clear.php">Clear Cart</a>  
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
      </div>
    </div>
  </nav>