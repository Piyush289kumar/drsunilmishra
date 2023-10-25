<?php include("header.php");
include("config.php");
if (isset($_POST['submit'])) {
    // session_start();
   
    $note = mysqli_real_escape_string($conn, $_POST['note']);
    $post_date = date("d M, Y");

    $sql_insert_post = "INSERT INTO vlink (vlink,vdate)
                        VALUES ('{$note}','{$post_date}');";
    if (mysqli_query($conn, $sql_insert_post)) {
        echo ("<script>window.location.href='$hostname'</script>");
    } else {
        echo "<div class='alert alert-danger'>Note Not Submit</div>";
    }
}
?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Update Youtube Link</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <!-- Form -->
                <?php
                
                
                $sql_show_post_data = "SELECT * FROM vlink ORDER BY vid DESC LIMIT 0,1";
                $result_sql_show_post_data = mysqli_query($conn, $sql_show_post_data) or die("Query Failed !! --> sql_show_post_data");
                if (mysqli_num_rows($result_sql_show_post_data) > 0) {
                    while ($row = mysqli_fetch_assoc($result_sql_show_post_data)) {

                ?>

                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                        <label for="exampleInputPassword1">Youtube Link</label>
                        <textarea name="note" class="form-control" rows="5" required><?php echo ($row['vlink'])?></textarea>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                </form>
                <!--/Form -->
                <?php
                        }
                    } else {
                        echo ("<div class='alert alert-danger'>Result Not Found.</div>");
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>