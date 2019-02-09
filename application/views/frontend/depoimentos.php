
<!-- DEPOIMENTOS -->
<div id="depoimentos">
    <h2 >OPINIÃO DOS NOSSOS CLIENTES</h2>
    <?php $i=0; foreach($listadepoimentos as $depoimentos) {?>
            <div class="content-depo" >
                <div class="depo1" style="width: 70%">
                    <p class="depo-txt"><?php echo $listadepoimentos[$i]->descricao?> </p>
                    <div class="author-depo">
                        <h4> <strong><?php echo $listadepoimentos[$i]->autor?>  </strong></h4>
                        <h5><?php echo $listadepoimentos[$i]->empresa?> </h5>
                    </div>
                </div>
            </div>
    <?php $i++; } ?>

</div>
<hr style="margin:0px;">
