
<div class="row">

    <div class="span4" >
    
        <div class="actions well">
	 
        <ul class="nav nav-list">
        
        <li class='nav-header'><?php echo __('Ações'); ?></li>
        
        		        <li><?php echo $this->Html->link(__('Listar Produtos'), array('action' => 'index'), array('class'=>''));?></li>
        <li class='nav-header'><?php echo __('Classes'); ?></li>		<li><?php echo $this->Html->link(__('Listar Classes'), array('controller' => 'classes', 'action' => 'index'), array('class'=>'')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Classe'), array('controller' => 'classes', 'action' => 'add'), array('class'=>'')); ?></li> 
<li class='nav-header'><?php echo __('Marcas'); ?></li>		<li><?php echo $this->Html->link(__('Listar Marcas'), array('controller' => 'marcas', 'action' => 'index'), array('class'=>'')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Marca'), array('controller' => 'marcas', 'action' => 'add'), array('class'=>'')); ?></li> 
        
        </ul>
	 
        </div>
    
    
    
    </div>

    <div class="span8" >   
    
    
    <h4 class="ym-fbox-heading"><?php echo __('Incluir Produto'); ?></h4>
    
            <div class="produtos form">
        <div class="form">
        <?php echo $this->Form->create('Produto', array(
        'inputDefaults' => array(     
            'div'   => false,
            # define error defaults for the form
            'error' => array(
              'wrap'  => 'span',
              'class' => 'error'
            )
        )
    ));?>
	        
		        <h6><?php echo __('Dados Produto'); ?></h6>
        	<?php
		echo $this->Form->input('classe_id');
		echo $this->Form->input('marca_id');
		echo $this->Form->input('nome');
		echo $this->Form->input('descricao');
	?>
	    
	        <div class="">
              <input type="submit" class="btn" value="Enviar" id="submit" name="Enviar" />
              <input type="reset" class="btn" value="Limpar" id="reset" name="Limpar" />              
            </div>
	    
	    
        <?php echo $this->Form->end();?>
        </div>
        </div>
    
    
    </div>    
    
</div>







