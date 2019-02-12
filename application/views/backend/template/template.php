<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Navegação</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('admin') ?>">Painel Administrativo</a>
        </div>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="<?php echo base_url('admin/slider') ?>"><i class="fa fa-slideshare fa-fw"></i> Slider</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/postagens') ?>"><i class="fa fa-edit fa-fw"></i> Postagens</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/portifolio') ?>"><i class="fa fa-image fa-fw"></i> Galeria</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/servicos') ?>"><i class="fa fa-clipboard fa-fw"></i>Projetos e Serviços</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/sobrenos') ?>"><i class="fa fa-pencil fa-fw"></i> Sobre Nós</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/processo_seletivo') ?>"><i class="fa fa-coffee fa-fw"></i> Processo Seletivo</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/depoimentos') ?>"><i class="fa fa-thumbs-o-up fa-fw"></i> Opniões de Clientes</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/contato') ?>"><i class="fa fa-at fa-fw"></i> Contato</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/usuarios/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Sair do Sistema</a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
