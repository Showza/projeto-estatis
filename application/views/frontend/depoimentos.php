
<!-- DEPOIMENTOS -->
<div id="depoimentos">
    <h2 class="subtitle">OPINIÃO DOS NOSSOS CLIENTES</h2>
    <?php $i=0; foreach($listadepoimentos as $depoimentos) {?>
            <div class="content-depo"  style="height:500px;width:100%;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;" >
                <div class="depo1">
                    <p class="depo-txt"><?php echo $listadepoimentos[$i]->descricao?> </p>
                    <div class="author-depo">
                        <h4> <strong><?php echo $listadepoimentos[$i]->autor?>  </strong></h4>
                        <h5><?php echo $listadepoimentos[$i]->empresa?> </h5>
                    </div>
                </div>
            </div>
    <?php $i++; } ?>

    <hr>
</div>
