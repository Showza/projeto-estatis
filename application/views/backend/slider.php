<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $subtitulo ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo $subtitulo ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                echo validation_errors('<div class="alert alert-danger">','</div>');
                                echo form_open_multipart('admin/slider/inserir');
                             ?>
                             <div class="form-group">
                                 <label id="txt-titulo">Título</label>
                                 <input id="txt-titulo" name="txt-titulo" type="text" class="form-control" placeholder="Digite o título do slide">
                                 <br/>
                                 <label id="txt-subtitulo">Subtítulo</label>
                                 <input id="txt-subtitulo" name="txt-subtitulo" type="text" class="form-control" placeholder="Subtítulo do slide">
                                 <br/>
                                 <label id="txt-link">Link</label>
                                 <input id="txt-link" name="txt-link" type="text" class="form-control" placeholder="Link de redirecionamento">
                                 <br/>
                                 <label id="txt-imagem">Imagem</label>
                                 <input id="txt-imagem" name="txt-imagem" type="file" value="Procurar arquivo..." placeholder="nenhum arquivo selecionado">
                                 <?php echo form_error('txt-imagem', '<p class="frm_err">', '<p>'); ?>
                                 <br/>
                             </div>
                             <button type="submit" class="btn btn-primary">Cadastrar</button>
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
        <!-- /.col-lg-6 -->
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo 'Alterar'.' '.$subtitulo ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <style>
                                img {
                                    width: 100px;
                                }
                            </style>
                            <?php
                                $this->table->set_heading("Imagem", "Título", "Subtítulo", "Link", "Alterar Dados", "Excluir");
                                foreach($slider as $slide){
                                    if($slide->imagem != null){
                                        $fotoslide = img("assets/frontend/img/slider/".$slide->imagem);
                                    }
                                    else {
                                        $fotoslide = img("assets/frontend/img/semFoto.png");
                                    }
                                    $tituloslide = $slide->titulo;
                                    $subtituloslide = $slide->subtitulo;
                                    $linkslide = $slide->link;
                                    $alterar = anchor(base_url('admin/slider/alterar/'.md5($slide->id)),'<button type="button" class="btn btn-link"><span style="color:#337ab7"><i class="fa fa-refresh fa-fw"></i>Alterar</span></button>');
                                    $excluir = $excluir= '<button type="button" class="btn btn-link" data-toggle="modal" data-target=".excluir-modal-'.$slide->id.'"><span style="color:red"><i class="fa fa-remove fa-fw"></i> Excluir</span></button>';
                                    echo $modal= ' <div class="modal fade excluir-modal-'.$slide->id.'" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel2">Exclusão de slide</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h4>Deseja Realmente excluir o slide '.$slide->titulo.'?</h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                <a type="button" class="btn btn-primary" href="'.base_url("admin/slider/remover/".md5($slide->id).'/'.$slide->imagem).'">Excluir</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>';

                                    $this->table->add_row($fotoslide,$tituloslide,$subtituloslide,$linkslide,$alterar,$excluir);
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
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
