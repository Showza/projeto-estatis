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
                   <?php echo 'Adicionar ' .$subtitulo ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                            echo validation_errors('<div class="alert alert-danger">','</div>');
                            echo form_open('admin/depoimentos/inserir');
                            ?>
                            <div class="form-group">
                                <label id="txt-autor">Autor</label>
                                <input type="text" id="txt-autor" name="txt-autor" class="form-control" placeholder="Informe o autor do depoimento...">
                                </br>
                                <label id="txt-empresa">Empresa</label>
                                <input type="text" id="txt-empresa" name="txt-empresa" class="form-control" placeholder="Informe a empresa do autor...">
                                </br>
                                <label id="txt-descricao">Depoimento</label>
                                <input type="text" id="txt-descricao" name="txt-descricao" class="form-control" placeholder="Informe a descrição do depoimento...">
                                </br>
                            </div>
                            <button type="submit" class="btn btn-success">Salvar</button>
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

        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo 'Alterar ' .$subtitulo ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                $this->table->set_heading("Título do depoimento", "Alterar", "Excluir");
                                foreach($listadepoimentos as $depoimento){
                                    $nomeproj= $depoimento->autor;
                                    $alterar= anchor(base_url('admin/depoimentos/alterar/'.md5($depoimento->id)), '<i class="fa fa-refresh fa-fw"></i> Alterar');

                                    $excluir= '<button type="button" class="btn btn-link" data-toggle="modal" data-target=".excluir-modal-'.$depoimento->id.'"><span style="color:red"><i class="fa fa-remove fa-fw"></i> Excluir</span></button>';
                                    echo $modal= ' <div class="modal fade excluir-modal-'.$depoimento->id.'" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel2">Exclusão de depoimento</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h4>Deseja Realmente excluir o depoimento '.$depoimento->autor.'?</h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                <a type="button" class="btn btn-primary" href="'.base_url("admin/depoimentos/excluir/".md5($depoimento->id)).'">Excluir</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>';

                                    $this->table->add_row($nomeproj, $alterar, $excluir);
                                }
                                $this->table->set_template(array('table_open' => '<table class="table table-striped">'));
                                   echo $this->table->generate();
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
