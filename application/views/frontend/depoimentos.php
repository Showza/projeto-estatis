
<!-- DEPOIMENTOS -->
<div id="depoimentos">
    <h2 class="subtitle">OPINIÃO DOS NOSSOS CLIENTES</h2>


    <div class="row">
        <div class="col-md-12" data-wow-delay="0.9s">
            <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                <!-- Bottom Carousel Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#quote-carousel" data-slide-to="0" class="active">
                    </li>
                    <li data-target="#quote-carousel" data-slide-to="1">
                    </li>
                </ol>

                <!-- Carousel Slides / Quotes -->
                <div class="carousel-inner text-center">
                    <!-- Quote 1 -->
                    <?php foreach($listadepoimentos as $depoimento) {?>

                        <div class="item active">
                                <div class="content-depo">

                                    <div class="depo1">
                                        <p class="depo-txt"><?php echo $depoimento->descricao?> </p>
                                        <div class="author-depo">
                                            <h4> <strong><?php echo $depoimento->autor?>  </strong></h4>
                                            <h5><?php echo $depoimento->empresa?> </h5>
                                        </div>
                                    </div>
                                    
                                    <div class="depo2">
                                        <p class="depo-txt"><?php echo $depoimento->descricao?> </p>
                                        <div class="author-depo">
                                            <h4> <strong><?php echo $depoimento->autor?>  </strong></h4>
                                            <h5><?php echo $depoimento->empresa?> </h5>
                                        </div>
                                    </div>

                                </div>
                        </div>
                    <?php  } ?>

                </div>

                <!-- Carousel Buttons Next/Prev -->
                <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left" style="color: transparent"></i></a>
                <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right" style="color: transparent"></i></a>
            </div>
        </div>
    </div>
</div>
