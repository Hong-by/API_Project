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
</head>

<body>

  <div class="wrap">
    <!-- main Background Image -->
    <img src="/API_project/img/gocamp_bg.png" alt="" class="bg">

    <!-- Header -->
    <?php include $_SERVER['DOCUMENT_ROOT']."/API_project/include/header.php"; ?>

    <!-- Search and Select Bar -->
    <div class="contents_bar">
      <div class="center">
        <div class="search_bar">
          <input type="text" placeholder="검색할 키워드를 입력해 주세요.">
          <button><img src="/API_project/img/gocamp_icon.png" alt=""></button>
        </div>
        <div class="drop_bar">
          <div class="dropdown">
            <div class="select">
              <span>내 주변 캠핑장 검색</span>
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
  </div>


  <!-- Jquery Framework Load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/API_project/js/main.js"></script>
  <!-- <script src="/API_project/js/current_position.js"></script> -->

</body>

</html>