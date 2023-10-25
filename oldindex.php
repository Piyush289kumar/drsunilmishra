<?php include('header.php') ?>
<!-- Home Page Start -->
<div class="container-fluid">
  <section class="homeSection">
    <div class="row">
      <div class="col-md-6 contectText mt-1" data-aos="fade-up">
        <span>Hi there I'm</span>
        <h1 class="mb-4" id="h1text">Dr Sunil Mishra</h1>
        <p>
          Medical doctor & Hospital administrator, Philanthropist based in
          Jabalpur.
        </p>
        <a href="about.php">LEARN MORE</a>
      </div>
      <div class="col-md-6 text-center" data-aos="fade-up" data-aos-duration="1000">
        <img src="images/face.png" alt="Dr Sunil Mishra Picture" class="drsunilmishrapic" />
      </div>
      <!-- PHP CODE -->
      <?php
      include("config.php");
      $sql_note = "SELECT * FROM note ORDER BY note_id DESC LIMIT 0,1";
      $result_sql_note = mysqli_query($conn, $sql_note) or die("Query Failed!!");
      if (mysqli_num_rows($result_sql_note) > 0) {
        while ($row = mysqli_fetch_assoc($result_sql_note)) {
      ?>
          <div class="col-md-12 text-center" data-aos="zoom-in" data-aos-duration="1000" style="
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
      <?php
        }
      } ?>
    </div>
</div>
</section>
<!-- Home Page End -->
<!-- about Me Start -->
<section class="about-me">
  <div class="row contentAboutMe" data-aos="fade-up">
    <div class="col-md-6">
      <img src="images/secondImg.jpg" alt="full PIC" id="secondPic" width="100%" style="border: 2px solid grey;" />
    </div>
    <div class="col-md-6 contentAboutMeText" data-aos="fade-up" data-aos-duration="2000">
      <h2>कर्तव्य पथ....</h2>
<p>
      मैं चिकित्सा शिक्षा और चिकित्सा सेवा के क्षेत्र में विगत 3 दशक से अधिक समय से सक्रिय हूं। शैक्षणिक कार्यों के साथ - साथ, अपनी रुचि के कारण अधिकांश समय प्रशासनिक एवं प्रबंधन कार्यों में दिया।</p>

      <p>चिकित्सा शिक्षा तथा अस्पताल प्रबंधन के कार्यों में मेरी शुरू से ही रुचि रही है। पीड़ित लोगों को अपनी जानकारी,समझ व अनुभव के आधार पर सलाह और क्षमता के अनुसार सहयोग करना मुझे अच्छा लगता है।</p>

      <p>समाज के सभी तरह के लोगों से संवाद और उन्हें सदैव जीवंत रखने का प्रयास अभी तक किया है।</p>

      <p>मैने अभी तक के कार्यकाल में अन्यान्य कार्यशाला,संगोष्ठियां,सम्मेलन,नि:शुल्क चिकित्सा शिविर तथा रक्तदान शिविरों का सफलतापूर्वक आयोजन कर, ज़रूरतमंद लोगों व पीड़ित मानवता की सेवा में अपना छोटा सा प्रयास किया है।</p>

      <p>दिव्यांग जनों के अनेक कार्यक्रमों में मुझे जाने का अवसर मिला और वहां जाकर मैंने ईश्वरीय सत्ता के चमत्कार को देखा है।<br>

      <p>वृद्ध आश्रम में निवासरत वृद्धजनों से निरंतर भेंट करने का अवसर मिला और वहां जाकर, कृतघ्न मानवों के, अपने जन्मदाताओं के प्रति,अपने कर्तव्य से भागते कृत्यों को भी देखा। </p>

      <p>चिकित्सकों, चिकित्सालयों और समाज के बीच में उपज रहे अविश्वास को समाप्त करने की दिशा में महत्वपूर्ण एवं महत्वाकांक्षी कार्यक्रम संवाद कार्यक्रम प्रारंभ किया है, जिसके अंतर्गत अभी तक 18 से अधिक सकारात्मक संवाद आयोजित किये जा चुके हैं। इसके सुखद परिणाम भी सामने आने लगे हैं।</p>

      <p>मेरा मानना है कि कोई भी काम यदि पूरी श्रद्धा, लगन और मेहनत से किया जाए तो वह कभी असफल नहीं हो सकता है। </p>

      <p>मैं पीड़ित मानवता की सेवा,समाज के उत्थान, विकास कार्यों हेतु सदैव उपलब्ध हूं। इस उद्देश्य से किसी भी कार्यक्रम, कार्यशाला, संगोष्ठियां, सम्मेलन, नि:शुल्क चिकित्सा शिविर तथा निःशुल्क रक्तदान शिविर, वृद्ध जनों हेतु वृद्धाश्रम में कार्यक्रम आयोजित करने अथवा अन्य सेवा कार्यों में सेवा,सलाह व सहयोग हेतु अपनी क्षमता और उपलब्धता के अनुसार सदैव तत्पर रहूंगा।</p>

<p>प्रत्येक व्यक्ति के लिए जीवन में अध्यात्मवाद बहुत जरूरी है यदि हम अपने जीवन में आध्यात्मिक मार्ग पर उन्नति नहीं कर पाए तो सब कुछ व्यर्थ है। </p>

<p>हम अपने जीवन में अपने सिद्धांतों और मूल्यों से समझौता किए बगैर,सामाजिक, परिवारिक व सांसारिक जरूरतों को अध्यात्म, परिवार, दैनिक कार्यों, जिम्मेवारियों के बीच संतुलन बनाकर पूरा कर पाते हैं तो हम सबसे सुखी व्यक्ति हो सकते है। </p>

<p>यदि आप अपना सम्मान नहीं करोगे तो दूसरा आपका सम्मान नहीं करेगा, इसलिए अहंकार और आत्म सम्मान के बीच के अंतर को समझ कर, भूल जाओ और आगे बढ़ो के सिद्धांत को अपनाते हुए हमें अपना भी सम्मान स्वयं करना होगा।</p>
    </div>
  </div>
  <!-- Feature Section Start -->
  <!-- <div class="row feature">
          <hr id="hr" />
          <div class="offset-md-2 col-md-8 featureIcon">
            <img src="images/workLogo1.webp" alt="workLogo" />
            <img src="images/workLogo1.webp" alt="workLogo" />
            <img src="images/workLogo1.webp" alt="workLogo" />
            <img src="images/workLogo1.webp" alt="workLogo" />
          </div>
          <div class="offset-md-2 col-md-8 featureIcon">
            <img src="images/workLogo1.webp" alt="workLogo" />
            <img src="images/workLogo1.webp" alt="workLogo" />
            <img src="images/workLogo1.webp" alt="workLogo" />
            <img src="images/workLogo1.webp" alt="workLogo" />
          </div>
          <div class="offset-md-2 col-md-8 featureIcon">
            <img src="images/workLogo1.webp" alt="workLogo" />
            <img src="images/workLogo1.webp" alt="workLogo" />
            <img src="images/workLogo1.webp" alt="workLogo" />
            <img src="images/workLogo1.webp" alt="workLogo" />
          </div>
          <div class="offset-md-2 col-md-8 featureIcon">
            <img src="images/workLogo1.webp" alt="workLogo" />
            <img src="images/workLogo1.webp" alt="workLogo" />
            <img src="images/workLogo1.webp" alt="workLogo" />
            <img src="images/workLogo1.webp" alt="workLogo" />
          </div>
        </div> -->
  <!-- Diagram Section End -->
  <div class="row diagram">
    <div class="col-md-12">
      <h3 style="font-weight: 900;">« हृदय पटल »</h3>
      <p>
        "आप हमेशा वही देते हैं जो आपके पास है। अगर आप अंदर से खुश हैं तो
        आप जहां भी जाएंगे खुशियां बिखेरेंगे। <br />यदि आप अंदर से दुखी हैं
        तो आप दूसरों के साथ दुःख ही बाटेंगे"
      </p>
    </div>
    <img src="images/processPic.png" alt="processPic" data-aos="flip-up" data-aos-duration="1500" />
  </div>
  <!-- Diagram Section Start -->
  <!-- Note Section End -->
  <!-- Note Section Start -->
</section>
<!-- about Me End -->

<!-- Activity Main Div Block Start -->
<!-- Endorsements start block -->
<!-- endorsementBigDevice section Start -->
<section class="endorsements">
  <div class="row">
    <div class="col-md-12 endorsementsHeadling mb-5">
      <h1>कर्तव्य पथ पर स्वर्णिम यादें</h1>
    </div>
    <div class="col-md-12 ">
      <section class="pt-1 pb-1">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div id="carouselExampleIndicators3" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <!-- Card Section Start -->
                      <div class="col-md-3" data-aos="flip-left">
                        <div class="card text-center" style="
                                  color: grey;
                                  font-family: 500;
                                  font-size: small;
                                ">
                          <div id="carouselExampleControls_7" class="carousel slide my-2" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="images/program/ht2.JPG" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="images/program/ht3.JPG" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="images/program/ht4.JPG" class="d-block w-100" alt="...">
                              </div>                              
                              <div class="carousel-item">
                                <img src="images/program/h5.JPG" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls_7" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls_7" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>

                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 800;
                                    font-size: larger;
                                  ">हर घर तिरंगा अभियान कार्यक्रम</span>
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  "></span>
                          <div class="card-body p-4" style="overflow-y: scroll">
                            <p class="card-text">
                              <!-- style="height: 120px" -->
                            </p>
                          </div>

                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  " class="mb-4"></span>
                        </div>
                      </div>
                      <!-- Card Section End -->
                      <!-- Card Section Start -->
                      <div class="col-md-3" data-aos="flip-left">
                        <div class="card text-center" style="
                                  color: grey;
                                  font-family: 500;
                                  font-size: small;
                                ">
                          <div id="carouselExampleControls_9" class="carousel slide my-2" data-bs-ride="carousel">
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/pdfProfile2.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="images/program/mb2.JPG" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="images/program/mb3.JPG" class="d-block w-100" alt="...">
                              </div> 
                              <div class="carousel-item">
                                <img src="images/program/mb4.JPG" class="d-block w-100" alt="...">
                              </div> 
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls_9" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls_9" data-bs-slide="next">
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
                                    font-weight: 500;
                                  "><a href="megabloodCam.php" class="btn mb-2">आगे देखिए</a></span>
                             <!--<div class="card-body p-4" style="overflow-y: scroll">
                            <p class="card-text">

                            </p>
                          </div>-->


                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  " class="mb-4"></span>
                        </div>
                      </div>
                      <!-- Card Section End -->
                      <!-- Card Section Start -->
                      <div class="col-md-3" data-aos="flip-left">
                        <div class="card text-center" style="
                                  color: grey;
                                  font-family: 500;
                                  font-size: small;
                                ">
                          <div id="carouselExampleControls_10" class="carousel slide my-2" data-bs-ride="carousel">
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/program/ty1.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="images/program/ty3.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="images/program/ty1.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="images/program/ty3.jpg" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls_10" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls_10" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>

                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 800;
                                    font-size: larger;
                                  ">थैंक यू मामा जी</span>
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  "></span>
                          <div class="card-body p-4" style="overflow-y: scroll">
                            <p class="card-text">

                            </p>
                          </div>

                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  " class="mb-4"></span>
                        </div>
                      </div>
                      <!-- Card Section End -->
                      <!-- Card Section Start -->
                      <div class="col-md-3" data-aos="flip-left">
                        <div class="card text-center" style="
                                  color: grey;
                                  font-family: 500;
                                  font-size: small;
                                ">
                          <div id="carouselExampleControls_13" class="carousel slide my-2" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="images/sambad/4.1.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="images/sambad/4.2.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="images/sambad/4.3.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="images/sambad/4.4.jpg" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls_13" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls_13" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>

                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 800;
                                    font-size: larger;
                                  ">संवाद</span>
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  "></span>
                          <div class="card-body p-4" style="overflow-y: scroll">
                            <p class="card-text">

                            </p>
                          </div>

                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  " class="mb-4"></span>
                        </div>
                      </div>
                      <!-- Card Section End -->

                    </div>
                     <!-- View More button -->
        <div class="col-md-12 text-center my-4" data-aos="zoom-in" data-aos-duration="800">
          <a href="media_card.php" class="btn btn-primary" style="
                    padding: 6px 80px;
                    background: gray !important;
                    border: 2px solid grey;
                    border-radius: 24px;
                  ">अन्य देखें &#160;<i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <!-- View More button -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- View More button -->
        <!-- <div class="col-md-12 text-center my-4" data-aos="zoom-in" data-aos-duration="800">
          <a href="activity.php" class="btn btn-primary" style="
                    padding: 6px 100px;
                    background: gray;
                    border: 2px solid grey;
                    border-radius: 24px;
                  ">अन्य देखें &#160;<i class="fa-solid fa-arrow-right"></i></a>
        </div> -->
        <!-- View More button -->
      </section>
    </div>
  </div>
</section>
<!-- endorsementBigDevice section Start -->
<!-- Activity Main Div Block End -->


<!-- logo Section Start -->
<!-- iFrame Start -->
<div class="col-md-12 endorsementsHeadling py-3">
  <h3 style="color: #fff;">गतिविधियाँ</h3>
</div>



<!--
<div class="col-md-12">
  <div class="col-md-12 youtubeFrame text-center" data-aos="fade-up">
    <h5 style="color:#fff;"><i class="fa-brands fa-youtube"></i>&#160;&#160;Youtube</h5>
    <iframe width="100%" height="340" src="https://www.youtube.com/embed/daTu0asmHwE?si=osd0AS5R06V73hJo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="border-radius: 24px"></iframe>
  </div>
</div>-->

<?php
$sql_show_user = "SELECT * FROM vlink ORDER BY vid DESC LIMIT 0,1";
$result_sql_show_user = mysqli_query($conn, $sql_show_user) or die("Query Failed!!");
if (mysqli_num_rows($result_sql_show_user) > 0) {
  while ($row = mysqli_fetch_assoc($result_sql_show_user)) {
    ?>
    <div class="col-md-12">
      <div class="col-md-12 youtubeFrame text-center" data-aos="fade-up">
        <h5 style="color:#fff;"><i class="fa-brands fa-youtube"></i>&#160;&#160;Youtube</h5>
        <iframe width="100%" height="340" src="https://www.youtube.com/embed/<?php echo $row['vlink'] ?>"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen style="border-radius: 24px"></iframe>
      </div>
    </div>

    <?php
  }
}
?>


<div class="col-md-12" id="note" style="background: #3B444B">
  <div class="row">
    <div class="col-md-12 text-center">
      <h5 class="mb-3">FACEBOOK PAGE</h5></div>
    <div class="col-md-1"></div>
    <div class="col-md-2 mb-3" data-aos="zoom-in">
      <a href="https://www.facebook.com/baderiametroprimehospitaljansampark"><img src="images/sambadLogo.png" alt="baderiametroprimehospitaljansampark" style="width: 100px"></a>
      <br><span style="font-size: 14px;">संवाद</span>
    </div>
    <div class="col-md-2 mb-3" data-aos="zoom-in">
      <a href="https://www.facebook.com/mahakoshalfoundaton?mibextid=9R9pXO"><img src="images/mahakoshal.png" alt="Mahakoshal Foundation" style="width: 100px"></a>
      <br><span style="font-size: 14px;">महाकोशल फाउंडेशन</span>
    </div>
    <div class="col-md-2 mb-3" data-aos="zoom-in">
      <a href="https://www.facebook.com/redcrossscietyjabalpur?mibextid=ZbWKwL"><img src="images/redCrossSocity.png" alt="Indian Red Cross Socity" style="width: 100px;"></a>
      <br><span style="font-size: 14px;">इंडियन रेड क्राॅस सोसायटी</span>
    </div>
    <div class="col-md-2 mb-3" data-aos="zoom-in">
      <a href="https://www.facebook.com/GLOBALAYUSHMEDICALASSOCIATION?mibextid=ZbWKwL"> <img src="images/ayushGlobal.png" alt="Ayush Global" style="width: 100px;"></a>
      <br><span style="font-size: 14px;">ग्लोबल आयुष मेडिकल एसो.</span>
    </div>
    <div class="col-md-2 mb-3" data-aos="zoom-in">
      <a href="login.php"> <img src="images/sewaGroup.png" alt="Sewa Group" style="width: 100px;"></a>
      <br><span style="font-size: 14px;">सेवा ग्रुप</span>
    </div>
  </div>
</div>
<!-- iFrame End -->
<!-- logo Section End -->

<!-- Endorsements Main Div Block Start -->
<!-- Endorsements start block -->
<!-- endorsementBigDevice section Start -->
<section class="endorsements endorsementBigDevice">
  <div class="row">
    <div class="col-md-12 endorsementsHeadling mb-5">
      <h1>Endorsements</h1>
    </div>
    <div class="col-md-12 ">
      <section class="pt-1 pb-1">
        <div class="container">
          <div class="row">
            <div class="col-10">
              <h3 class="mb-3">प्रबुद्धजनों की राय</h3>
            </div>
            <div class="col-2 text-right" style="display: flex; justify-content: right">
              <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev" style="
                        margin-right: 5px;
                        background-color: gray;
                        color: #fff;
                        border: none;
                      ">
                <i class="fa fa-arrow-left" style="color: #fff;"></i>
              </a>
              <a class="btn btn-primary mb-3" href="#carouselExampleIndicators2" role="button" data-slide="next" style="background-color: gray; color: #fff; border: none">
                <i class="fa fa-arrow-right" style="color: #fff;"></i>
              </a>
            </div>
            <div class="col-12">
              <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">

                      <!-- Card Section Start -->
                      <div class="col-md-3" data-aos="flip-left">
                        <div class="card text-center" style="
                                  color: grey;
                                  font-family: 500;
                                  font-size: small;
                                ">
                          <div class="card-body p-4" style="overflow-y: scroll">
                            <p class="card-text" style="height: 120px">
                              "डॉ सुनील मिश्र एक कर्मठ,मिलनसार,सहयोगी
                              व्यक्तित्व के धनी चिकित्सक है। चिकित्सा के
                              क्षेत्र में सदैव पूरी तत्परता से सहयोग करते
                              हैं। दादा के समय से अभी तक लगातार, पिछले
                              लगभग 3 दशक से, पीड़ित मानवता की सेवा हेतु
                              उनका अविस्मरणीय योगदान रहा है। हम उनके
                              उज्ज्वल भविष्य की कामना करते हैं।"
                            </p>
                          </div>
                          <img src="images/ashokRohani.png" class="card-img-top" alt="Unlink.." style="
                                    width: 50%;
                                    border-radius: 50%;
                                    margin: auto;
                                    padding: 20px;
                                  " />
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 800;
                                    font-size: larger;
                                  ">अशोक ईश्वरदास रोहाणी</span>
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  ">विधायक</span>
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  " class="mb-4">जबलपुर केंट - विधानसभा</span>
                        </div>
                      </div>
                      <!-- Card Section End -->

                      <!-- Card Section Start -->
                      <div class="col-md-3" data-aos="flip-left">
                        <div class="card text-center" style="
                                  color: grey;
                                  font-family: 500;
                                  font-size: small;
                                ">
                          <div class="card-body p-4" style="overflow-y: scroll">
                            <p class="card-text" style="height: 120px">
                              "डॉ सुनील मिश्र, कर्मयोगी व्यक्ति है मैं
                              इन्हें पिछले लगभग 32 वर्षों से चिकित्सा के
                              क्षेत्र में सक्रियता से कार्य करते देख रहा
                              हूं। अस्पताल संचालन का कुशल अनुभव उनके पास
                              है। मैं जब भी किसी के लिए उनसे सहयोग करने को
                              कहता हूं बड़ी तत्परता से वे सहयोग प्रदान
                              करते हैं। मैं उनके उत्तम स्वास्थ्य और
                              उज्ज्वल भविष्य की कामना करता हूं।"
                            </p>
                          </div>
                          <img src="images/saradJain.png" class="card-img-top" alt="Unlink.." style="
                                    width: 50%;
                                    border-radius: 50%;
                                    margin: auto;
                                    padding: 20px;
                                  " />
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 800;
                                    font-size: larger;
                                  ">शरद जैन</span>
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  ">पूर्व मंत्री - स्वास्थ्य व चिकित्सा
                            शिक्षा</span>
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  " class="mb-4">(मध्यप्रदेश शासन)</span>
                        </div>
                      </div>
                      <!-- Card Section End -->
                      <div class="col-md-3" data-aos="flip-left">
                        <div class="card text-center" style="
                                  color: grey;
                                  font-family: 500;
                                  font-size: small;
                                ">
                          <div class="card-body p-4" style="overflow-y: scroll">
                            <p class="card-text" style="height: 120px">
                              "आदरणीय डॉ. सुनील मिश्र जी संस्कारधानी जबलपुर के मानव सेवा में समर्पित योद्धा है,आपने अपनी सेवा भावना से समाज में एक आदर्श स्थान बनाया है। डॉ. सुनील मिश्र जी विगत अनेक वर्षो से समाज सेवा में रेडक्रॉस सोसायटी, महाकौशल फाउंडेशन,जोनल उपभोक्ता सलाहकार समिति के माध्यम से समर्पित है। आपको अस्पताल प्रबंधन के क्षेत्र में महारथ हासिल है।
                              <br>प्रभु श्रीराम की कृपा आप के साथ सत्त बनी रहे।"
                            </p>
                          </div>
                          <img src="images/सदानंद गोड़बोले एवं डॉ स्वाति गोड़बोले.png" class="card-img-top" alt="Unlink.." style="
                                    width: 50%;
                                    border-radius: 50%;
                                    margin: auto;
                                    padding: 20px;
                                  " />
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 800;
                                    font-size: larger;
                                  ">सदानंद गोड़बोले</span>
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  ">पूर्व महापौर</span>
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  " class="mb-4">जबलपुर</span>
                        </div>
                      </div>
                      <!-- Card Section Start -->
                      <div class="col-md-3" data-aos="flip-left">
                        <div class="card text-center" style="
                                  color: grey;
                                  font-family: 500;
                                  font-size: small;
                                ">
                          <div class="card-body p-4" style="overflow-y: scroll">
                            <p class="card-text" style="height: 120px">
                              "हर परिस्थिति में सकारात्मक सोच के साथ चेहरे
                              की मुस्कान का नाम है डॉ सुनील मिश्र"
                            </p>
                          </div>
                          <img src="images/ashishSukla.png" class="card-img-top" alt="..." style="
                                    width: 50%;
                                    border-radius: 50%;
                                    margin: auto;
                                    padding: 20px;
                                  " />
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 800;
                                    font-size: larger;
                                  ">आशीष शुक्ल</span>
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  ">वरिष्ठ पत्रकार एवं</span>
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  " class="mb-4">संचालक यशभारत</span>
                        </div>
                      </div>
                      <!-- Card Section End -->

                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <!-- Card Section Start -->
                      <div class="col-md-3" data-aos="flip-left">
                        <div class="card text-center" style="
                                  color: grey;
                                  font-family: 500;
                                  font-size: small;
                                ">
                          <div class="card-body p-4" style="overflow-y: scroll">
                            <p class="card-text" style="height: 120px">
                              "डॉ.सुनील मिश्र एक कर्मठ,समाज सेवी,संवेदनशील
                              सहयोगी व्यक्तित्व के धनी हैं। इंडियन रेड
                              क्रॉस सोसाइटी के कार्यकारिणी सदस्य के रूप
                              में समाज सेवा के विभिन्न आयाम जैसे स्वास्थ्य
                              सेवा क्षेत्र, रक्तदान ,वृद्ध जन सेवा एवं
                              दिव्यांग जनों की सेवा के क्षेत्र में कई
                              वर्षो से लगातार सक्रिय हैं। वर्तमान में रेड
                              क्रॉस की राज्य प्रबंधकारिणी के सदस्य के रूप
                              में जबलपुर का प्रतिनिधित्व राज्य स्तर पर कर
                              रहे हैं,अभी तक विभिन्न सामाजिक क्षेत्रों में
                              अपने चिंतन से नवाचार के वाहक रहे हैं।"
                            </p>
                          </div>
                          <img src="images/ashishDixit.png" class="card-img-top" alt="Unlink.." style="
                                    width: 50%;
                                    border-radius: 50%;
                                    margin: auto;
                                    padding: 20px;
                                  " />
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 800;
                                    font-size: larger;
                                  ">आशीष दीक्षित</span>
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  ">सचिव</span>
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  " class="mb-4">इंडियन रेड क्रॉस सोसायटी, जबलपुर</span>
                        </div>
                      </div>
                      <!-- Card Section End -->
                      <div class="col-md-3" data-aos="flip-left">
                        <div class="card text-center" style="
                                  color: grey;
                                  font-family: 500;
                                  font-size: small;
                                ">
                          <div class="card-body p-4" style="overflow-y: scroll">
                            <p class="card-text" style="height: 120px">
                              "डॉ. सुनील मिश्रा जी संस्कारधानी जबलपुर के
                              एक ऐसे स्वनामधन्य हस्ताक्षर है , जिन्होंने
                              समाज के प्रति अपनी जिम्मेदारियों को समझते
                              हुए, अपने समर्पण, सेवाभाव और निष्ठा से शहर
                              में एक अलग छाप बनाई है। <br />
                              श्री सुनील मिश्रा जी ने एक बेहतर अस्पताल
                              प्रबंधक के रूप में अपने को स्थापित किया ।
                              साथ ही साथ रेडक्रॉस सोसायटी, महाकौशल
                              फाउंडेशन, जोनल रेल उपभोक्ता सलाहकार समिति के
                              माध्यम से समाज सेवा कर अपने सामाजिक
                              दायित्वों का सफलतापूर्वक निर्बहन कर रहे है।
                              <br />मैं मां नर्मदा जी से इनके स्वस्थ्य,
                              सफल एवं दीर्घायु की कामना करता हूं।"
                            </p>
                          </div>
                          <img src="images/sandeepJain.png" class="card-img-top" alt="Unlink.." style="
                                    width: 50%;
                                    border-radius: 50%;
                                    margin: auto;
                                    padding: 20px;
                                  " />
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 800;
                                    font-size: larger;
                                  ">संदीप जैन</span>
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  ">अध्यक्ष</span>
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  " class="mb-4">समरसता सेवा संगठन</span>
                        </div>
                      </div>
                      <div class="col-md-3" data-aos="flip-left">
                        <div class="card text-center" style="
                                  color: grey;
                                  font-family: 500;
                                  font-size: small;
                                ">
                          <div class="card-body p-4" style="overflow-y: scroll">
                            <p class="card-text" style="height: 120px">
                              "जबलपुर के ब्राहमण कुल गौरव ,हमारे डा सुनील मिश्रा चाचा जी ने हमेशा पीड़ित मानवता की सेवा में अपना पूर्ण योगदान दिया ।
                              जबलपुर के कई बड़े अस्पतालो को स्थापित किया और आज भी गरीब मरीजों के लिए एवम् पीड़ित मानवता के लिए वो पूर्णतः समर्पित है।
                              चिकित्सा कार्य के अलावा सनातन धर्म एवम् समाज सेवा के लिए उनका समर्पण अनुकरणीय है।"
                            </p>
                          </div>
                          <img src="images/डॉ. अमरेंद्र पांडेय.png" class="card-img-top" alt="Unlink.." style="
                                    width: 50%;
                                    border-radius: 50%;
                                    margin: auto;
                                    padding: 20px;
                                  " />
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 800;
                                    font-size: larger;
                                  ">डॉ. अमरेंद्र पांडेय</span>
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  ">अध्यक्ष</span>
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  " class="mb-4">मप्र नर्सिंग होम्स (हॉस्पिटल्स) एसोसिएशन</span>
                        </div>
                      </div>
                      <div class="col-md-3" data-aos="flip-left">
                        <div class="card text-center" style="
                                  color: grey;
                                  font-family: 500;
                                  font-size: small;
                                ">
                          <div class="card-body p-4" style="overflow-y: scroll">
                            <p class="card-text" style="height: 120px">
                              "डॉ सुनील मिश्र जी एक मृदुभाषी, कर्तव्यनिष्ठ, कुशल संगठन एवं व्यवहार कुशल प्रतिभा रखते हैं। मेरा उनके साथ जबलपुर प्रवास के समय करीब 8 वर्षों का काफी निकट का साथ रहा है। उनकी होम्योपैथिक शिक्षा तथा मरीजों की देखभाल में काफी रुचि रही है। उनका रानी दुर्गावती विश्वविद्यालय के होम्योपैथिक संकाय के डीन के रूप में कार्यकाल सराहनीय रहा ।
                              मैं उनके अच्छे स्वास्थ्य और उज्ज्वल भविष्य की कामना करता हूं।"
                            </p>
                          </div>
                          <img src="images/डॉ आनंद कुमार चतुर्वेदी.png" class="card-img-top" alt="Unlink.." style="
                                    width: 50%;
                                    border-radius: 50%;
                                    margin: auto;
                                    padding: 20px;
                                  " />
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 800;
                                    font-size: larger;
                                  ">डॉ आनंद कुमार चतुर्वेदी</span>
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  ">पूर्व निदेशक, उत्तर प्रदेश सरकार</span>
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  " class="mb-4">होम्योपैथिक विभाग, लखनऊ</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="carousel-item">
                        <div class="row">
                          <div class="col-md-3" data-aos="flip-left">
                            <div class="card text-center" style="
                                  color: grey;
                                  font-family: 500;
                                  font-size: small;
                                ">
                              <div class="card-body p-4" style="overflow-y: scroll">
                                <p class="card-text" style="height: 120px">
                                  "---------------"
                                </p>
                              </div>
                              <img src="images/blankPic.png" class="card-img-top" alt="Unlink.." style="
                                    width: 50%;
                                    border-radius: 50%;
                                    margin: auto;
                                    padding: 20px;
                                  " />
                              <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 800;
                                    font-size: larger;
                                  ">--------</span>
                              <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  ">------</span>
                              <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  " class="mb-4">------</span>
                            </div>
                          </div>
                          <div class="col-md-3" data-aos="flip-left">
                            <div class="card text-center" style="
                                  color: grey;
                                  font-family: 500;
                                  font-size: small;
                                ">
                              <div class="card-body p-4" style="overflow-y: scroll">
                                <p class="card-text" style="height: 120px">
                                  "---------------"
                                </p>
                              </div>
                              <img src="images/blankPic.png" class="card-img-top" alt="Unlink.." style="
                                    width: 50%;
                                    border-radius: 50%;
                                    margin: auto;
                                    padding: 20px;
                                  " />
                              <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 800;
                                    font-size: larger;
                                  ">--------</span>
                              <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  ">------</span>
                              <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  " class="mb-4">------</span>
                            </div>
                          </div>
                          <div class="col-md-3" data-aos="flip-left">
                            <div class="card text-center" style="
                                  color: grey;
                                  font-family: 500;
                                  font-size: small;
                                ">
                              <div class="card-body p-4" style="overflow-y: scroll">
                                <p class="card-text" style="height: 120px">
                                  "---------------"
                                </p>
                              </div>
                              <img src="images/blankPic.png" class="card-img-top" alt="Unlink.." style="
                                    width: 50%;
                                    border-radius: 50%;
                                    margin: auto;
                                    padding: 20px;
                                  " />
                              <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 800;
                                    font-size: larger;
                                  ">--------</span>
                              <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  ">------</span>
                              <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  " class="mb-4">------</span>
                            </div>
                          </div>
                          <div class="col-md-3" data-aos="flip-left">
                            <div class="card text-center" style="
                                  color: grey;
                                  font-family: 500;
                                  font-size: small;
                                ">
                              <div class="card-body p-4" style="overflow-y: scroll">
                                <p class="card-text" style="height: 120px">
                                  "---------------"
                                </p>
                              </div>
                              <img src="images/blankPic.png" class="card-img-top" alt="Unlink.." style="
                                    width: 50%;
                                    border-radius: 50%;
                                    margin: auto;
                                    padding: 20px;
                                  " />
                              <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 800;
                                    font-size: larger;
                                  ">--------</span>
                              <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  ">------</span>
                              <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  " class="mb-4">------</span>
                            </div>
                          </div>
                        </div>
                      </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- View More button -->
        <div class="col-md-12 text-center my-4" data-aos="zoom-in" data-aos-duration="800">
          <a href="endorsements.php" class="btn btn-primary" style="
                    padding: 6px 80px;
                    background: gray;
                    border: 2px solid grey;
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
<section class="endorsements endorsementSmallDevice">
  <div class="row">
    <div class="col-md-12 endorsementsHeadling mb-5">
      <h1>Endorsements</h1>
    </div>
    <div class="col-md-12 ">
      <section class="pt-1 pb-1">
        <div class="container">
          <div class="row">
            <div class="col-10">
              <h3 class="mb-3">प्रबुद्धजनों की राय</h3>
            </div>
            <div class="col-2 text-right" style="display: flex; justify-content: right">
              <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators30" role="button" data-slide="prev" style="
                        margin-right: 5px;
                        background-color: gray;
                        color: #fff;
                        border: none;
                      ">
                <i class="fa fa-arrow-left" style="color: #fff;"></i>
              </a>
              <a class="btn btn-primary mb-3" href="#carouselExampleIndicators30" role="button" data-slide="next" style="background-color: gray; color: #fff; border: none">
                <i class="fa fa-arrow-right" style="color: #fff;"></i>
              </a>
            </div>
            <div class="col-12">
              <div id="carouselExampleIndicators30" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                  <div class="carousel-item active">
                    <div class="row">
                      <!-- Card Section Start -->
                      <div class="col-md-3" data-aos="flip-left">
                        <div class="card text-center" style="
                                  color: grey;
                                  font-family: 500;
                                  font-size: small;
                                ">
                          <div class="card-body p-4" style="overflow-y: scroll">
                            <p class="card-text" style="height: 120px">
                              "आदरणीय डॉ मिश्रा जी कर्मठ ईमानदारी से प्रत्येक कार्य को सम्पादित करने वाले महान व्यक्तित्व धनी अनेक वर्षों से धार्मिक एवं सामाजिक कार्यकर्ता के रूप में आपका नाम हमेशा अग्रिम पंक्ति में लिया जाता रहा है में ईश्वर यही प्रार्थना करता हूँ आप स्वस्थ रहें प्रसन्न रहें संस्कारधानी का नाम और ऊँचाई पर ले जाये।"
                            </p>
                          </div>
                          <img src="images/स्वामी अशोकानंद .png" class="card-img-top" alt="..." style="
                                    width: 50%;
                                    border-radius: 50%;
                                    margin: auto;
                                    padding: 20px;
                                  " />
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 800;
                                    font-size: larger;
                                  ">स्वामी अशोकानंद</span>
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  ">भक्ति धाम</span>
                          <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  " class="mb-4">जबलपुर</span>
                        </div>
                      </div>
                      <!-- Card Section End -->
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
                          <div class="col-md-3" data-aos="flip-left">
                            <div class="card text-center" style="
                                  color: grey;
                                  font-family: 500;
                                  font-size: small;
                                ">
                              <div class="card-body p-4" style="overflow-y: scroll">
                                <p class="card-text" style="height: 120px">
                                  "<?php echo ($row['text']) ?>"
                                </p>
                              </div>
                              <img src="admin/upload/<?php echo ($row['img']) ?>" class="card-img-top" alt="Unlink.." style="
                                    width: 50%;
                                    border-radius: 50%;
                                    margin: auto;
                                    padding: 20px;
                                  " />
                              <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 800;
                                    font-size: larger;
                                  "><?php echo ($row['name']) ?></span>
                              <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
                                  "><?php echo ($row['des']) ?></span>
                              <span style="
                                    color: rgba(0, 0, 0, 0.9);
                                    font-weight: 500;
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
          <!-- View More button -->
          <div class="col-md-12 text-center my-4" data-aos="zoom-in" data-aos-duration="800">
            <a href="endorsements.php" class="btn btn-primary" style="
                    padding: 6px 85px;
                    background: gray;
                    border: 2px solid grey;
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


</div>
<!-- Home Page End -->
<?php include('footer.php') ?>