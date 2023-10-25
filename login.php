<?php
include("config.php");
?>

<!doctype html>
<html>
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" type="x-con" href="../images/logo_.jpg">
        <title>Drsunilmishra | Doctor, Administrator & Philanthropist</title>
        <link rel="stylesheet" href="css/bootstrapu.min.css" />
        <link rel="stylesheet" href="font/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="css/adminstyle_.css">
        <link rel="stylesheet" href="css/mainfront.css" />
  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Raleway:wght@300;400;500;700;900&display=swap" rel="stylesheet" />
    </head>

    <body>
       <!-- header -->
  <header>
    <div class="navigation-container">
      <div class="top-head">
        <div class="web-name">
          <a href="index.html"><span style="color:#fff;">Drsunilmishra</span></a>
        </div>
        <div class="ham-btn">
          <span>
            <i class="fas fa-bars"></i>
          </span>
        </div>
        <div class="times-btn">
          <span>
            <i class="fas fa-times"></i>
          </span>
        </div>
      </div>
      <!-- nav bar -->
      <div class="nav-bar" id="nav-bar">
        <nav>
          <ul>
            <li><a href="index.html">• मुख्य पृष्ठ</a></li>
            <!-- <li><a href="mission.php">उद्देश्य</a></li> -->
          </ul>
        </nav>
        <!-- <button class="login_btn mx-4"><a href="admin\index.php">C-Panel</a></button> -->
        <!-- DropDown -->
        <!-- <button class="login_btn mx-4 mb-2"><a href="#">log-In</a></button> -->
      </div>
    </div>
    <!--social icons -->

  </header>
  <!-- header -->

        <div id="wrapper-admin" class="body-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-4 col-md-4" style="background:#fff;border: 2px solid #00c6ff; border-radius: 26px; padding:25px;">
                   
                      <!-- <img class="logo" src="images/news.jpg"> -->


                        <h3 class="heading">Admin</h3>
                        <!-- Form Start -->
                        <?php
                        if (isset($_POST['login'])) {

                            include("config.php");

                            $username = mysqli_real_escape_string($conn, $_POST['username']);
                            $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
                            $sql_user_pass_cheack = "SELECT * FROM user WHERE username = '{$username}' AND password = '{$pass}'" or die("Query Failed!! --> sql_user_pass_cheack");
                            $result_sql_user_pass_cheack = mysqli_query($conn, $sql_user_pass_cheack);
                            if (mysqli_num_rows($result_sql_user_pass_cheack)>0) {
                                while ($row = mysqli_fetch_assoc($result_sql_user_pass_cheack)) {
                                    session_start();
                                    $_SESSION['user_id'] = $row['user_id'];
                                    $_SESSION['username'] = $row['username'];
                                    $_SESSION['user_role'] = $row['role'];
                                    echo "<script>window.location.href='$hostname/formarea.php'</script>";
                                }
                            } else {
                                echo "<div class='alert alert-danger'>Invalid username and password!!</div>";
                            }
                        }
                        ?>
                        <form  action="<?php $_SERVER['PHP_SELF']?>" method ="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="" required>
                            </div>
                                <input type="submit" name="login" class="btn btn-primary" value="&nbsp;&nbsp;login&nbsp;&nbsp;" />
                                <button class="btn btn-secondary"><a href="https://www.drsunilmishra.com">&nbsp;&nbsp;Back&nbsp;&nbsp;</a></button>
                        </form>
                        <!-- /Form  End -->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
