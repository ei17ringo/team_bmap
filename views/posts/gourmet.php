<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>B-MAP</title>
  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/js/bootstrap.js">
  <link rel="stylesheet" href="assets/css/base.css">
  <link rel="icon" type="image/png" href="assets/images/newFavi2.png" sizes="32x32">
</head>

<body>
  <!-- <div id="wrap"> -->
    <!-- ヘッダー -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=""><span class="strong-title">B-MAP</span></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="" class="new"><span class="glyphicon glyphicon-edit"></spa
            n></a></li>
            <li><a href="" class="user"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
            <li><a href="" class="logn"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="contents"><!-- コンテンツはこのタグ内に記入 -->
    <br>
    <br>
    <!-- title -->
      <div class="form-group">
        <div class="col-md-12">
          <h3><?php echo $viewOptions['title'][0]; ?></h3>
        </div>
      </div>
      <br>
      <br>
      <div class="container">
        <div id="main_area">
        <!-- Slider -->
          <div class="row">
            <div class="col-xs-12">
              <!-- Top part of the slider -->
              <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                <div class="carousel slide" id="Carousel">
                <!-- Carousel items -->
                  <div class="carousel-inner">
                    <div class="active item" data-slide-number="0">
                      <img src="C:\xampp\htdocs\b_map\webroot\pictures\20170101091010sample.jpg">
                    </div>
                    <div class="item" data-slide-number="1">
                      <img src="C:\xampp\htdocs\b_map\webroot\pictures\20170105091010sample.jpg">
                    </div>
                    <div class="item" data-slide-number="2">
                      <img src="C:\xampp\htdocs\b_map\webroot\pictures\20170110091010sample.jpg">
                    </div>
                    <div class="item" data-slide-number="3">
                      <img src="C:\xampp\htdocs\b_map\webroot\pictures\20170115091010sample.jpg">
                    </div>
                    <div class="item" data-slide-number="4">
                      <img src="C:\xampp\htdocs\b_map\webroot\pictures\20170201071010sample.jpg">
                    </div>
                    <div class="item" data-slide-number="5">
                      <img src="C:\xampp\htdocs\b_map\webroot\pictures\20170205071010sample.jpg">
                    </div>
                  </div><!-- Carousel nav -->
                </div>
                </div>
                <br>
                <br>
              </div>
            </div>
            <div class="row">
            <!-- Textarea -->
              <div class="form-group">
                <!-- <label class="col-md-4 control-label"></label> -->
                <div class="col-md-offset-3">
                  <h4>バロットとは成長途中のゆで卵です</h4>
                  <br>
                  <br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/Slider-->
      <div class="row" id="slider-thumbs">
        <ul class="hide-bullets"></ul>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div id="Carousel" class="carousel slide">
                <!-- indicator Off -->
                  <!--  <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    <li data-target="#Carousel" data-slide-to="2"></li>
                  </ol> -->
                  <!-- Carousel items -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="row">
                        <div class="col-md-2"><a class="thumbnail" id="carousel-selector-0"><img src="C:\xampp\htdocs\b_map\webroot\pictures\20170101091010sample.jpg" alt="Image" style="max-width:100%;"></a></div>
                        <div class="col-md-2"><a class="thumbnail" id="carousel-selector-1"><img src="C:\xampp\htdocs\b_map\webroot\pictures\20170105091010sample.jpg" alt="Image" style="max-width:100%;"></a></div>
                        <div class="col-md-2"><a class="thumbnail" id="carousel-selector-2"><img src="C:\xampp\htdocs\b_map\webroot\pictures\20170110091010sample.jpg" alt="Image" style="max-width:100%;"></a></div>
                        <div class="col-md-2"><a class="thumbnail" id="carousel-selector-3"><img src="C:\xampp\htdocs\b_map\webroot\pictures\20170115091010sample.jpg" alt="Image" style="max-width:100%;"></a></div>
                        <div class="col-md-2"><a class="thumbnail" id="carousel-selector-4"><img src="C:\xampp\htdocs\b_map\webroot\pictures\20170115091010sample.jpg" alt="Image" style="max-width:100%;"></a></div>
                        <div class="col-md-2"><a class="thumbnail" id="carousel-selector-4"><img src="C:\xampp\htdocs\b_map\webroot\pictures\20170115091010sample.jpg" alt="Image" style="max-width:100%;"></a></div>
                      </div><!--.row-->
                    </div><!--.item-->
                    <!--  <a data-slide="prev" href="#Carousel" class="left carousel-control">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a data-slide="next" href="#Carousel" class="right carousel-control">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a> -->
                </div><!--.Carousel-->
              </div>
            </div>
          </div><!--.container-->
      </div>


    <!-- カルーセル -->
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="assets/css/boostrap-combined.min.css">
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">



<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('#Carousel').carousel({
            interval: 5000
    });
    $('#carousel-text').html($('#slide-content-0').html());

    //Handles the carousel thumbnails
    $('[id^=carousel-selector-]').click( function(){
      var id = this.id.substr(this.id.lastIndexOf("-") + 1);
      var id = parseInt(id);
      $('#Carousel').carousel(id);
    });
    // // When the carousel slides, auto update the text
    // $('#Carousel').on('slid.bs.carousel', function (e) {
    //          var id = $('.item.active').data('slide-number');
    //         $('#carousel-text').html($('#slide-content-'+id).html());
    // });
});
</script>

  <!-- フッター -->
  <nav class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="container">
      <footer id="footer">copyright © B-MAP All Rights Reserved.</footer>
    </div>
  </nav>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/form.js"></script>
</body>
</html>