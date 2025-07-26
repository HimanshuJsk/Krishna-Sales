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
	    body{
            overflow-x:hidden;
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

      /* Table headings bold and clean */
      table thead th {
        background-color: #343a40;
        color: white;
        font-weight: 600;
      }

      /* Add hover effect on table row */
      table tbody tr:hover {
        background-color: #f1f1f1;
        transition: background-color 0.3s ease-in-out;
      }

      /* Button hover effect */
      .btn-primary:hover, .btn-danger:hover {
        opacity: 0.85;
        transform: scale(1.05);
        transition: all 0.2s ease-in-out;
      }

      /* Form title styling */
      h1 {
        font-size: 28px;
        color: #2c3034;
      }

      .table-responsive {
        border: 1px solid #dee2e6;
        border-radius: 8px;
        box-shadow: 0 0 5px rgba(0,0,0,0.1);
        overflow-x: auto;
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

        .operation-buttons {
          display: flex;
          gap: 4px;
          flex-wrap: wrap;
        }

        .operation-buttons a {
          padding: 4px 6px;
          font-size: 14px;
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

        .table-responsive {
          padding-left: 0;
          padding-right: 0;
        }

        h1 {
          font-size: 22px;
          /* text-align: center; */
        }
      }

      @media (max-width: 576px) {
        h1 {
          text-align: center !important;
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
      <div class="col-12 col-md-9 col-lg-9 px-3 py-2">
        <!--start feedback list-->
        <h1 class="text-decoration-underline mt-3 mb-4">Feedback List</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Stars</th>
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'connect.php';

                        $sql = "SELECT * FROM `feedback` ORDER BY id DESC";
                        $result = mysqli_query($con, $sql);

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id      = $row['id'];
                                $name    = $row['name'];
                                $email   = $row['email'];
                                $message = $row['message'];
                                $rating  = $row['rating'];

                                echo '
                                <tr>
                                    <th scope="row">'.$id.'</th>
                                    <td>'.$name.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$message.'</td>
                                    <td>'.$rating.' / 5</td>
                                    <td>';

                                // Print stars
                                for ($i = 1; $i <= 5; $i++) {
                                    if ($i <= $rating) {
                                        echo '<i class="fas fa-star text-warning"></i>';
                                    } else {
                                        echo '<i class="fas fa-star text-secondary"></i>';
                                    }
                                }

                                echo '<td class="d-flex flex-wrap gap-1 justify-content-center">
                                        <div class="operation-buttons">
                                            <a href="updatefeedback.php?updateid=' . $id . '" class="btn btn-primary text-light" style="text-decoration:none;">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="deletefeedback.php?deleteid=' . $id . '" class="btn btn-danger text-light" style="text-decoration:none;">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>'; 
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <!--end feedback list-->
    </div>
    </div>
</body>

</html>