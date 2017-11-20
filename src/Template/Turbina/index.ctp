<div class="container">

<h1>Lista de Turbinas</h1>

<p>
    <a href="<?php echo $this->Url->build(['action'=> 'add']) ?>" class="btn btn-primary">
        <i class="fa fa-plus fa"></i> Crear
    </a>
</p>


<div clas="table-responsive">

	<table class="table table-striped">
	    
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
	    
        <tbody>
        <?php foreach ($turbinas as $turbina): ?>
	    <tr>
	        <td>
	            <?= $this->Html->link($turbina->nombre, ['action' => 'view', $turbina->id]) ?>
                
	        </td>
            <td>
	            <?= $turbina->descripcion ?>
	        </td>
	        <td>
                <a href="<?php echo $this->Url->build(['action'=> 'edit', $turbina->id]) ?>" class="btn btn-secondary">
                    <i class="fa fa-pencil-square-o"></i> Editar
                </a>
	            <?= $this->Form->postLink(
	                'Borrar',
	                ['action' => 'delete', $turbina->id],
	                ['confirm' => '¿Estas seguro de borrar?', 'class'=> 'alert alert-danger'])
	            ?>
	        </td>
	    </tr>
	    <?php endforeach; ?>
        </tbody>
	 
	</table>
</div>
</div>