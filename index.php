<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <?php
  session_start();

  if (isset($_GET['page'])) {
    $url = $_GET['page'];
  } else {
    $url = 'home';
  }
  switch ($url) {
    case 'home':
      require_once 'views/home.php';
      break;
    case 'desktops':
      require_once 'views/desktops.php';
      break;
    case 'laptops':
      require_once 'views/laptops.php';
      break;
    case 'monitors':
      require_once 'views/monitors.php';
      break;
    case 'login':
      require_once 'views/login.php';
      break;
    case 'register':
      require_once 'views/register.php';
      break;
    default:
      require_once 'views/home.php';
  }
  ?>