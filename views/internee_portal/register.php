<?php
include "../../config/conn.php";
?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Internee.pk</title>
  <link rel="stylesheet" href="../../public/css/login.css" />

  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>


< <body>
  <div class="container">
    <div class="card">
      <div class="form-logo">
        <img src="../../public/images/Logo.webp" alt="Internee_logo" />
      </div>
      <form action="<?php echo  $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="input-container">
          <input type="text" id="name" name="name" placeholder="Full Name" />
          <!-- <i class="fas fa-profile"></i> -->
        </div>
        <div class="input-container">
          <input type="text" id="email" name="email" placeholder="Email" />
          <i class="fas fa-envelope"></i>
        </div>

        <div class="input-container">
          <input type="password" name="password" id="Password" placeholder="Password" />
          <i class="fas fa-eye-slash"></i>
        </div>

        <button value="submit" id="sign-in" name="submit" style="background: rgb(4, 150, 47)">
          Register
        </button>
      </form>
      <?php
      if (isset($_POST['submit'])) {

        $username = mysqli_real_escape_string($connection, $_POST['name']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = mysqli_real_escape_string($connection, md5($_POST['password']));

        $sql = "SELECT Full_Name, Email FROM internee_info WHERE Full_Name='$username' AND Email='$email'";
        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) > 0) {
          echo "<h5 style=color:red;text-align:center;margin:20px 0px>User Name already exists</h5>";
        } else {
          $sql1 = "INSERT INTO internee_info (Full_Name,Email,Password) VALUES('{$username}','{$email}','{$password}')";
          if (mysqli_query($connection, $sql1)) {
            header("Location:{$hostName}/internee_portal/login.php");
          } else {
            echo "Query Failed";
          }
        }
      }
      ?>
    </div>
  </div>
  </body>