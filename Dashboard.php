<?php

  if(isset($_SESSION['SF_KEY'])){
    echo $_SESSION['SF_KEY'];
  }
  else{
    echo "Failed";
	  //header('Location:http://localhost:8080/SafeWeb/login.html');
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
      integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <style>
      body {
        font-family: "Comic Sans Ms";
      }
      #pass {
        border: none;
      }
      #uname {
        border: none;
        overflow: hidden;
      }
      #pass:focus {
        outline-width: 0;
        outline: none;
      }
      #uname:focus {
        outline-width: 0;
        outline: none;
      }
      .eye {
        border: none;
        outline: none;
        background-color: #ffffff;
      }

      .login {
        margin: auto;
        width: 250px;
        border: 1px solid black;
        border-radius: 10px;
        background-color: rgba(255, 255, 255,0.9);
      }
      button {
        transition: 1s;
      }
      button:hover {
        transform: scale(1.1);
        transition: 1s;
      }
      .group {
        overflow: hidden;
        border: 2px solid black;
        border-radius: 20px;
      }
    </style>
    <title>Dashboard | SafeWeb</title>
  </head>
  <body>
    <nav>
      <h1 class="nav-brand">Safe Web Dashboard</h1>
      <ul class="nav-list">
        <li onclick="logout()"  class="nav-item" style="padding:25px">Logout</li>
      </ul>
    </nav>
    <div id="outlet">
      <form class="container my-5 login shadow py-2" action="./login.php" method="post">
      <div class="needs-validation">
        <h2
          class="text-center bi bi-person-circle"
          style="font-size: 60px; margin: auto"
        ></h2>
        <h3
          class="text-center"
          style="font-family: century gothic; font-weight: bold"
        >
          ADD NEW SITE
        </h3>
        <div class="input-group group">
          <i class="bi bi-person-fill eye input-group-text"></i>
          <input
            type="text"
            placeholder="Site Name"
            id="uname"
            name="Site Name"
            class="form-control"
          />
        </div>

        <div class="input-group group has-validation my-3">
          <i class="bi bi-lock-fill eye input-group-text"></i>
          <input
            type="password"
            id="pass"
            name="password"
            placeholder="Site URL"
            class="form-control"
          />
        </div>
        <div class="input-group group has-validation my-3">
          <i class="bi bi-lock-fill eye input-group-text"></i>
          <input
            type="password"
            id="pass"
            name="password"
            placeholder="Category"
            class="form-control"
          />
        </div>

        <div class="text-center">
          <button
            type="submit"
            class="btn btn-success my-2"
            style="width: 100%"
          >
            <i class="bi bi-person-check px-1"></i>ADD SITE
          </button>
        </div>
      </div>
    </form>
    </div>
    <script src="./res/jquery-3.7.1.min.js"></script>
    <script src="./script.js"></script>
  </body>
</html>
