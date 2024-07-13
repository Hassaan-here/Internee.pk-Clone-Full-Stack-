<?php
include "../../config/conn.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Internee's Login</title>
  <link rel="stylesheet" href="../../public/css/login.css" />
</head>

<body>

  <?php
  if (isset($_SESSION['username'])) {
    header("Location: {$hostName}/internee_portal/dashboard.php");
    exit();
  }
  ?>

  <div class="container">
    <div class="card">
      <div class="form-logo">
        <img src="../../public/images/Logo.webp" alt="Internee_logo" />
      </div>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="input-container">
          <input type="text" id="email" name="email" placeholder="Email" required />
          <i class="fas fa-envelope"></i>
        </div>

        <div class="input-container">
          <input type="password" name="password" id="Password" placeholder="Password" required />
          <i class="fas fa-eye-slash"></i>
        </div>

        <button type="submit" id="sign-in" name="submit" style="background: rgb(4, 150, 47)">
          Sign in
        </button>
        <div>
          <a href="http://localhost/PHP/Internship/Task1/Internee.pk-Clone-Full-Stack-/views/internee_portal/register.php">Create new Account</a>
        </div>
      </form>

      <?php
      if (isset($_POST['submit'])) {
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = mysqli_real_escape_string($connection, md5($_POST['password'])); // Consider using password_hash and password_verify

        $sql = "SELECT id, Full_Name, Email FROM internee_info WHERE Email='{$email}' AND Password='{$password}'";
        $result = mysqli_query($connection, $sql) or die("Query Failed");

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['username'] = $row['Full_Name'];
            $_SESSION['user_id'] = $row['id'];
            header("Location: {$hostName}/internee_portal/dashboard.php");
            exit();
          }
        } else {
          echo "<span style='color:red;'>Invalid Username and Password!</span>";
        }
      }
      ?>
    </div>
  </div>

</body>

</html>