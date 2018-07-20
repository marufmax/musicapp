<?php
  ob_start();

  $timezone = date_default_timezone_set("Asia/Dhaka");

  $conn = mysqli_connect("localhost", "root", "", "musicapp");

if (mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
}