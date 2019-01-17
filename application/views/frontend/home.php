<!-- Slideshow container -->
<div class="slideshow-container" id="home">

    <style>
        .slide {
            -webkit-filter: blur(3px) invert(30%) grayscale(50%) brightness(70%) contrast(4);
            filter: blur(3px) invert(30%) grayscale(50%) brightness(70%) contrast(4);
        }
    </style>

    <!-- Full-width images with number and caption text -->
    <?php
	  foreach($slider as $slides){
	?>
    <div class="mySlides">
        <img class="slide" src="<?php echo base_url('assets/frontend/img/slider/'.$slides->imagem.'.jpg') ?>" style="width:100%;">
        <font face="Titillium Web"><div class="text"><?php echo $slides->titulo ?></div>
            <div class="subtext">
                <form method="get" action="<?php echo limpar($slides->link) ?>" style="text-align:center;">
                    <button type="submit" style="background-color: rgba(0,0,0,0);
                    border-color: #64030e; border-width: 5px; border-style: solid;
                    height:80px; width:450px">
                        <b><?php echo $slides->subtitulo ?></b>
                    </button>
                </form>
            </div>
        </font>
    </div>
    <?php
    }
    ?>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)" style="font-size:300%; text-decoration:none; color: #350606">&#10094;</a>
  <a class="next" onclick="plusSlides(1)" style="font-size:300%; text-decoration:none; color: #350606;">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<!-- <div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div> -->
