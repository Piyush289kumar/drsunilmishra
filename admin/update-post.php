<?php include "header.php";
include("config.php");

$post_id_by_addbar = $_GET['post_id'];


// UPDATION CODE

if (isset($_POST['submit'])) {
    if (empty($_FILES['new-image']['name'])) {
        $save_img_name =   $_POST['old-image'];
    } else {
        if (isset($_FILES['new-image'])) {
            $file_name = $_FILES['new-image']["name"];
            $file_tmp = $_FILES['new-image']["tmp_name"];
            $file_type = $_FILES['new-image']["type"];
            $file_size = $_FILES['new-image']["size"];
            $file_ext = strtolower(end(explode('.', $file_name)));
            $allow_extension = array("jpg", "jpeg", "png");
            $file_error = array();
            if (in_array($file_ext, $allow_extension) === false) {
                $file_error[] = "This extension file not allowed, Please choose a JPG or PNG file.";
            }
            if ($file_size > 2097152) {
                $file_error[] = "Image must be 2mb or lower.";
            }
            $save_img_name =  date("d_M_Y_h_i_sa") . "_" . basename($file_name);
            $img_save_target = "upload/";
            if (empty($file_error) == true) {
                move_uploaded_file($file_tmp, $img_save_target . $save_img_name);
            } else {
                print_r($file_error);
                die();
            }
        }
    }


    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $des = mysqli_real_escape_string($conn, $_POST['des']);
    $text = mysqli_real_escape_string($conn, $_POST['text']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $post_date = date("d M, Y");

    $sql_update_post = "UPDATE feedback SET name = '{$name}', des = '{$des}', text = '{$text}', 
    img = '{$save_img_name}', category = '{$category}' WHERE f_id = '{$post_id_by_addbar}';";

    $result_sql_update_post = mysqli_multi_query($conn, $sql_update_post);
    if ($result_sql_update_post) {
        echo ("<script>window.location.href='$hostname/admin/post.php'</script>");
    } else {
        echo "<div class='alert alert-danger'>Post is Not Update !!</div>";
    }
}
?>

<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Update ENDORSEMENT</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <!-- Form for show edit-->
                <?php


                $sql_show_post_data = "SELECT * FROM feedback WHERE  f_id = {$post_id_by_addbar}";
                $result_sql_show_post_data = mysqli_query($conn, $sql_show_post_data) or die("Query Failed !! --> sql_show_post_data");
                if (mysqli_num_rows($result_sql_show_post_data) > 0) {
                    while ($row = mysqli_fetch_assoc($result_sql_show_post_data)) {

                ?>
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" autocomplete="off">
                            <div class="form-group">
                                <input type="hidden" name="post_id" class="form-control" value="<?php echo ($row['f_id']) ?>" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="">Profile picture</label>
                                <input type="file" name="new-image">
                                <img src="upload/<?php echo $row['img']; ?>" height="150px" style="border-radius: 50%; margin-top:12px;">
                                <input type="hidden" name="old-image" value="<?php echo $row['img']; ?>">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputTile">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputUsername" value="<?php echo ($row['name']) ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputTile">Designation</label>
                                <input type="text" name="des" class="form-control" id="exampleInputUsername" value="<?php echo ($row['des']) ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1"> ENDORSEMENT</label>
                                <textarea name="text" class="form-control" required rows="5"><?php echo ($row['text']) ?></textarea>
                            </div>



                            <div class="form-group">
                                <label for="post_title">Category </label>
                                <select name="category" class="form-control" autocomplete="off">
                                    <?php
                                    $valName = $row['category'];
                                    $valNum = 0;    
                                    if ($valName == 5) {
                                        $valName = "धर्मगुरु";
                                        $valNum = 5;
                                    } elseif ($valName == 10 ) {
                                        $valName = "राजनीतिक";
                                        $valNum = 10;
                                    }elseif ($valName == 15 ) {
                                        $valName = "चिकित्सक";
                                        $valNum = 15;
                                    }elseif ($valName == 20 ) {
                                        $valName = "अतिरिक्त";
                                        $valNum = 20;
                                    } 
                                    
                                    ?>
                                    <option value="<?php echo $valNum?>" selected><?php echo $valName ?></option>
                                    <option value="5">धर्मगुरु</option>
                                    <option value="10">राजनीतिक</option>
                                    <option value="15">चिकित्सक</option>
                                    <option value="20">अतिरिक्त</option>
                                </select>
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary" value="Update" />
                        </form>
                        <!-- Form End -->
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