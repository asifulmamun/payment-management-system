<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
<ol class="carousel-indicators">
  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  <li data-target="#myCarousel" data-slide-to="1"></li>
  <li data-target="#myCarousel" data-slide-to="2"></li>
</ol>
<!-- Wrapper for slides -->
<div class="carousel-inner">
  <div class="item active">
    <a title="Click This Image For Show Full Size." href="<?php sliderImage1(); ?>"><img src="<?php sliderImage1(); ?>" alt="<?php sliderImage1(); ?>" style="width:100%;"></a>
  </div>
  <div class="item">
    <a title="Click This Image For Show Full Size." href="<?php sliderImage2(); ?>"><img src="<?php sliderImage2(); ?>" alt="<?php sliderImage2(); ?>" style="width:100%;"></a>
  </div>
  <div class="item">
    <a title="Click This Image For Show Full Size." href="<?php sliderImage3(); ?>"><img src="<?php sliderImage3(); ?>" alt="<?php sliderImage1(); ?>" style="width:100%;"></a>
  </div>
</div>
<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
  <span class="sr-only">Next</span>
</a>
</div>
