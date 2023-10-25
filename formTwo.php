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
          <a href="index.html"><span style="color:#fff;">Drsunilmishra</span></a>
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
            <h3 class="register-heading">साप्ताहिक जानकारी - RSSB जबलपुर एरिया<br><span style="font-size: 15px; color: #ff5733;"></span></h3>
            <!-- <p class="register-heading">साप्ताहिक जानकारी</p> -->
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
              <div class="row register-form">
                <div class="col-md-12">

                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="1.दिनाँक :" name="f_1" autocomplete="off" onfocus="(this.type='date')" />
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="2. सब सेंटर प्वाइंट का नाम : *" name="f_2" autocomplete="off" required />
                  </div>
                  <div class="form-group">
                    <select class="form-control" placeholder="3. सत्संग का प्रकार : *" name="f_2" autocomplete="off" required>
                      <option value="3. सत्संग का प्रकार : *" selected disabled>3. सत्संग का प्रकार : *</option>
                      <option value="सत्संग कर्ता">सत्संग कर्ता</option>
                      <option value="सत्संग वाचक">सत्संग वाचक</option>
                      <option value="ऑडियो">ऑडियो</option>
                      <option value="वीडियो">वीडियो</option>
                    </select>

                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="4. सत्संग कर्ता/ वाचक का नाम : *" name="f_2" autocomplete="off" required />
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="5. वाणी : *" name="f_2" autocomplete="off" required />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="6. स्टेज़ के पाठी का नाम  : *" name="f_2" autocomplete="off" required />
                  </div>
                  <div class="form-group">
                    <p class="form-control mb-0 mt-3">7. नीचे के पाठी :</p>
                    <input type="text" class="form-control" placeholder="1." name="f_2" autocomplete="off" />
                    <input type="text" class="form-control" placeholder="2." name="f_2" autocomplete="off" />
                    <input type="text" class="form-control mb-3" placeholder="3." name="f_2" autocomplete="off" />
                  </div>

                  <div class="form-group">
                    <p class="form-control mb-0 mt-3">8. संगत की कुल संख्या :</p>
                    <input type="text" class="form-control" placeholder="1. महिला" name="f_2" autocomplete="off" />
                    <input type="text" class="form-control" placeholder="2. पुरुष" name="f_2" autocomplete="off" />
                    <input type="text" class="form-control mb-3" placeholder="3. बच्चे" name="f_2" autocomplete="off" />
                  </div>

                  


                 
                  
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <p class="form-control mb-0 mt-3">9. वाहन का विवरण :</p>
                    <input type="text" class="form-control" placeholder="कुल संख्या" name="f_2" autocomplete="off" />
                    <input type="text" class="form-control" placeholder="1. बस :" name="f_2" autocomplete="off" />
                    <input type="text" class="form-control" placeholder="2. ऑटो/ई रिक्सा :" name="f_2" autocomplete="off" />
                    <input type="text" class="form-control" placeholder="3. कार:" name="f_2" autocomplete="off" />
                    <input type="text" class="form-control" placeholder="4. दुपहिया वाहन :" name="f_2" autocomplete="off" />
                    <input type="text" class="form-control mb-3" placeholder="5. साइकिल :" name="f_2" autocomplete="off" />
                  </div>

                  <div class="form-group">
                    <p class="form-control mb-0 mt-3">10. कृपया यह सुनिश्चित कर सत्यापित करें कि :</p>
                    <div class="form-check mt-2">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        1.यात्री वाहनों के अतिरिक्त अन्य लोडिंग वाहन का उपयोग संगत के लिए नहीं हुआ है।
                      </label>
                    </div>
                    <div class="form-check mt-2">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                      <label class="form-check-label" for="flexRadioDefault2">
                        2.यात्री वाहन बस,ऑटो आदि ओवरलोड नहीं किए गए हैं।
                      </label>
                    </div>
                    <div class="form-check mt-2">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                      <label class="form-check-label" for="flexRadioDefault3">
                        3. वाहनों की हालत और कागज़ात देखे गए हैं तथा वे नियमानुसार उपयुक्त पाए गए हैं।
                      </label>
                    </div>
                    <div class="form-check mt-2">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                      <label class="form-check-label" for="flexRadioDefault4">
                        4.नॉमिनल रोल डेरे द्वारा निर्देशित अनुसार भरे जा रहें हैं ।
                      </label>
                    </div>
                  </div>

                <div class="form-group">
                    <input type="text" class="form-control mt-2" placeholder="11. केयर टेकर/सहायक केयर टेकर, इंचार्ज/असिस्टेंट,नाम : *" name="f_2" autocomplete="off" required />
                  </div>

                  <div class="form-group">
                    <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="12. मोबा./व्हाट्सएप नंबर : *" autocomplete="off" required />
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