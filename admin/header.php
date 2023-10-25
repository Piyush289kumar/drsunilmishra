<?php
include("config.php");
$current_page = basename($_SERVER['PHP_SELF']);
$prefix_word = "ADMIN Panel";
switch ($current_page) {
    case 'add-category.php':
        $page_title = "{$prefix_word} - Category Add";
        break;
    case 'add-post.php':
        $page_title = "{$prefix_word} - Post Add";
        break;
    case 'add-user.php':
        $page_title = "{$prefix_word} - User Add";
        break;
    case 'category.php':
        $page_title = "{$prefix_word} - Category";
        break;
    case 'post.php':
        $page_title = "{$prefix_word} - Post";
        break;
    case 'settings.php':
        $page_title = "{$prefix_word} - Settings";
        break;
    case 'update-category.php':
        $page_title = "{$prefix_word} - Category Update";
        break;
    case 'update-post.php':
        $page_title = "{$prefix_word} - Post Update";
        break;
    case 'update-user.php':
        $page_title = "{$prefix_word} - User Update";
        break;
    case 'users.php':
        $page_title = "{$prefix_word} - Users";
        break;
    default:
        $page_title = $website_display_default_name;
        break;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" type="x-con" href="../images/logo_.png">
    <title><?php echo ($page_title); ?></title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrapu.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Animated.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="../css/adminstyleF.css">
    <link rel="shortcut icon" type="x-con" href="../images/logo_.png">
</head>

<body>
    <!-- HEADER -->
    <div id="header-admin">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- LOGO-Out -->
                <div class="col-md-offset-6  col-md-3">
                    <a href="logout.php" class="admin-logout">Logout</a>
                </div>
                <!-- /LOGO-Out -->
            </div>
        </div>
    </div>
    <!-- /HEADER -->
    <!-- Menu Bar -->
    <div id="admin-menubar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="admin-menu">

                        <li>
                            <a href="form-data.php">Form Data</a>
                        </li>
                        <li>
                            <a href="add-note.php">Note</a>
                        </li>
                        <li>
                            <a href="media_post.php">Media</a>
                        </li>
                        <li>
                            <a href="post.php">Endorsements</a>
                        </li>
                        <li>
                            <a href="add-vlink.php">Youtube Link</a>
                        </li>
                        <li>
                            <a href="users.php">Users</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /Menu Bar -->