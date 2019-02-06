<div id="voltarTopo">
	<a href="#" id="subir" style="text-decoration:none; color: #820e0e; z-index: 9999;"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
</div>
<!-- Page Content -->
<div class="container fluid" style="width: 100%">
    <!-- Blog Post -->
    <font face="Titillium Web" style="text-align:center;">
    <?php
        foreach($postagem as $destaque){
    ?>
    <h2>
        <a href="<?php echo base_url('postagem/'.$destaque->id.'/'.limpar($destaque->titulo)) ?>" style="text-decoration:none; color: #64030e;">
        <b><?php echo $destaque->titulo ?></b>
        </a>
    </h2>
    <p class="lead">
        por <a href="index.php" style="text-decoration:none; color: #64030e;"><?php echo $destaque->autor ?></a>
    </p>
    <p><span><i class="far fa-clock"></i></span> <?php echo postadoem($destaque->data) ?></p>
    <br>
    </font>
    <?php
    if($destaque->imagem == 1){
        $fotopub= base_url("assets/frontend/img/publicacao/".md5($destaque->id).".jpg");
    ?>
    <img class="img-responsive" src="<?php echo $fotopub ?>" alt="" style="object-fit: cover; width: 70%; height: 20vw;">
    <br>
    <?php
    }
    ?>
    <font face="Titillium Web" style="text-align:center;">
    <p><?php echo $destaque->subtitulo ?></p>
    <br>
    </font>
    <form method="post" action="<?php echo base_url('postagem/'.$destaque->id.'/'.limpar($destaque->titulo)) ?>"
    style="text-align:center; display: flex; align-items: center; justify-content: center;">
        <button type="submit" style="background-color: rgba(0,0,0,0); border-color: #64030e;
        border-width: 0.3vw; border-style: solid; display:inline-block; padding:0.5em 2em;">
            <b style="color: black;">
            <font face="Titillium Web" style="text-align:center;">Leia mais</font>
            <span class="glyphicon glyphicon-chevron-right"></span>
            </b>
        </button>
    </form>
    <font face="Titillium Web" style="text-align:center;">
    <hr>
    <?php
    }
    echo "<div class'paginacao'".$links_paginacao."</div>";
    ?>
    </font>
</div>
