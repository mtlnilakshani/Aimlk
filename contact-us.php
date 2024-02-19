<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Contact us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Barlow+Condensed:100,300,400,400i,500,500i,600,700,900%7CRoboto:100,300,400,500,700,900">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fixed.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="cssload-container">
        <div class="load-circle-item">
          <div class="load-circle"></div>
        </div>
        <div class="load-circle-item">
          <div class="load-circle"></div>
        </div>
        <div class="load-circle-item">
          <div class="load-circle"></div>
        </div>
        <div class="load-circle-item">
          <div class="load-circle"></div>
        </div>
        <div class="load-circle-item">
          <div class="load-circle"></div>
        </div>
        <div class="load-circle-item">
          <div class="load-circle"></div>
        </div>
        <div class="load-circle-item">
          <div class="load-circle"></div>
        </div>
        <div class="load-circle-item">
          <div class="load-circle"></div>
        </div>
        <div class="load-circle-item">
          <div class="load-circle"></div>
        </div>
      </div>
    </div>
    <div class="page">

    <?php include 'header.php';?>
      
      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image context-dark scroll-handler" style="background-image: url(images/logo.jpeg);">
        <div class="image-overlay" data-canvas-src="images/logo.jpeg" style="background-image: url(images/logo.jpeg);"></div>
        <div class="breadcrumbs-main">
          <div class="container">
            <h2 class="breadcrumbs-custom-title scroll-title">Contact Us</h2>
          </div>
        </div>
        <div class="breadcrumbs-panel">
          <div class="container">
            
          </div>
        </div>
      </section>
      <!--Contact us-->
      <section class="section section-xl bg-default">
        <div class="container">
          <div class="row row-30 row-md-50">
            <div class="col-lg-4 col-xl-5">
              <div class="inset-xl-right-70">
                <h3>Have Any Questions?</h3>
                <h5 class="title-6">Feel free to contact us using the form on the right.</h5>
                <ul class="list-contacts">
                  <li><span class="icon mdi mdi-phone"></span><a class="big" href="tel:#">+011-2991366</a></li>
                  <li><span class="icon mdi mdi-map-marker"></span><a class="big" href="#">No.80A, St.Jude Lane, Dalugama, Kelaniya.</a></li>
                  <li><span class="icon mdi mdi-email-outline"></span><a class="big" href="mailto:#"> info@aim.lk</a></li>
                </ul>
                <ul class="list-social list-inline list-inline-md">
                  <li><a class="icon mdi mdi-facebook" href="<?php echo "https://www.facebook.com/profile.php?id=100063617047885"; ?>"></a></li>
                  <li><a class="icon mdi mdi-whatsapp" href="<?php echo "http://www.whatsapp.com"; ?>"></a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-8 col-xl-7">
              <!--RD Mailform-->
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="row row-20 gutter-20">
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-name">Your Name</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-surname" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-surname">Your Surname</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric">
                      <label class="form-label" for="contact-phone">Phone</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="contact-email">E-mail</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message">Message</label>
                      <textarea class="form-input" id="contact-message" name="message"  data-constraints="@Required"></textarea>
                    </div>
                  </div>
                </div>
                <div class="group-lg group-custom-1">
                  <div class="group-custom-ie">
                    <div class="unit unit-spacing-md form-text">
                      <!-- <div class="unit-left"><span class="icon mdi mdi-information-outline"></span></div> -->
                      <div class="unit-body">
                        
                      </div>
                    </div>
                  </div>
                  <div>
                    <button class="button button-gray-5" type="submit">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!--Google Map-->
      <section class="section">
        <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
        <!--Please note that YOUR_API_KEY should replaced with your key.-->
        <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
        <div class="map">
        <div class="map_wrapper">
                    
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.297619787389!2d79.91880097321683!3d6.9741702177658516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2577dc2ca5399%3A0xdbdebd19134ca49a!2sAIM%20Effective%20Marketing%20Solutions!5e0!3m2!1sen!2slk!4v1701753605925!5m2!1sen!2slk" width="2000" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 

                
                
          
        </div>
      </section>
    


      <?php include 'footer.php';?>



    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>



