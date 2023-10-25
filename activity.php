<?php include('header.php'); ?>
    <!-- Home Page Start -->
    <!-- Endorsements start block -->
    <div class="row">
      <section class="endorsements">
        <div class="col-md-12 endorsementsHeadling mb-5">
          <h1>गतिविधियाँ</h1>
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
          $record_limi = 4;
          $card_group_num = 1;
          $offset = ($page_index_by_addbar - 1) * $record_limi;
            $sql_show_user = "SELECT * FROM feedback ORDER BY f_id LIMIT {$offset},{$record_limi}";
            $result_sql_show_user = mysqli_query($conn, $sql_show_user) or die("Query Failed!!");
            if (mysqli_num_rows($result_sql_show_user) > 0) {
              while ($row = mysqli_fetch_assoc($result_sql_show_user)) {
            ?>
                 <!-- Card Section Start -->
                 <div class="col-md-3" data-aos="flip-left">
                        <div class="card text-center" style="
                                  color: grey;
                                  font-family: 500;
                                  font-size: small;
                                ">                         
                          <div id="carouselExampleControls<?php echo $card_group_num ?>" class="carousel slide my-2" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="images/page1.png" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="images/page2.png" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="images/page3.png" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls<?php echo $card_group_num ?>" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls<?php echo $card_group_num ?>" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>

                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 800;
                                    font-size: larger;
                                  ">मेगा ब्लड डोनेशन कैंप</span>
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  ">01-02-2023</span>
                          <div class="card-body p-4" style="overflow-y: scroll">
                            <p class="card-text" style="height: 120px">
                              "डॉ सुनील मिश्र एक कर्मठ, सहयोगी
                              व्यक्तित्व के धनी चिकित्सक है। चिकित्सा के
                              क्षेत्र में सदैव पूरी तत्परता से सहयोग करते
                              हैं। पिछले लगभग 3 दशक से, पीड़ित मानवता की सेवा हेतु
                              उनका अविस्मरणीय योगदान रहा"
                            </p>
                          </div>
                          
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  " class="mb-4"></span>
                        </div>
                      </div>
                      <!-- Card Section End -->
            <?php
            $card_group_num++;
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
                        echo ("<li><a href='$hostname/activity.php?page_index=" . ($page_index_by_addbar - 1) . "'>Prev</a></li>");
                    }

                    for ($i = 1; $i <= $total_page; $i++) {

                        if ($page_index_by_addbar == $i) {
                            $active_page = "active";
                        } else {
                            $active_page = "";
                        }

                        echo ("<li class=$active_page><a href='$hostname/activity.php?page_index=$i'>$i</a></li>");
                    }
                    if ($page_index_by_addbar < $total_page) {
                        echo ("<li><a href='$hostname/activity.php?page_index=" . ($page_index_by_addbar + 1) . "'>Next</a></li>");
                    }
                    echo ("</ul>");
                }
                ?>
        </div>
      </section>
    </div>
    <!-- Endorsements End block -->
   <?php include('footer.php'); ?>