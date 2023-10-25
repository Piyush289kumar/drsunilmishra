<?php
include("config.php");
session_start();

if (!isset($_SESSION['username'])) {
    echo ("<script>window.location.href='$hostname/login.php'</script>");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="robots" content="index,follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="Hindi">
  <meta name="revisit-after" content="1 day">
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <title>Drsunilmishra</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- x-icon -->
  <link rel="shortcut icon" type="x-con" href="images/VSlogo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/mainfront.css" />
  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Raleway:wght@300;400;500;700;900&display=swap" rel="stylesheet" />
  <!-- fontawesome -->
  <!-- <link rel="stylesheet" href="css/font-awesome.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
  <!-- header -->
  <header>
    <div class="navigation-container">
      <div class="top-head">
        <div class="web-name">
          <a href="index.php"><span style="color:#fff;">Drsunilmishra</span></a>
        </div>
        <div class="ham-btn">
          <span>
            <i class="fas fa-bars"></i>
          </span>
        </div>
        <div class="times-btn">
          <span>
            <i class="fas fa-times"></i>
          </span>
        </div>
      </div>
      <!-- nav bar -->
      <div class="nav-bar" id="nav-bar">
        <nav>
          <ul>
            <li><a href="index.html">• मुख्य पृष्ठ</a></li>
            <!-- <li><a href="mission.php">उद्देश्य</a></li> -->
          </ul>
        </nav>
        <!-- <button class="login_btn mx-4"><a href="admin\index.php">C-Panel</a></button> -->
        <!-- DropDown -->
        <!-- <button class="login_btn mx-4 mb-2"><a href="#">log-In</a></button> -->
      </div>
    </div>
    <!--social icons -->
  </header>
  <!-- header -->
  <?php
  include("config.php");
  if (isset($_POST['submit'])) {
    session_start();

    $username = $_SESSION['username'];
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $f_1 = mysqli_real_escape_string($conn, $_POST['f_1']);
    $f_2 = mysqli_real_escape_string($conn, $_POST['f_2']);
    $f_3 = mysqli_real_escape_string($conn, $_POST['f_3']);
    $f_4 = mysqli_real_escape_string($conn, $_POST['f_4']);
    $f_5 = mysqli_real_escape_string($conn, $_POST['f_5']);
    $f_6 = mysqli_real_escape_string($conn, $_POST['f_6']);
    $f_7 = mysqli_real_escape_string($conn, $_POST['f_7']);
    $f_8 = mysqli_real_escape_string($conn, $_POST['f_8']);
    $f_9 = mysqli_real_escape_string($conn, $_POST['f_9']);
    $f_10 = mysqli_real_escape_string($conn, $_POST['f_10']);
    $f_11 = mysqli_real_escape_string($conn, $_POST['f_11']);
    $f_12 = mysqli_real_escape_string($conn, $_POST['f_12']);
    $f_13 = mysqli_real_escape_string($conn, $_POST['f_13']);
    $f_14 = mysqli_real_escape_string($conn, $_POST['f_14']);
    $f_15 = mysqli_real_escape_string($conn, $_POST['f_15']);
    $f_16 = mysqli_real_escape_string($conn, $_POST['f_16']);
    $f_17 = mysqli_real_escape_string($conn, $_POST['f_17']);
    $f_18 = mysqli_real_escape_string($conn, $_POST['f_18']);
    $f_19 = mysqli_real_escape_string($conn, $_POST['f_19']);
    $f_20 = mysqli_real_escape_string($conn, $_POST['f_20']);
    $f_21 = mysqli_real_escape_string($conn, $_POST['f_21']);
    $f_22 = mysqli_real_escape_string($conn, $_POST['f_22']);
    $f_23 = mysqli_real_escape_string($conn, $_POST['f_23']);
    $f_24 = mysqli_real_escape_string($conn, $_POST['f_24']);
    $f_25 = mysqli_real_escape_string($conn, $_POST['f_25']);
    $f_26 = mysqli_real_escape_string($conn, $_POST['f_26']);
    $f_27 = mysqli_real_escape_string($conn, $_POST['f_27']);
    $f_28 = mysqli_real_escape_string($conn, $_POST['f_28']);
    $post_date = date("d M, Y");
    $sql_insert_post = "INSERT INTO form_data (f_1,f_2,f_3,f_4,f_5,f_6,f_7,f_8,f_9,f_10,f_11,f_12,f_13,f_14,f_15,f_16,f_17,f_18,f_19,f_20,f_21,f_22,f_23,f_24,f_25,f_26,f_27,f_28,f_phone,f_date,user) 
    
    VALUES ('{$f_1}','{$f_2}','{$f_3}','{$f_4}','{$f_5}','{$f_6}','{$f_7}','{$f_8}','{$f_9}','{$f_10}','{$f_11}','{$f_12}','{$f_13}','{$f_14}','{$f_15}','{$f_16}','{$f_17}','{$f_18}','{$f_19}','{$f_20}','{$f_21}','{$f_22}','{$f_23}','{$f_24}','{$f_25}','{$f_26}','{$f_27}','{$f_28}','{$phone}','{$post_date}','{$username}')";

    if (mysqli_query($conn, $sql_insert_post)) {
     
        echo "<script>window.location.href='$hostname/Form_submitted.php'</script>";
    
  }
}
  ?>
  <!-- PHP Code -->
  <!-- membership_form end -->
  <div class="container register">
    <div class="row">
      <div class="col-md-12 register-right">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <h3 class="register-heading">राधा स्वामी सत्संग ब्यास जबलपुर एरिया<br><span style="font-size: 15px; color: #ff5733;"></span></h3>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
              <div class="row register-form">
                <div class="col-md-12">
                  
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="1. विजिट सेंटर /सब सेंटर/ पॉइंट : *" name="f_1" autocomplete="off" required />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="2. विजिट करने वाले फंक्शनरी का नाम : *" name="f_2" autocomplete="off" required />
                  </div>
                  <div class="form-group">
                    <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="मोबा./व्हाट्सएप नंबर : *" autocomplete="off" required />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="3. विजिट का दिनाँक :" name="f_3" autocomplete="off" onfocus="(this.type='date')" />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="4. पहुंचने का समय :" name="f_4" autocomplete="off" onfocus="(this.type='time')" />
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="5. सत्संग घर पहुंचने पर ट्रैफिक व्यवस्था कैसी थी : *" name="f_5" autocomplete="off" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="6. पार्किंग व्यवस्था कैसी थी : *" name="f_6" autocomplete="off" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="7. एंट्री प्वाइंट पर सिक्योरिटी व्यवस्था कैसी थी : *" name="f_7" autocomplete="off" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="8. सत्संग ग्राउंड की साफ-सफाई मेंटेनेंस व्यवस्था पर विस्तृत जानकारी : *" name="f_8" autocomplete="off" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="9. संगत कहां-कहां से आ रही है? *" name="f_9" autocomplete="off" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="10. संगत किन-किन साधनों से आ रही है,उनका उल्लेख,वह वैधानिक साधन का उपयोग कर रहे हैं अथवा नहीं, वाहन के सभी दस्तावेज पूर्ण है अथवा नहीं, वाहन की फिटनेस बराबर है अथवा नहीं (यह चेक किया गया है अथवा नहीं) : *" name="f_10" autocomplete="off" rows="7"></textarea>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="11. सत्संग घर में आने वाली संगत जी स्थान से आ रही है (उनकी सत्संग घर से दूरी का उल्लेख करें) :" name="f_11" autocomplete="off" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="12. पंडाल में सत्संग के बैठने की व्यवस्था :" name="f_12" autocomplete="off" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="13. प्रवेश से लेकर संगत के जाने तक गाइड लाइन का पालन हो रहा है अथवा नहीं :" name="f_13" autocomplete="off" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="14. सेवादार कितने हैं? सभी सप्ताह के अन्य दिनों में भी सेवा देते हैं ?" name="f_14" autocomplete="off" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="15. सूचनाओं का अनाउंसमेंट प्रोपर हो रहा है ?" name="f_15" autocomplete="off" rows="5"></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="16. संगत के साथ फंक्शनरीज का सतत संपर्क हो रहा है अथवा नहीं ?" name="f_16" autocomplete="off" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="17. Ex फंक्शनरी का सेवा में योगदान है अथवा नहीं ?" name="f_17" autocomplete="off" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="18. पीने के पानी की व्यवस्था क्या है और टंकी की सफाई कब हुई थी ?" name="f_18" autocomplete="off" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control" placeholder="19. पाठी की स्वीकृत संख्या ?" name="f_19" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control" placeholder="20. उपलब्ध पाठी की संख्या ?" name="f_20" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="21. साउंड की क्वालिटी कैसी थी ?" name="f_21" autocomplete="off" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="22. सत्संग किसका था ?" name="f_22" autocomplete="off" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="23. सत्संग की क्वालिटी कैसी थी ?" name="f_23" autocomplete="off" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="24. स्टेज के नीचे पाठ किसका था और क्वालिटी कैसी थी ?" name="f_24" autocomplete="off" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="25. संगत की संख्या बढ़ी या घटी? घटी तो बढ़ाने के क्या प्रयास हो रहे हैं ?" name="f_25" autocomplete="off" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="26. सभी दस्तावेजों को सेक्रेटरी जबलपुर II महाराजपुर की ओर से हस्ताक्षर करना, दिनांक के साथ :" name="f_26" autocomplete="off" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="27. गाइड लाइन के अनुसार सत्संग घर में मेंटेन किया जाने 21 रजिस्टर और 22 फ़ाइल, अद्यतन खसरा व अन्य राजस्व रिकार्ड को देखा गया अथवा नहीं, इनके संधारण के संबंध में विजिटर फंक्शनरी का प्रतिवेदन :" name="f_27" autocomplete="off" rows="7"></textarea>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="28. अन्य कोई रिमार्क :" name="f_28" autocomplete="off" rows="5"></textarea>
                  </div>
                  <input type="submit" name="submit" class="btnRegister" value="पंजीकृत करें" />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>