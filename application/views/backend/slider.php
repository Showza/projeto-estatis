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
                   <?php echo 'Adicionar novo '.$subtitulo ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                echo validation_errors('<div class="alert alert-danger">', '</div>');
                                echo form_open('admin/slider/inserir');
                            ?>
                            <div class="form-group">
                                <label id="txt-titulo">Título do Slide</label>
                                <input type="text"  id="txt-titulo"  name="txt-titulo" class="form-control"
                                placeholder="Digite o título do slide..." value="<?php echo set_value('txt-titulo') ?>">
                            </div>
                            <div class="form-group">
                                <label id="txt-subtitulo">Subtítulo</label>
                                <input type="text"  id="txt-subtitulo"  name="txt-subtitulo" class="form-control"
                                placeholder="Digite o subtítulo do slide..." value="<?php echo set_value('txt-subtitulo') ?>">
                            </div>
                            <div class="form-group">
                                <label id="txt-link">Link</label>
                                <input type="text"  id="txt-link"  name="txt-link" class="form-control"
                                placeholder="Digite o link de redirecionamento do slide..." value="<?php echo set_value('txt-link') ?>">
                            </div>
                            <button type="submit" class="btn btn-default">Adicionar</button>
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
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo 'Alterar '.$subtitulo.' existente' ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <style>
                                img {
                                    width: 200px;
                                    height: 120px;
                                }
                            </style>
                            <?php
                                $this->table->set_heading("Imagem", "Título", "Subtítulo", "Link", "Alterar", "Excluir");
                                foreach($slider as $slide){
                                    if($slide->imagem == 1){
                                        $fotoslide = img("assets/frontend/img/slider/".md5($slide->id).".jpg");
                                    }
                                    else {
                                        $fotoslide = img("assets/frontend/img/slider/SemFoto.png");
                                    }
                                    $alterar = anchor(base_url('admin/slider/alterar/'.md5($slide->id)), '<i class="fa fa-refresh fa-fw"></i>Alterar');
                                    $excluir = anchor(base_url('admin/slider/excluir/'.md5($slide->id)), '<i class="fa fa-remove fa-fw"></i>Excluir');
                                    $this->table->add_row($fotoslide, $slide->titulo, $slide->subtitulo, $slide->link, $alterar, $excluir);
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
