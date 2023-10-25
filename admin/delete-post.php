<?php
include("config.php");
$post_id_by_addbar = $_GET['post_id'];

$sql_delete_post = "DELETE FROM feedback WHERE f_id = {$post_id_by_addbar};";
if (mysqli_query($conn,$sql_delete_post)) {
    echo ("<script>window.location.href='$hostname/admin/post.php'</script>");

} else {
    echo ("<div class='alert alert-danger'>Can't Delete Post!!</div>");
}
mysqli_close($conn);

?>