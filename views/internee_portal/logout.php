<?php
include "../../config/conn.php";

session_start();

session_unset();

session_destroy();

header("Location:{$hostName}/internee_portal/login.php");
