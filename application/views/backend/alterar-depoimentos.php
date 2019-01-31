<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo 'Administrar '.$subtitulo ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo 'Alterar ' .$subtitulo ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                            echo validation_errors('<div class="alert alert-danger">','</div>');
                            echo form_open('admin/depoimentos/salvar_alteracoes');
                            foreach($listadepoimentos as $depoimento){
                            ?>
                            <div class="form-group">
                                <label id="txt-autor">Autor</label>
                                <input type="text" id="txt-autor" name="txt-autor" class="form-control" placeholder="Informe o autor do depoimento..." value="<?php echo $depoimento->autor ?>">
                                </br>
                                <label id="txt-empresa">Empresa</label>
                                <input type="text" id="txt-empresa" name="txt-empresa" class="form-control" placeholder="Informe a empresa do autor do depoimento..." value="<?php echo $depoimento->descricao ?>">
                                </br>
                                <label id="txt-descricao">Depoimento</label>
                                <input type="text" id="txt-descricao" name="txt-descricao" class="form-control" placeholder="Informe a descrição do depoimento..." value="<?php echo $depoimento->descricao ?>">
                                </br>
                               
                            </div>
                            <input type="hidden" name="txt-id" id="txt-id" value="<?php echo $depoimento->id ?>">
                            <button type="submit" class="btn btn-success">Atualizar</button>
                            <?php
                            }
                            echo form_close();
                            ?>
                        </div>

                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
