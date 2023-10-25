<?php include('header.php'); 
include('config.php'); ?>

<div class="container-fluid endorsements">
<div class="col-md-12 endorsementsHeadling mb-5">
<h1>Spotlight Moments</h1>
    </div>

  <div class="row mb-4">
     <!-- View More button -->
     <div class="col-md-12 mb-2" data-aos="zoom-in" data-aos-duration="800">
          <a href="media_card.php" class="btn btn-primary" style="
                    padding: 6px 120px;
                    background-image: linear-gradient( 109.6deg,  rgba(39,142,255,1) 11.2%, rgba(98,113,255,0.78) 100.2% ) !important;
                    border: none;
                    border-radius: 24px;
                  "><i class="fa-solid fa-arrow-left"></i>&#160; Back</a>
        </div>
        <!-- View More button -->

    <!-- PHP CODE -->
    
    <?php
    $post_id_by_addbar = $_GET['post_id'];   

    

    if (isset($_GET['page_index'])) {
      $page_index_by_addbar = $_GET['page_index'];
    } else {
      $page_index_by_addbar = 1;
    }
    $record_limi = 8;
    $offset = ($page_index_by_addbar - 1) * $record_limi;
    $sql_show_post_record = "SELECT DISTINCT media_img FROM media_item WHERE media_post_id = {$post_id_by_addbar} LIMIT {$offset},{$record_limi}" or die("Query Failed!! --> sql_show_mission_record");
    $result_sql_show_post_record = mysqli_query($conn, $sql_show_post_record);
    
    if (mysqli_num_rows($result_sql_show_post_record) > 0) {
    
  
      while ($row = mysqli_fetch_assoc($result_sql_show_post_record)) {
        
        ?>
        
        <div class="col-md-3 my-1">
          <img src="<?php echo 'admin/upload/media/'.$row['media_img'];?>" alt="unlink" srcset="" style="border:3px solid grey;border-radius: 8px; width:100%;">
        </div>
      <?php }
    }
    // pagenation block start
    $sql_total_post_record = "SELECT DISTINCT media_img FROM media_item WHERE media_post_id = {$post_id_by_addbar}" or die("Query Failed !! --> sql_total_post_record");
    $result_sql_total_post_record = mysqli_query($conn, $sql_total_post_record);
    if (mysqli_num_rows($result_sql_total_post_record) > 0) {
      $total_post_record = mysqli_num_rows($result_sql_total_post_record);
      $total_page = ceil($total_post_record / $record_limi);
      echo ("<ul class='pagination admin-pagination'>");
      if ($page_index_by_addbar > 1) {
        echo ("<li><a href='$hostname/media.php?page_index=" . ($page_index_by_addbar - 1)."&post_id=" . ($post_id_by_addbar)  ."'>Prev</a></li>");
      }
      for ($i = 1; $i <= $total_page; $i++) {
        if ($page_index_by_addbar == $i) {
          $active_page = "active";
        } else {
          $active_page = "";
        }
        echo ("<li class=$active_page><a href='$hostname/media.php?page_index=$i&post_id=" . ($post_id_by_addbar)  ."'>$i</a></li>");
      }
      if ($page_index_by_addbar < $total_page) {
        echo ("<li><a href='$hostname/media.php?page_index=" . ($page_index_by_addbar + 1) . "&post_id=" . ($post_id_by_addbar)  ."'>Next</a></li>");
      }
      echo ("</ul>");
    }
    // pagenation block end
    ?>
  </div>
</div>
<?php include('footer.php'); ?>