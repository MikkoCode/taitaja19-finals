

<?php
require 'header.php';
?>

<section id="page-breadcrumb">
    <div class="vertical-center sun">
       <div class="container">
        <div class="row">
            <div class="action">
                <div class="col-sm-12">
                    <h1 class="title">Pepper-Robotti</h1>
                    <p>Tervetuloa Pepper-Robotin esittelyyn</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


<section id="company-information" class="choose">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0ms">
                <img src="images/pepper-robot-esittelykuva.png" class="img-responsive" alt="" id="pepper">
            </div>
            <div class="col-sm-6 padding-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0ms">
                <h2>Pepper-Robotti</h2>
                <p>Vie hiiri tekstin päälle, niin näät lisätietoja kyseisestä osasta.</p>
                <ul class="elements" style="font-size:20px;">
                    <li class="wow fadeInUp" data-wow-duration="900ms" data-wow-delay="100ms" id="kamera"><i class="fa fa-angle-right"></i>3D- ja HD-kamera</li>
                    <li class="wow fadeInUp" data-wow-duration="600ms" data-wow-delay="400ms" id="kaynnistys"><i class="fa fa-angle-right"></i>Käynnistys (Kuvaruudun takana)</li>
                    <li class="wow fadeInUp" data-wow-duration="800ms" data-wow-delay="200ms" id="mikki"><i class="fa fa-angle-right"></i>Mikrofonit (4kpl)</li>
                    <li class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms" id="kaiutin"><i class="fa fa-angle-right"></i>Kaiuttimet (2kpl)</li>
                    <li class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms" id="lataus"><i class="fa fa-angle-right"></i>Latausliitin (Takana)</li>
                    <li class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms" id="naytto"><i class="fa fa-angle-right"></i>Interaktiivinen näyttö</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<hr>
<section id="action" class="responsive">
    <div class="vertical-center">
       <div class="container">
        <div class="row">
            <div class="action take-tour">
                <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                    <h1 class="title">Katso esittelyvideo</h1>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section>
    <video id='my-video' class='video-js' controls preload='auto'
    poster='../images/thumbnail.PNG' data-setup='{"fluid": true}'>
    <source src='../video/pepper-robot-video.mp4' type='video/mp4'>
        <source src='MY_VIDEO.webm' type='video/webm'>
            <p class='vjs-no-js'>
              To view this video please enable JavaScript, and consider upgrading to a web browser that
              <a href='https://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>
          </p>
      </video>
  </section>



  <?php
  require 'footer.php';
  ?>

</body>
</html>
