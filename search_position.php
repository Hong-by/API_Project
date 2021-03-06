<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
    content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <title>Go Camping</title>

  <!-- Favicon Link -->
  <link rel="shortcut icon" href="/API_project/img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/API_project/img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="/API_project/img/favicon.ico">
  <!-- Main style CSS Link -->
  <link rel="stylesheet" href="/API_project/css/style.css">
  <!-- animation Style Link -->
  <link rel="stylesheet" href="/API_project/css/animation.css">
  <!-- Font Awesome Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Owl Carousel Style Link -->
  <link rel="stylesheet" href="/API_project/css/owl.carousel.css">
</head>

<body>

  <div class="wrap">

    <!-- Header -->
    <?php include $_SERVER['DOCUMENT_ROOT']."/API_project/include/header.php"; ?>

    <!-- Map Box -->
    <div class="map_img" id="map">
      <img src="img/gocamp_map.jpg" alt="">
    </div>

    <!-- Search and Select Bar -->
    <div class="contents_bar search_position">
      <div class="center">
        <div class="drop_bar">
          <div class="dropdown">
            <div class="select">
              <span id="query_val">내 주변 캠핑장 검색</span>
              <i class="fa fa-chevron-down"></i>
            </div>
            <ul class="dropdown_menu">
              <li><a href="/API_project/search_position.php?radi=10000">반경 10KM 검색</a></li>
              <li><a href="/API_project/search_position.php?radi=20000">반경 20KM 검색</a></li>
              <li><a href="/API_project/search_position.php?radi=30000">반경 30KM 검색</a></li>
              <li><a href="/API_project/search_position.php?radi=40000">반경 40KM 검색</a></li>
              <li><a href="/API_project/search_position.php?radi=50000">반경 50KM 검색</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Contents_bar -->

    <div class="bt_box">
      <span><i class="fa fa-chevron-up"></i></span>
      <div class="bt_sl carousel_section">
        <div class="carousel_container">
          <div class="owl-carousel owl-theme" id="contents_box">

            <!-- <div class="carousel_item">
              <div class="item_card">
                <div class="sl_img">
                  <img src="img/ex.jpg" alt="">
                </div>
                <div class="sl_txt">
                  <h2>청계산 캠핑장</h2>
                  <p>청계산 캠핑장은 청계산에서 겁나 멀게 있으며 어쩌구 저쩌구..</p>
                </div>
                <div class="sl_icons">
                  <img src="img/ico_mart.png" alt="">
                  <em>운동시설, 샤워장</em>
                </div>
              </div>
            </div> -->
            <!-- end of carousel_item -- Looping item -->

          </div>
          <!-- end of owl-carousel -- wrap all slide items -->
        </div>
        <!-- end of carousel_containter -->
      </div>
    </div>
  </div>


  <!-- Jquery Framework Load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZz9q-KsvHDMViTJZ8pVaQNSNmk5IWeIc&region=kr"></script>
  <script src="/API_project/js/owl.carousel.js"></script>
  <script src="/API_project/js/main.js"></script>
  <script src="/API_project/js/current_position.js"></script>

</body>

</html>