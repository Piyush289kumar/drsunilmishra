<?php include("header.php"); ?>
    <!-- Home Page Start -->
    <!-- Endorsements start block -->
    <div class="row">
      <section class="endorsements">
        <div class="col-md-12 endorsementsHeadling mb-5">
          <p>Opinion of<br>Enlightened People of Society....</p>
        </div>
        <div class="col-md-12">
          <div class="row mb-5">
            
            <!-- PHP CODE -->
            <?php
            include("config.php");
            if (isset($_GET['page_index'])) {
              $page_index_by_addbar = $_GET['page_index'];
          } else {
              $page_index_by_addbar = 1;
          }
          $record_limi = 9;
          $offset = ($page_index_by_addbar - 1) * $record_limi;
            $sql_show_user = "SELECT * FROM feedback ORDER BY f_id LIMIT {$offset},{$record_limi}";
            $result_sql_show_user = mysqli_query($conn, $sql_show_user) or die("Query Failed!!");
            if (mysqli_num_rows($result_sql_show_user) > 0) {
              while ($row = mysqli_fetch_assoc($result_sql_show_user)) {
            ?>
                <!-- Card Section Start -->
               
                            <div class="col-md-4 mb-3">
                              <div class="card text-center" style="background-image: linear-gradient( 105.3deg,  rgba(30,39,107,1) 21.8%, rgba(77,118,221,1) 100.2% );
                                  color: #fff;
                                  font-family: 500;
                                  font-size: small;
                                  border-left: 4mm ridge #FFCD4B;
                                  height: 550px;
                                ">
                                <div class="card-body p-4" style="overflow-y: scroll;">
                                  <p class="card-text" style="height: 180px">
                                    "<?php echo ($row['text']) ?>"
                                  </p>
                                </div>
                                <img src="admin/upload/<?php echo ($row['img']) ?>" class="card-img-top" alt="Unlink.." style="
                                    width: 80%;
                                    border-radius: 50%;
                                    margin: auto;
                                    padding: 20px;
                                  " />
                                <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 800;
                                    font-size: larger;
                                    color: #fff;
                                  "><?php echo ($row['name']) ?></span>
                                <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                    color: #fff;
                                  "><?php echo ($row['des']) ?></span>
                                <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                    color: #fff;
                                  " class="mb-4"></span>
                              </div>
                            </div>
                          
                <!-- Card Section End -->
            <?php
              }
            } ?>
          </div>

          
          <?php
                $sql_total_post_record = "SELECT * from feedback" or die("Query Failed !! --> sql_total_post_record");
                $result_sql_total_post_record = mysqli_query($conn, $sql_total_post_record);
                if (mysqli_num_rows($result_sql_total_post_record) > 0) {
                    $total_post_record = mysqli_num_rows($result_sql_total_post_record);
                    $total_page = ceil($total_post_record / $record_limi);
                    echo ("<ul class='pagination admin-pagination'>");

                    if ($page_index_by_addbar > 1) {
                        echo ("<li><a href='$hostname/endorsements.php?page_index=" . ($page_index_by_addbar - 1) . "' >Prev</a></li>");
                    }

                    for ($i = 1; $i <= $total_page; $i++) {

                        if ($page_index_by_addbar == $i) {
                            $active_page = "active";
                        } else {
                            $active_page = "";
                        }

                        echo ("<li class=$active_page><a href='$hostname/endorsements.php?page_index=$i'>$i</a></li>");
                    }
                    if ($page_index_by_addbar < $total_page) {
                        echo ("<li><a href='$hostname/endorsements.php?page_index=" . ($page_index_by_addbar + 1) . "'>Next</a></li>");
                    }
                    echo ("</ul>");
                }
                ?>
        </div>
      </section>
    </div>
    <!-- Endorsements End block -->
   <?php include('footer.php'); ?>