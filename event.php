<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Barlow+Condensed:100,300,400,400i,500,500i,600,700,900%7CRoboto:100,300,400,500,700,900">
    <link rel="stylesheet" href="css/style.css">
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
            <h2 class="breadcrumbs-custom-title scroll-title">Company Events</h2>
          </div>
        </div>
        <div class="breadcrumbs-panel">
          <div class="container">
            
          </div>
        </div>
      </section>
<!--Classes-->
</section>

<!-- Classes -->
<section class="section section-lg bg-default">
        <div class="row row-8 gutter-8" data-lightgallery="group">
          <?php
            // Connect to your database (replace these with your actual database credentials)
            $servername = "localhost:3306";
            $username = "aimlk_aimadmin";
            $password = "kegalle@1978AB";
            $dbname = "aimlk_aimdata";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check the connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Query to fetch image URLs from the database (replace 'your_table_name' with your actual table name)
            $sql = "SELECT image FROM event";
            $result = $conn->query($sql);

            // Display images
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $imageUrl = $row["image"];
                    echo '<div class="col-sm-6 col-md-4 col-xl-3">
                            <article class="thumbnail-classic">
                              <a class="thumbnail-classic-figure" data-lightgallery="item" href="/upload/event/'.$imageUrl.'">
                                <img src="/upload/event/'.$imageUrl.'" alt="" width="475" height="354"/>
                                <div class="thumbnail-classic-overlay"><span class="icon mdi mdi-plus"></span></div>
                              </a>
                            </article>
                          </div>';
                }
            } else {
                echo "Soon On";
            }

            // Close the database connection
            $conn->close();
          ?>
        </div>
          </section>
<br>


      <?php include 'footer.php';?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>