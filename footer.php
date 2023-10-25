  <!-- logo Section Start -->
  <!-- iFrame Start -->
  <div class="col-md-12" id="note" style="background: #03254c; padding:10px 5%;">
  </div>
  <!-- iFrame End -->
  <!-- logo Section End -->
  <footer>
      <div class="container-fluid">
          <div class="row" style="background-color: #000; width:100%">
              <div class="col-md-6 px-2">
                  <div class="row social-icon text-center" data-aos="zoom-in" data-aos-duration="1000">
                      <div class="col-md-2">
                          <a href="https://api.whatsapp.com/send?phone=919425968000" target="_blank" rel="noopener noreferrer"><img src="images/whatsapp.png" alt="WhatsApp" width="35px" class="my-3"></a>
                      </div>
                      <div class="col-md-2">
                          <a href="https://www.youtube.com/@drsunilmishra4all" target="_blank" rel="noopener noreferrer">
                              <img src="images/youtube.png" alt="youtube" width="35px" class="my-3">
                          </a>
                      </div>
                      <div class="col-md-2">
                          <a href="https://www.facebook.com/drsunilmishra4all" target="_blank" rel="noopener noreferrer"><img src="images/facebook.png" alt="fb" width="35px" class="my-3"></a>
                      </div>
                      <div class="col-md-2">
                          <a href="https://twitter.com/SunilMishraDr" target="_blank" rel="noopener noreferrer"><img src="images/twitter.png" alt="twitter" width="35px" class="my-3"></a>
                      </div>
                      <div class="col-md-2 mb-3">
                          <a href="mailto: drsunilmishra4all@gmail.com" target="_blank" rel="noopener noreferrer"><img src="images/gmail.png" alt="Gmail" width="35px" class="my-3"></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-5 mx-md-3 my-2 text-center" data-aos="fade-up">
                  <div class="text-center" style="border-radius: 12px; color: #fff;">
                      <a href="login.php"><img src="images/sewaGroup.png" alt="Avatar" style="width:35px"></a>
                      <div class="text mt-1 mb-4 px-3">
                          <p style="font-size: 16px; margin-bottom: 8px; ">सेवा ग्रुप</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12 mb-1" style="text-align: center;">
              <span style="font-size: 14px;">निःशुल्क शिविर, संवाद, सेवा, सहयोग, सलाह व जानकारी हेतु संपर्क कर सकते हैं</span>
          </div>
      </div>
      <?php include('contactForm.php') ?>
      <!-- My Fieldset -->
      <div class="col-md-12 px-5 mt-5 text-center" style="font-size: 12px;" data-aos="zoom-out" data-aos-duration="1000">
          <p>Designed & Developed by<br><br><a href="https://piyushkumar.infinityfreeapp.com" style="background:white;color:#000; padding:6px 12px; border-radius:12px;">Piyush Kumar Raikwar</a></p>
      </div>
      <!-- My Fieldset -->
      <hr style="background-color: #fff; border: 2px solid #fff; margin:6px 12px; margin-top: 50px; width: 95%;">
      <div class="col-md-12 text-center footer-span">
          <span>2023 - Dr Sunil Mishra Portfolio. India © All right reserved.</span>
      </div>
      </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/script.js" async defer></script>
  <!-- AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
      AOS.init();
  </script>
  <script>
      $('img[data-enlargable]').addClass('img-enlargable').click(function() {
          var src = $(this).attr('src');
          $('<div>').css({
              background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
              backgroundSize: 'contain',
              width: '100%',
              height: '100%',
              position: 'fixed',
              zIndex: '10000',
              top: '0',
              left: '0',
              cursor: 'zoom-out'
          }).click(function() {
              $(this).remove();
          }).appendTo('body');
      });
  </script>
  </body>

  </html>