<?php
	include 'connect.php';
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Site</title>
	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/custom.css">
	<!-- <link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"> -->
	<!-- font-awesome -->
	<script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!--Favicon-->
	<link rel="icon" type="image/x-icon" href="img/nav/kss2.png">
	<!--Script-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	<!--Angular js-->
	<script src="ang.js"></script>
</head>
<style>
	    /* body{
            overflow-x:hidden;
        }
        .nav-pills li a:hover{
            background-color:white;
            color:black;
        }
        .nav-link{
            color:white;
        }
        .bg-dark {
            height: 100vh; /* Full height */
            /* display: flex;
            flex-direction: column;
        }  */
        body {
      overflow-x: hidden;
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .nav-pills li a:hover {
      background-color: white;
      color: black !important;
    }

    .nav-link {
      color: white;
    }

    .sidebar {
      height: 100vh;
      background-color: #2c3034;
      padding-top: 20px;
    }

    .nav-link i {
      width: 20px;
    }

    .main-content {
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      min-height: 100vh;
    }

    .custom-button {
      width: 200px;
    }

    @media (max-width: 991px) {
  .sidebar {
    flex-direction: row !important;
    height: auto;
    width: 100%;
  }

  .sidebar .nav {
    flex-direction: row !important;
    justify-content: space-around; /* ✅ Only for mobile/tablet */
  }

  .sidebar .nav-item {
    margin: 0;
    flex-grow: 1;
    text-align: center;
  }

  .sidebar .nav-link span {
    display: none;
  }

  .sidebar .nav-link {
    padding: 10px 5px;
    font-size: 16px;
    text-align: center;
  }
}


    @media (max-width: 768px) {
      .sidebar {
        height: auto;
        width: 100%;
        flex-direction: row;
        justify-content: space-around;
      }

      .sidebar .nav {
        flex-direction: row !important;
      }

      .sidebar .nav-item {
        margin: 0 5px;
      }

      .sidebar .nav-link span {
        display: none;
      }

      .main-content {
        padding-top: 30px;
      }
    }

    @media (max-width: 480px) {
      .main-content img {
        width: 200px;
        height: auto;
      }

      .custom-button {
        width: 150px;
      }
    }
</style>

<body>
  <nav class="navbar" style="background-color: lightblue; color: black;">
    <a class="navbar-brand pl-2" href="admin.php">
      <img src="img/nav/kss2.png" width="60" height="40" class="d-inline-block align-top" alt="">
    </a>
  </nav>

  <div class="container-fluid">
  <div class="row flex-wrap">
    <!-- Sidebar -->
    <div class="col-12 col-lg-3 sidebar bg-dark p-2 d-flex flex-column flex-lg-column">
      <ul class="nav nav-pills flex-lg-column flex-row w-100">
          <li class="nav-item flex-fill">
            <a href="admin.php" class="nav-link text-white">
              <i class="fa-solid fa-house"></i>
              <span class="fs-5 ms-2 d-none d-lg-inline">Home</span>
            </a>
          </li>
          <li class="nav-item flex-fill">
            <a href="user.php" class="nav-link text-white">
              <i class="fa-solid fa-user-secret"></i>
              <span class="fs-5 ms-2 d-none d-lg-inline">User</span>
            </a>
          </li>
          <li class="nav-item flex-fill">
            <a href="customer.php" class="nav-link text-white">
              <i class="fa-regular fa-user"></i>
              <span class="fs-5 ms-2 d-none d-lg-inline">Customer</span>
            </a>
          </li>
          <li class="nav-item flex-fill">
            <a href="userfeedback.php" class="nav-link text-white">
              <i class="fa-regular fa-comment-dots"></i>
              <span class="fs-5 ms-2 d-none d-lg-inline">Feedback</span>
            </a>
          </li>
          <li class="nav-item flex-fill">
            <a href="alogout.php" class="nav-link text-white">
              <i class="fa-solid fa-arrow-right-from-bracket"></i>
              <span class="fs-5 ms-2 d-none d-lg-inline">Logout</span>
            </a>
          </li>
        </ul>
    </div>
    <!-- Main Content -->
    <div class="col main-content d-flex justify-content-center align-items-center flex-column py-5">
      <img src="img/nav/kss2.png" width="300" height="200" alt="Logo">
      <div class="mt-3">
        <a href="admin.php" class="btn btn-primary custom-button">Get info</a>
      </div>
    </div>
  </div>
</div>

    <!-- <nav class="navbar" style="background-color:lightblue; color:black;">
        <a class="navbar-brand pl-2" href="admin.php">
            <img src="img/nav/kss2.png" width="60" height="40" class="d-inline-block align-top" alt="">
        </a>
    </nav>
    <div class="container-fluid">
    <div class="row flex">
      <div class="bg-dark col-auto col-md-3 col-lg-3 min-vh-100">
        <div class="bg-dark">
          <ul class="nav nav-pills flex-column mt-3">
            <li class="nav-item">
                <a href="admin.php" class="nav-link" >
                  <i class="fa-solid fa-house"></i><span class="fs-5 ms-3 d-none d-sm-inline">Home</span>
                </a>
            </li>
            <li class="nav-item">
              <a href="user.php" class="nav-link">
                <i class="fa-solid fa-user-secret"></i><span class="fs-5 ms-3 d-none d-sm-inline">User</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="customer.php" class="nav-link">
                <i class="fa-regular fa-user"></i><span class="fs-5 ms-3 d-none d-sm-inline">Customer</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="alogout.php" class="nav-link">
                <i class="fa-solid fa-arrow-right-from-bracket"></i><span class="fs-5 ms-3 d-none d-sm-inline">Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-9 col-lg-9 d-flex justify-content-center align-items-center flex-column">
        <div class="text-center">
          <img src="img/nav/kss2.png" width="300" height="200" alt="...">
        </div>

         Button div -->
        <!-- <div class="text-center mt-3">
          <a href="admin.php" class="btn btn-primary custom-button" style="width: 200px;">Get info</a>
        </div>
      </div>
    </div> --> 

</body>

</html>