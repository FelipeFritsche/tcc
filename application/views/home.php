<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Meus eventos </h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <p class="text-muted font-13 m-b-30">
            </p>
            <table id="datatable" class="table table-striped  projects">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Local</th>
                        <th>Responsável</th>
                        <th>Status</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>  
                <?php foreach($eventos as $item): ?>
                    <tr>
			<th><?php echo $item->titulo ?></th>
                        <th><?php echo $item->local ?></th>
                        <th><?php echo $item->responsavel ?></th>
                        <th><?php echo $item->tipoAcesso ?></th>
                        <th><a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Acesso </a></th>
                        <th><a href="#" class="btn btn-danger btn-xs "><i class=" glyphicon glyphicon-log-out"></i> Sair </a><th>
                    </tr>        
		<?php endforeach ?>
                </tbody>
            </table>

        </div>
        

    </div>
</div>

100.111.41.50
brother dcp-8157DN