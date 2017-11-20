
<div class="container">

    <div class="col-sm-6">
    
        <div class="card" style="width: 20rem;">
            <?php echo $this->Html->image($turbina->id. '.jpg', ['class'=> 'card-img-top', 'alt'=> 'Turbina']) ?>

          <div class="card-body">
            <h4 class="card-title"><?php echo $turbina->nombre ?></h4>
            <p class="card-text"><?php echo $turbina->descripcion ?></p>
              <?= $this->Html->link('Listado', ['action' => 'index'], ['class'=> 'btn btn-light']) ?>
              <?= $this->Html->link('Editar', ['action' => 'edit', $turbina->id], ['class'=> 'btn btn-primary']) ?>
          </div>
        </div>
    </div>
</div>