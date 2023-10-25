<?php include('header.php'); 
include('config.php'); ?>
<div class="container-fluid endorsements">
<div class="col-md-12 endorsementsHeadling mb-5">
      <h1>Spotlight Moments</h1>
    </div>
    <!-- Card Section -->
    <section>
        <div class="row m-2">
             <!-- View More button -->
        <div class="col-md-12 mb-2" data-aos="zoom-in" data-aos-duration="800">
          <a href="index.php" class="btn btn-primary" style="
                    padding: 6px 100px;
                    background-image: linear-gradient( 109.6deg,  rgba(39,142,255,1) 11.2%, rgba(98,113,255,0.78) 100.2% ) !important;
                    border: none;
                    border-radius: 24px;
                  "><i class="fa-solid fa-arrow-left"></i>&#160; Back</a>
        </div>
        <!-- View More button -->
            <!-- PHP CODE -->
            <?php
             if (isset($_GET['page_index'])) {
                $page_index_by_addbar = $_GET['page_index'];
            } else {
                $page_index_by_addbar = 1;
            }
            $record_limi = 8;
            $offset = ($page_index_by_addbar - 1) * $record_limi;



                    $sql_show_post_record = "SELECT *  FROM media ORDER BY media.media_date LIMIT {$offset},{$record_limi}" or die("Query Failed!! --> sql_show_mission_record");
                    $result_sql_show_post_record = mysqli_query($conn, $sql_show_post_record);
                    if (mysqli_num_rows($result_sql_show_post_record) > 0) {
                        while ($row = mysqli_fetch_assoc($result_sql_show_post_record)) {
                            ?>
            <!-- card block start -->
            <div class="col-md-3 mb-3 text-center">
                <div class="card cardbg" style="border: 2px solid transparent; border-radius: 12px;">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">

                        <a href="media.php?post_id=<?php echo($row['media_id']) ?>">
                            <img src="admin/upload/<?php echo($row['img']) ?>" class="img-fluid"
                                style="border: 1px solid transparent; border-radius: 12px;" /></a>
                        <a href="media.php?post_id=<?php echo($row['media_id']) ?>">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <!-- <h5 class="card-title">Post Title</h5>  -->
                        <p class="card-text"><?php echo $row['name'] ?></p>

                        <div class="col-md-12  text-center">
                        <a href="media.php?post_id=<?php echo($row['media_id']) ?>" class="btn btn-primary"
                            style="border:none; border-radius: 18px; margin-top: 5px; background-image: linear-gradient( 109.6deg,  rgba(39,142,255,1) 11.2%, rgba(98,113,255,0.78) 100.2% ) !important;">देखिए</a></div>
                    </div>
                </div>
            </div>
            <!-- card block end -->

            <?php }}

            // pagenation block start
            $sql_total_post_record = "SELECT * from media" or die("Query Failed !! --> sql_total_post_record");
            $result_sql_total_post_record = mysqli_query($conn, $sql_total_post_record);
            if (mysqli_num_rows($result_sql_total_post_record) > 0) {
                $total_post_record = mysqli_num_rows($result_sql_total_post_record);
                $total_page = ceil($total_post_record / $record_limi);
                echo ("<ul class='pagination admin-pagination'>");

                if ($page_index_by_addbar > 1) {
                    echo ("<li><a href='$hostname/media_card.php?page_index=" . ($page_index_by_addbar - 1) . "'>Prev</a></li>");
                }

                for ($i = 1; $i <= $total_page; $i++) {

                    if ($page_index_by_addbar == $i) {
                        $active_page = "active";
                    } else {
                        $active_page = "";
                    }

                    echo ("<li class=$active_page><a href='$hostname/media_card.php?page_index=$i'>$i</a></li>");
                }
                if ($page_index_by_addbar < $total_page) {
                    echo ("<li><a href='$hostname/media_card.php?page_index=" . ($page_index_by_addbar + 1) . "'>Next</a></li>");
                }
                echo ("</ul>");
            }
            // pagenation block end
            ?>
            
        </div>
    </section>
    <!-- Card Section -->
    
</div>
<?php include('footer.php'); ?>