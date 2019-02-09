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
                   <?php echo 'Alterar'.' '.$subtitulo?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                echo validation_errors('<div class="alert alert-danger">','</div>');
                                foreach($portifolio as $portifolio){
                                echo form_open('admin/portifolio/alterar/'.$galeria->id);

                             ?>
                             <div class="form-group">
                                 <br/>
                                 <!--<label id="txt-modalidade">Modalidade</label><br/>
                                 <select id="txt-modalidade" name="txt-modalidade">
                                   <option value="Projeto" <?php if($servico->modalidade == "Projeto"){ echo "selected";} ?>>Projeto</option>
                                   <option value="Serviço" <?php if($servico->modalidade == "Serviço"){ echo "selected";} ?>>Serviço</option>
                                 </select>
                                 <br/>
                                 <br/>-->
                                 <label id="txt-nome">Nome</label>
                                 <input id="txt-nome" name="txt-nome" type="text" class="form-control" placeholder="Digite o nome do projeto ou serviço" value="<?php echo $servico->nome ?>">
                                 <br/>
                                 <label id="txt-descricao">Descricao</label>
                                 <input id="txt-descricao" name="txt-descricao" type="text" class="form-control" placeholder="Descreva o projeto ou serviço" value="<?php echo $servico->descricao ?>">
                                 <br/>
                             </div>
                             <button type="submit" class="btn btn-primary">Salvar Alterações</button>
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
        <!-- /.col-lg-6 -->

        <!-- /.col-lg-6 -->