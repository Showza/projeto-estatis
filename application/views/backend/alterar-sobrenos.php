<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo 'Administrar '.$subtitulo ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo 'Alterar ' .$subtitulo ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                            echo validation_errors('<div class="alert alert-danger">','</div>');
                            echo form_open('admin/sobrenos/salvar_alteracoes');
                            foreach($descricao as $sobre){
                            ?>
                            <div class="form-group">
                                
                                <label id="txt-descricao">Descrição</label>
                                <input type="text" id="txt-descricao" name="txt-descricao" class="form-control" placeholder="Informe a descrição do sobre nos..." value="<?php echo $sobre->descricao ?>">
                                </br>
                               
                            </div>
                            <input type="hidden" name="txt-id" id="txt-id" value="<?php echo $sobre->id ?>">
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
