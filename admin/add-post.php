<?php include("header.php");
include("config.php");
if (isset($_POST['submit'])) {
    // session_start();
     // Image code
     if (isset($_FILES['fileToUpload'])) {
        $file_name = $_FILES['fileToUpload']["name"];
        $file_tmp = $_FILES['fileToUpload']["tmp_name"];
        $file_type = $_FILES['fileToUpload']["type"];
        $file_size = $_FILES['fileToUpload']["size"];
        $file_ext = strtolower(end(explode('.', $file_name)));
        $allow_extension = array("jpg", "jpeg", "png");
        $file_error = array();

        if (in_array($file_ext, $allow_extension) === false) {
            $file_error[] = "This extension file not allowed, Please choose a JPG or PNG file.";
        }
        if ($file_size > 2097152) {
            $file_error[] = "Image must be 2mb or lower.";
        }
        $save_img_name =  date("d_M_Y_h_i_sa")."_". basename($file_name);
        $img_save_target = "upload/";
        if (empty($file_error) == true) {
            move_uploaded_file($file_tmp, $img_save_target . $save_img_name);
        } else {
            print_r($file_error);
            die();
        }

    }
   
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $des = mysqli_real_escape_string($conn, $_POST['des']);
    $text = mysqli_real_escape_string($conn, $_POST['text']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $post_date = date("d M, Y");

    $sql_insert_post = "INSERT INTO feedback (name,des,text,date,img, category)
                        VALUES ('{$name}','{$des}','{$text}','{$post_date}','{$save_img_name}','{$category}');";
    if (mysqli_query($conn, $sql_insert_post)) {
        echo ("<script>window.location.href='$hostname/admin/post.php'</script>");
    } else {
        echo "<div class='alert alert-danger'>Post Not Submit</div>";
    }
}
?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Add Endorsements</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <!-- Form -->
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="post_title">Name</label>
                        <input type="text" name="name" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="post_title">Designation </label>
                        <input type="text" name="des" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea name="text" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="post_title">Category </label>
                        <select name="category" class="form-control" autocomplete="off">
                            <option value="None" selected disabled><- Select Category -></option>
                            <option value="5">धर्मगुरु</option>
                            <option value="10">राजनीतिक</option>
                            <option value="15">चिकित्सक</option>
                            <option value="20">अतिरिक्त</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Post image</label>
                        <input type="file" name="fileToUpload" required>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                </form>
                <!--/Form -->
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>