<?php
include("config.php");
session_start();

if (isset($_SESSION['username'])) {
    echo ("<script>window.location.href='$hostname/admin/form-data.php'</script>");
}
?>

<!doctype html>
<html>
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" type="x-con" href="../images/logo_.jpg">
        <title>ADMIN | Login</title>
        <link rel="stylesheet" href="../css/bootstrapu.min.css" />
        <link rel="stylesheet" href="font/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="../css/adminstyle_.css">
    </head>

    <body>
        <div id="wrapper-admin" class="body-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-4 col-md-4">
                   
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
                                    header("Location:{$hostname}/admin/form-data.php");
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
                                <button class="btn btn-secondary"><a href="https://drsunilmishra.com/">&nbsp;&nbsp;Back&nbsp;&nbsp;</a></button>
                        </form>
                        <!-- /Form  End -->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
