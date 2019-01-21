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
                   <?php echo 'Alterar '.$subtitulo ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                echo validation_errors('<div class="alert alert-danger">', '</div>');
                                foreach($slider as $slide){
                                    echo form_open('admin/slider/salvar_alteracoes/'.md5($slide->id));
                            ?>
                                    <div class="form-group">
                                        <label id="txt-titulo">Título do Slide</label>
                                        <input type="text"  id="txt-titulo"  name="txt-titulo" class="form-control"
                                        placeholder="Digite o título do slide..." value="<?php echo $slide->titulo ?>">
                                    </div>
                                    <div class="form-group">
                                        <label id="txt-subtitulo">Subtítulo</label>
                                        <input type="text"  id="txt-subtitulo"  name="txt-subtitulo" class="form-control"
                                        placeholder="Digite o subtítulo do slide..." value="<?php echo $slide->subtitulo ?>">
                                    </div>
                                    <div class="form-group">
                                        <label id="txt-link">Link</label>
                                        <input type="text"  id="txt-link"  name="txt-link" class="form-control"
                                        placeholder="Digite o link de redirecionamento do slide..." value="<?php echo $slide->link ?>">
                                    </div>
                                    <input type= "hidden" name= "txt-id" id= "txt-id" value= "<?php echo $slide->id ?>">
                                    <button type="submit" class="btn btn-default">Atualizar</button>
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

        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo 'Imagem de destaque do '.$subtitulo ?>
                </div>
                <div class="panel-body">
                    <div class="row" style= "padding-bottom: 10px;">
                        <style>
                            img {
                                border: 1px solid #ddd; /* Gray border */
                                border-radius: 4px;  /* Rounded border */
                                padding: 5px; /* Some padding */
                                width: 300px; /* Set a small width */
                            }
                        </style>
                        <div class="col-lg-3 col-lg-offset-3">
                            <?php
                                if($slide->imagem == 1){
                                    echo img("assets/frontend/img/slider/".md5($slide->id).".jpg");
                                }
                                else {
                                    echo img("assets/frontend/img/slider/SemFoto.png");
                                }
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                $divopen= '<div class="form-group">';
                                $divclose= '</div>';
                                echo form_open_multipart('admin/slider/nova_foto');
                                echo form_hidden('id', md5($slide->id));
                                echo $divopen;
                                $imagem= array('name' => 'userfile', 'id' => 'userfile', 'class' => 'form-control');
                                echo form_upload($imagem);
                                echo $divclose;
                                echo $divopen;
                                $botao= array('name' => 'btn_adicionar', 'id' => 'btn_adicionar', 'class' => 'btn btn_default',
                                    'value' => 'Adicionar nova Imagem');
                                echo form_submit($botao);
                                echo $divclose;
                                echo form_close();
                                }
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
