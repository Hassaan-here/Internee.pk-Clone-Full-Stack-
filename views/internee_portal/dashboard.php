<?php
include "../../config/conn.php";
session_start();

if (!isset($_SESSION['username'])) {
  header("Location:{$hostName}/internee_portal/login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script src="../../public/js/dashboard.js" defer></script>
  <link rel="stylesheet" href="../../public/css/dashboard.css">
</head>

<body>
  <!-- Header Section-->
  <div id="side-navBar">
    <div class="logo">
      <p>Internee.Pk</p>
    </div>

    <div class="item-menu">
      <ul>
        <li class="active">
          <a href="#"><span class="fas fa-tachometer-alt"></span>DashBoard</a>
        </li>
      </ul>
    </div>
  </div>

  <div id="main-container">
    <div id="dash-Board">
      <div id="navBar-Toggle">
        <span class="fas fa-bars white" onclick="toggleNav()"></span>
        <span>Pakistans Virtual Internship Platform</span>
      </div>
      <div class="my-dash">
        <a href="#" class="dropdown-toggle">
          <span class="fas fa-user"></span><?php echo htmlspecialchars($_SESSION['username']); ?>
          <span class="fas fa-caret-down"></span>
        </a>
        <div class="sub-menu">
          <a href="#"><span class="fas fa-cog"></span> Manage Account</a>
          <a href="logout.php"><span class="fas fa-power-off"></span> Logout</a>
        </div>
      </div>
    </div>
    <div class="hero">
      <h1>Welcome!</h1>
    </div>
  </div>
</body>

</html>