<!-- Slideshow container -->
<div class="slideshow-container" id="home" style="overflow:hidden; margin-top:-20px; margin-bottom: -20px">

    <style>
        .slide {
            -webkit-filter: blur(3px) invert(30%) grayscale(50%) brightness(70%) contrast(4);
            filter: blur(3px) invert(30%) grayscale(50%) brightness(70%) contrast(4);
            transform:scale(1.1);
        }
        @media (max-width: 768px) {
			.slideimg {
				width:100% !important;
				height:250px !important;
			}
		}
    </style>

    <!-- Full-width images with number and caption text -->
    <?php
	  foreach($slider as $slides){
          if($slides->imagem == 1){
              $fotoslide = base_url("assets/frontend/img/slider/".md5($slides->id).".jpg");
          }
          // sem o else permanece a imagem do último slide, caso nao haja imagem
          // else {
          //     $fotoslide = null;
          // }
	?>
    <div class="mySlides">
        <img class="slide slideimg" src="<?php echo $fotoslide ?>" style="width:100%; height:800px;">
        <font face="Titillium Web"><div class="text"><?php echo $slides->titulo ?></div>
            <div class="subtext">
                <form method="get" action="<?php echo limpar($slides->link) ?>" style="text-align:center;">
                    <button type="submit" style="background-color: rgba(0,0,0,0);
                    border-color: #64030e; border-width: 0.3vw; border-style: solid;
                    display:inline-block; padding:0.5em 2em;">
                        <b style="text-shadow: 2px 2px 8px #000000;"><?php echo $slides->subtitulo ?></b>
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

<!-- DEPOIMENTOS -->
<div id="depoimentos">
    <h2 class="subtitle">OPINIÃO DE NOSSOS CLIENTES</h2>
<div class="content-depo">
    <div class="depo1">
        <p class="depo-txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
    <div class="depo2">
        <p class="depo-txt">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
    </div>
</div>
<hr>
</div>
