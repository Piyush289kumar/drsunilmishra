<?php include("header.php"); ?>
<!-- Home Page Start -->
<div>
  <section class="homeSection" id="laptopScreen">
    <div class="row">
      <div class="col-md-6 contectText mt-1" style="display: flex; flex-direction: column; justify-content: flex-end;">
        <h2 class="mb-4" id="h1text" style="color: #fff; font-size: 60px;
  font-weight: 900;
  line-height: 3.8rem;">Dr Sunil Mishra</h2>
        <p class="mt-2">
          Medical Doctor, Hospital Administrator, Philanthropist & Blogger
        </p>
      </div>
      <div class="col-md-6 text-center">
        <img src="images/mainImg2.png" alt="Dr Sunil Mishra Picture" class="drsunilmishrapic" />
      </div>
    </div>
    <!-- PHP CODE NOTE -->
    <?php
    include("config.php");
    $sql_note = "SELECT * FROM note ORDER BY note_id DESC LIMIT 0,1";
    $result_sql_note = mysqli_query($conn, $sql_note) or die("Query Failed!!");
    if (mysqli_num_rows($result_sql_note) > 0) {
      while ($row = mysqli_fetch_assoc($result_sql_note)) {
    ?>
        <div class="row">
          <div class="col-md-12 text-center mb-3" data-aos="zoom-in" data-aos-duration="1000" style="
              color: aliceblue;
              display: flex;
              justify-content: center;
              margin-top: 50px;
              margin-bottom: 0;
            ">
            <div class="note-box" style="
                color: #000;
                background: #fff;
                border: 1px solid #fff;
                border-radius: 24px;
                padding: 5px 5px 5px 5px;
              ">
              <p style="
                  border: 1px solid #000;
                  border-radius: 24px;
                  border-style: dashed;
                  padding: 16px;
                  margin: 0;
                ">
                "<?php echo ($row['note_text']) ?>"
              </p>
            </div>
          </div>
        </div>
    <?php
      }
    } ?>
    <!-- PHP CODE NOTE -->
  </section>
  <section class="homeSection" id="mobileScreen">
    <div>
      <div class="col-md-12 text-center">
        <img src="images/mainImg2.png" alt="test" class="img-responsive" style="width: 100%;">
        <div style="color: #fff;">
          <h1 style="color: #fff; font-size:32px;  font-weight: 900;  line-height: 3.8rem;">Dr Sunil Mishra</h1>
          <p class="mt-0">
            Medical Doctor, Hospital Administrator, Philanthropist & Blogger
          </p>
        </div>
      </div>
      <!-- PHP CODE NOTE -->
      <?php
      include("config.php");
      $sql_note = "SELECT * FROM note ORDER BY note_id DESC LIMIT 0,1";
      $result_sql_note = mysqli_query($conn, $sql_note) or die("Query Failed!!");
      if (mysqli_num_rows($result_sql_note) > 0) {
        while ($row = mysqli_fetch_assoc($result_sql_note)) {
      ?>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 text-center my-3" data-aos="zoom-in" data-aos-duration="1000" style="
              color: aliceblue;
              display: flex;
              justify-content: center;
              margin-top: 50px;
              margin-bottom: 0;
            ">
                <div class="note-box" style="
                color: #000;
                background: #fff;
                border: 1px solid #fff;
                border-radius: 24px;
                padding: 5px 5px 5px 5px;
              ">
                  <p style="
                  border: 1px solid #000;
                  border-radius: 18px;
                  border-style: solid;
                  padding: 16px;
                  margin: 0;
                ">
                    "<?php echo ($row['note_text']) ?>"
                  </p>
                </div>
              </div>
            </div>
          </div>
      <?php
        }
      } ?>
      <!-- PHP CODE NOTE -->
    </div>
  </section>
  <!-- Home Page End -->
  <!-- about Me Start -->
  <section class="about-me px-md-5 py-md-3" style="background-color: #d0efff">
    <div class="row contentAboutMe">
      <div class="col-md-4 mt-2 text-center">
        
        <div class="card" style="  border:12px solid #fff; border-radius: 12px;">
          <img src="images/second_img.jpeg" alt="Avatar" style="width:100%;border-radius: 8px;">
        </div>


      </div>
      <div class="col-md-8 contentAboutMeText" style="text-align: center!important;">
        <h4>Prologue of<br>Action and Thoughts....</h4>
        <p>I have been active in the field of medical education and medical services for more than 3 decades. Along with academic work, due to my interest, I devoted most of my time to administrative and management work.</p>
        <p>I have been interested in medical education and hospital management since the beginning. </p>
        <p>I like to give advice to suffering people based on my knowledge, understanding, and experience and help them as per my capacity. </p>
        <p> Till now, I have made efforts to communicate with the people of all sections of society and keep them alive. During my tenure so far, I have made my small effort in serving the needy people and suffering humanity by successfully organizing various workshops, seminars, conferences, free medical camps, and blood donation camps.</p>
        <p>I got the opportunity to attend many programs for specially-abled people and by going there I have seen the miracle of God's power. </p>
        <p>I got the continuous opportunities to meet the old people living in the old age home and after going there, I saw the actions of ungrateful people towards their parents and running away from their duty. </p>
        <p> An important and ambitious program <b>SAMVAD PROGRAM</b> has been started in the direction of ending the distrust arising between doctors, hospitals, and society, under which more than 18 positive conversations have been organized so far. Its pleasant results have also started emerging. I believe that if any work is done with full devotion, dedication, and hard work, it can never fail. </p>
        <p> I am always available for the service of suffering humanity, upliftment of society, and development work. For this purpose, as per my capacity and availability, I will always be ready and available for service, advice, and cooperation in any program, workshop, seminar, conference, free medical camp, and free blood donation camp, organizing programs in old age homes for old people or other service works. </p>
        <p>Spiritualism is very important in life for every person, if we are not able to progress on the spiritual path in our life then everything is in vain.</p>
        <p>If we can fulfil our social, family, and materialistic needs without compromising on our principles and values in our lives by maintaining a balance between spirituality, family, daily work, and responsibilities, then we can be the happiest people. </p>
      </div>

      <div class="col-12 px-2 mb-2" style="background: #fff; border-radius:24px;">
        <div class="container-fluid mt-4 mb-4 text-center">
            <p style="font-size:85%;">"आप हमेशा वही देते हैं जो आपके पास है। अगर आप अंदर से खुश हैं तो
              आप जहां भी जाएंगे खुशियां बिखेरेंगे।"</p>
              <img src="images/processPic.png" alt="processPic" style="width: 100%;">
          </div>
      </div>

    </div>
  </section>
  <!-- Youtube Section Start -->
  <div class="container-fluid">
    <div class="row py-3 px-1" style="background-color: #fff;">
      <div class="col-md-6">
        <!-- PHP CODE NOTE -->
        <?php
        include("config.php");
        $sql_vlink = "SELECT * FROM vlink ORDER BY vid DESC LIMIT 0,1";
        $result_sql_vlink = mysqli_query($conn, $sql_vlink) or die("Query Failed!!");
        if (mysqli_num_rows($result_sql_vlink) > 0) {
          while ($row = mysqli_fetch_assoc($result_sql_vlink)) {
        ?>
            <div class="col-md-12 youtubeFrame text-center" data-aos="fade-up">
              <iframe id="youtubeIframe" width="100%" height="340" src="https://www.youtube.com/embed/<?php echo $row['vlink'] ?>?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="1" style="border-radius: 10px"></iframe>
            </div>
      </div>
      <div class="col-md-6 px-4" data-aos="fade-up">
        <p><?php echo $row['text'] ?></p>
      </div>
  <?php
          }
        } ?>
    </div>
  </div>
  <!-- Youtube Section End -->
  <!-- about Me End -->
  <!-- logo Section Start -->
  <!-- iFrame Start -->
  <section class="gatividhi">
    <div class="col-md-12 endorsementsHeadling mt-0 py-3">
      <h3 style="color: #fff;">Landmarks....</h3>
    </div>
    <div class="container-fluid">
      <div class="row text-center" style="justify-content: center;">
        <!-- Frame body start -->
        <div class="col-md-2 mx-md-3 my-2" data-aos="fade-up">
          <div class="text-center" style="border-radius: 12px; color: #fff;">
            <a href="https://www.facebook.com/drsunilmishra4all"><img src="images/fblogo.png" alt="Avatar" style="width:150px"></a>
            <div class="text mt-4 px-3">
              <p style="font-size: 16px; margin-bottom: 8px; ">Facebook Page</p>
            </div>
          </div>
        </div>
        <!-- Frame body end -->
        <!-- Frame body start -->
        <div class="col-md-2 mx-md-3 my-2" data-aos="fade-up">
          <div class="text-center" style="border-radius: 12px; color: #fff;">
            <a href="https://www.facebook.com/indianredcrosssocietyjabalpur"><img src="images/IRCP.png" alt="Avatar" style="width:150px"></a>
            <div class="text mt-4 px-3">
              <p style="font-size: 16px; margin-bottom: 8px; ">इंडियन रेड क्रॉस सोसाइटी, जबलपुर</p>
            </div>
          </div>
        </div>
        <!-- Frame body end -->
        <!-- Frame body start -->
        <div class="col-md-2 mx-md-3 my-2" data-aos="fade-up">
          <div class="text-center" style="border-radius: 12px; color: #fff;">
            <a href="https://www.facebook.com/mahakoshalfoundaton"><img src="images/mahakoshal.png" alt="Avatar" style="width:150px"></a>
            <div class="text mt-4 px-3">
              <p style="font-size: 16px; margin-bottom: 8px; ">महाकोशल फाउंडेशन</p>
            </div>
          </div>
        </div>
        <!-- Frame body end -->
        <!-- Frame body start -->
        <div class="col-md-2 mx-md-3 my-2" data-aos="fade-up">
          <div class="text-center" style="border-radius: 12px; color: #fff;">
            <a href="https://www.facebook.com/baderiametroprimehospitaljansampark"><img src="images/sambadLogo.png" alt="Avatar" style="width:150px"></a>
            <div class="text mt-4 px-3">
              <p style="font-size: 16px; margin-bottom: 8px; ">संवाद</p>
            </div>
          </div>
        </div>
        <!-- Frame body end -->
        <!-- Frame body start -->
        <div class="col-md-2 mx-md-3 my-2" data-aos="fade-up">
          <div class="text-center" style="border-radius: 12px; color: #fff;">
            <a href="login.php"><img src="images/sewaGroup.png" alt="Avatar" style="width:150px"></a>
            <div class="text mt-4 px-3">
              <p style="font-size: 16px; margin-bottom: 8px; ">सेवा ग्रुप</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include("facebookFrame.php") ?>
  <!-- iFrame End -->
  <!-- logo Section End -->
  <!-- Endorsements Main Div Block Start -->
  <!-- Endorsements start block -->
  <!-- endorsementBigDevice section Start -->
  <section class="endorsements endorsementBigDevice" style="background-color: #d0efff;">
    <div class="row">
      <div class="col-md-12 endorsementsHeadling mb-5">
        <h1 style="color:#03254c;">Opinion of<br>Enlightened People of Society....</h1>
      </div>
      <div class="col-md-12 ">
        <section class="pt-1 pb-1">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="row">
                        <div class="col-md-4" data-aos="flip-left">
                          <div class="card text-center" style="background-image: linear-gradient( 105.3deg,  rgba(30,39,107,1) 21.8%, rgba(77,118,221,1) 100.2% );
                                  color: #fff;
                                  font-family: 500;
                                  font-size: small;
                                  border-left: 4mm ridge #FFCD4B;
                                ">
                            <div class="card-body p-4">
                              <p class="card-text" style="height: 180px">
                                "आदरणीय डॉ मिश्रा जी कर्मठ ईमानदारी से प्रत्येक कार्य को सम्पादित करने वाले महान व्यक्तित्व धनी अनेक वर्षों से धार्मिक एवं सामाजिक कार्यकर्ता के रूप में आपका नाम हमेशा अग्रिम पंक्ति में लिया जाता रहा है में ईश्वर यही प्रार्थना करता हूँ आप स्वस्थ रहें प्रसन्न रहें संस्कारधानी का नाम और ऊँचाई पर ले जाये।"
                              </p>
                            </div>
                            <img src="images/स्वामी अशोकानंद .png" class="card-img-top" alt="Unlink.." style="
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
                                  ">स्वामी अशोकानंद</span>
                            <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                    color: #fff;
                                  ">भक्ति धाम</span>
                            <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                    color: #fff;
                                  " class="mb-4">जबलपुर</span>
                          </div>
                        </div>
                        <div class="col-md-4" data-aos="flip-left">
                          <div class="card text-center" style="background-image: linear-gradient( 105.3deg,  rgba(30,39,107,1) 21.8%, rgba(77,118,221,1) 100.2% );
                                  color: #fff;
                                  font-family: 500;
                                  font-size: small;
                                  border-left: 4mm ridge #FFCD4B;
                                ">
                            <div class="card-body p-4">
                              <p class="card-text" style="height: 180px">
                                "आदरणीय डॉ मिश्रा जी कर्मठ ईमानदारी से प्रत्येक कार्य को सम्पादित करने वाले महान व्यक्तित्व धनी अनेक वर्षों से धार्मिक एवं सामाजिक कार्यकर्ता के रूप में आपका नाम हमेशा अग्रिम पंक्ति में लिया जाता रहा है में ईश्वर यही प्रार्थना करता हूँ आप स्वस्थ रहें प्रसन्न रहें संस्कारधानी का नाम और ऊँचाई पर ले जाये।"
                              </p>
                            </div>
                            <img src="images/ashokRohani.png" class="card-img-top" alt="Unlink.." style="
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
                                  ">स्वामी अशोकानंद</span>
                            <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                    color: #fff;
                                  ">भक्ति धाम</span>
                            <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                    color: #fff;
                                  " class="mb-4">जबलपुर</span>
                          </div>
                        </div>
                        <div class="col-md-4" data-aos="flip-left">
                          <div class="card text-center" style="background-image: linear-gradient( 105.3deg,  rgba(30,39,107,1) 21.8%, rgba(77,118,221,1) 100.2% );
                                  color: #fff;
                                  font-family: 500;
                                  font-size: small;
                                  border-left: 4mm ridge #FFCD4B;
                                ">
                            <div class="card-body p-4">
                              <p class="card-text" style="height: 180px">
                                "आदरणीय डॉ मिश्रा जी कर्मठ ईमानदारी से प्रत्येक कार्य को सम्पादित करने वाले महान व्यक्तित्व धनी अनेक वर्षों से धार्मिक एवं सामाजिक कार्यकर्ता के रूप में आपका नाम हमेशा अग्रिम पंक्ति में लिया जाता रहा है में ईश्वर यही प्रार्थना करता हूँ आप स्वस्थ रहें प्रसन्न रहें संस्कारधानी का नाम और ऊँचाई पर ले जाये।"
                              </p>
                            </div>
                            <img src="images/saradJain.png" class="card-img-top" alt="Unlink.." style="
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
                                  ">स्वामी अशोकानंद</span>
                            <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                    color: #fff;
                                  ">भक्ति धाम</span>
                            <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                    color: #fff;
                                  " class="mb-4">जबलपुर</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- View More button -->
          <div class="col-md-12 text-center my-4" data-aos="zoom-in" data-aos-duration="800">
            <a href="endorsements.php" class="btn btn-primary" style="
                    background-image: linear-gradient( 109.6deg,  rgba(39,142,255,1) 11.2%, rgba(98,113,255,0.78) 100.2% ) !important;
                    padding: 6px 80px;
                    border:none;
                    border-radius: 24px;
                  ">अन्य देखें &#160;<i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <!-- View More button -->
        </section>
      </div>
    </div>
  </section>
  <!-- endorsementBigDevice section Start -->
  <!-- Endorsements End block -->
  <!-- Endorsements start block -->
  <!-- endorsementSmallDevice section Start -->
  <section class="endorsements endorsementSmallDevice" style="background-color: #d0efff;">
    <div class="row">
      <div class="col-md-12 endorsementsHeadling mb-1">
        <h1 style="color:#03254c; font-size:19px;">Opinion of<br>Enlightened People of Society....</h1>
      </div>
      <div class="col-md-12 ">
        <section class="pt-1 pb-1">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div id="carouselExampleIndicators30" class="carousel slide" >
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="row">
                        <div class="col-md-4" data-aos="flip-left">
                          <div class="card text-center" style="background-image: linear-gradient( 105.3deg,  rgba(30,39,107,1) 21.8%, rgba(77,118,221,1) 100.2% );
                                  color: #fff;
                                  font-family: 500;
                                  font-size: small;
                                  border-left: 4mm ridge #FFCD4B;
                                  height: 550px;
                                ">
                            <div class="card-body p-4">
                              <p class="card-text" style="height: 180px; overflow-y: scroll;">
                                "आदरणीय डॉ मिश्रा जी कर्मठ ईमानदारी से प्रत्येक कार्य को सम्पादित करने वाले महान व्यक्तित्व धनी अनेक वर्षों से धार्मिक एवं सामाजिक कार्यकर्ता के रूप में आपका नाम हमेशा अग्रिम पंक्ति में लिया जाता रहा है में ईश्वर यही प्रार्थना करता हूँ आप स्वस्थ रहें प्रसन्न रहें संस्कारधानी का नाम और ऊँचाई पर ले जाये।"
                              </p>
                            </div>
                            <img src="images/स्वामी अशोकानंद .png" class="card-img-top" alt="Unlink.." style="
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
                                  ">स्वामी अशोकानंद</span>
                            <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                    color: #fff;
                                  ">भक्ति धाम</span>
                            <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                    color: #fff;
                                  " class="mb-4">जबलपुर</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- PHP CODE -->
                    <?php
                    include("config.php");
                    $sql_show_user = "SELECT * FROM feedback ORDER BY f_id LIMIT 1,5000";
                    $result_sql_show_user = mysqli_query($conn, $sql_show_user) or die("Query Failed!!");
                    if (mysqli_num_rows($result_sql_show_user) > 0) {
                      while ($row = mysqli_fetch_assoc($result_sql_show_user)) {
                    ?>
                        <div class="carousel-item">
                          <div class="row">
                            <div class="col-md-4">
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
                          </div>
                        </div>
                    <?php
                      }
                    } ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 text-center" style="display: flex; justify-content: center">
              <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators30" role="button" data-slide="prev" style="
                        margin-right: 5px;
                        background-color: #fff !important;
                        color: #03254c !important;
                        border: 2px solid #03254c !important; border-radius: 50%;
                      ">
                <i class="fa fa-arrow-left" style="color: #03254c;"></i>
              </a>
              <a class="btn btn-primary mb-3" href="#carouselExampleIndicators30" role="button" data-slide="next" style="background-color: #fff !important; color: #fff !important; border: 2px solid #03254c !important; border-radius: 50%;">
                <i class="fa fa-arrow-right" style="color: #03254c !important;"></i>
              </a>
            </div>
            <!-- View More button -->
            <div class="col-md-12 text-center my-4" data-aos="zoom-in" data-aos-duration="800">
              <a href="endorsements.php" class="btn btn-primary" style="
                    background-image: linear-gradient( 109.6deg,  rgba(39,142,255,1) 11.2%, rgba(98,113,255,0.78) 100.2% ) !important;
                    padding: 6px 80px;
                    border:none;
                    border-radius: 24px;
                  ">अन्य देखें &#160;<i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <!-- View More button -->
        </section>
      </div>
    </div>
  </section>
  <!-- endorsementSmallDevice section Start -->
  <!-- Endorsements End block -->
  <!-- Endorsements Main Div Block End -->
  <!-- Youtube Section Start -->
  <div class="container-fluid">
    <div class="row py-3 px-1" style="background-color: #fff;">
      <div class="col-md-12 endorsementsHeadling mb-1">
        <h3 style="color:#03254c;">Spotlight Moments</h3>
      </div>
      <!-- Card Section -->
      <section>
        <div class="row m-2">
          <!-- View More button -->
          <!-- PHP CODE -->
          <?php
          if (isset($_GET['page_index'])) {
            $page_index_by_addbar = $_GET['page_index'];
          } else {
            $page_index_by_addbar = 1;
          }
          $record_limi = 3;
          $offset = ($page_index_by_addbar - 1) * $record_limi;
          $sql_show_post_record = "SELECT *  FROM media ORDER BY media.media_date LIMIT {$offset},{$record_limi}" or die("Query Failed!! --> sql_show_mission_record");
          $result_sql_show_post_record = mysqli_query($conn, $sql_show_post_record);
          if (mysqli_num_rows($result_sql_show_post_record) > 0) {
            while ($row = mysqli_fetch_assoc($result_sql_show_post_record)) {
          ?>
              <!-- card block start -->
              <div class="col-md-3 mb-3 text-center" data-aos="fade-up">
                <div class="card cardbg" style="border: 2px solid linear-gradient( 109.6deg,  rgba(39,142,255,1) 11.2%, rgba(98,113,255,0.78) 100.2% ); border-radius: 12px;">
                  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <a href="media.php?post_id=<?php echo ($row['media_id']) ?>">
                      <img src="admin/upload/<?php echo ($row['img']) ?>" class="img-fluid" style="border: 1px solid transparent; border-radius: 12px;" /></a>
                    <a href="media.php?post_id=<?php echo ($row['media_id']) ?>">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                  </div>
                  <div class="card-body">
                    <!-- <h5 class="card-title">Post Title</h5>  -->
                    <p class="card-text"><?php echo $row['name'] ?></p>
                    <div class="col-md-12  text-center">
                      <a href="media.php?post_id=<?php echo ($row['media_id']) ?>" class="btn btn-primary" style="border:none; border-radius: 18px; margin-top: 5px; background-image: linear-gradient( 109.6deg,  rgba(39,142,255,1) 11.2%, rgba(98,113,255,0.78) 100.2% ) !important;">देखिए</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- card block end -->
          <?php }
          }
          ?>
        </div>
      </section>
      <!-- Card Section -->
    </div>
  </div>
  <!-- Youtube Section End -->
</div>
<!-- Home Page End -->
<?php include('footer.php') ?>