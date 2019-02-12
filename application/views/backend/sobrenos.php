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
                   <?php echo 'Adicionar'.' '.$subtitulo?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php

                                $this->table->set_heading("Descrição");
                                foreach($descricao as $sobre){
                                    $nomeproj= $sobre->descricao;
                                    $alterar= anchor(base_url('admin/sobrenos/alterar/'.md5($sobre->id)), '<i class="fa fa-refresh fa-fw"></i> Alterar');



                                    $this->table->add_row($nomeproj, $alterar);
                                }
                                $this->table->set_template(array('table_open' => '<table class="table table-striped">'));
                                   echo $this->table->generate();
                            ?>
                        </div>

                                echo validation_errors('<div class="alert alert-danger">','</div>');
                                echo form_open_multipart('admin/sobrenos/inserir');
                             ?>
                             <div class="form-group">
                                 <br/>
                                 <label id="txt-missao">Missão</label>
                                 <?php
                                    foreach($descricao as $sobre){?>
                                     <input id="txt-missao" name="txt-missao" type="text" class="form-control" placeholder="missão da empresa" value= "<?php echo $sobre->missao?>">
                                     <?php
                                     }
                                     ?>
                                 <br/>
                                 <label id="txt-visao">Visão</label>
                                 <?php
                                    foreach($descricao as $sobre){?>
                                     <input id="txt-visao" name="txt-visao" type="text" class="form-control" placeholder="visão da empresa" value= "<?php echo $sobre->visao?>">
                                     <?php
                                     }
                                     ?>
                                 <br/>
                                 <label id="txt-valores">Valores</label>
                                 <?php
                                    foreach($descricao as $sobre){?>
                                     <input id="txt-valores" name="txt-valores" type="text" class="form-control" placeholder="valores da empresa" value= "<?php echo $sobre->valores?>">
                                     <?php
                                     }
                                     ?>
                             </div>
                             <button type="submit" class="btn btn-primary">Salvar</button>
                            <?php
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

        <!--
