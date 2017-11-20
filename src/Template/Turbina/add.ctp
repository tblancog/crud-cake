	<h1>Crear Turbina</h1>

    <?php echo $this->Form->create($turbina, ['enctype' => 'multipart/form-data']) ?>
      <div class="form-group">
          <?php
          echo $this->Form->input('nombre', ['class'=> 'form-control form-control-lg', 'id'=> 'nombre', 'placeholder'=> 'Nombre']);
          ?>
      </div>
      
      <div class="form-group">
          <?php
          echo $this->Form->input('descripcion', ['class'=> 'form-control form-control-lg', 'id'=> 'descripcion', 'placeholder'=> 'Descripcion']);
          ?>
      </div>
        
      <div class="form-group">
          <label for="foto">Foto <small>Solo jpg</small></label>
          
          <div class="form-control">
            
              <?php echo $this->Form->file('foto', ['id'=> 'foto']); ?>

        
          </div>
          
      </div>
        
        <div class="form-group">
            <?= $this->Html->link('Cancelar', ['action' => 'index'], ['class'=> 'btn btn-light']) ?>
            <?php echo $this->Form->button(__('Guardar'), ['class'=> 'btn btn-primary']) ?>
        </div>
    
    <?php echo $this->Form->end() ?>

