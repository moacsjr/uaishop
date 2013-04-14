
<div class="row">

<div class="span4" >
    <div class="actions well">    
    <ul class="nav nav-list">
      <li class='nav-header'><?php echo __('Ações'); ?></li>
	  
		<li><?php echo $this->Html->link(__('Editar Classe'), array('action' => 'edit', $classe['Classe']['id']), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Form->postLink(__('Excluir Classe'), array('action' => 'delete', $classe['Classe']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $classe['Classe']['id'])); ?></li> 
		<li><?php echo $this->Html->link(__('Listar Classes'), array('action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Classe'), array('action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Categorias'); ?></li>		<li><?php echo $this->Html->link(__('Listar Categorias'), array('controller' => 'categorias', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Categoria'), array('controller' => 'categorias', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Caracteristicas'); ?></li>		<li><?php echo $this->Html->link(__('Listar Caracteristicas'), array('controller' => 'caracteristicas', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Caracteristica'), array('controller' => 'caracteristicas', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Produtos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Produtos'), array('controller' => 'produtos', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Produto'), array('controller' => 'produtos', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
</ul>
   </div>
</div>



  <div class="span8" >
    <div class="classes view ym-cbox">
      <h2><?php  echo __('Classe');?></h2>
      <table class="table">
	     <thead>
	        <tr>
	          <td width="20%">Campo</td>
	          <td width="80%">Descrição</td>
	        </tr>
	      </thead>
	      <tbody>
			<tr>			<td><?php echo __('Id'); ?></td>
			<td>
			<?php echo h($classe['Classe']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Categoria'); ?></td>
			<td>
			<?php echo $this->Html->link($classe['Categoria']['descricao'], array('controller' => 'categorias', 'action' => 'view', $classe['Categoria']['id'])); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Caracteristica'); ?></td>
			<td>
			<?php echo $this->Html->link($classe['Caracteristica']['descricao'], array('controller' => 'caracteristicas', 'action' => 'view', $classe['Caracteristica']['id'])); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Descrição'); ?></td>
			<td>
			<?php echo h($classe['Classe']['descricao']); ?>
			&nbsp;
		</td>
		</tr>        </tbody>	
	</table>	
</div>




<!-- inicio -->
	
    <div class="related ym-cbox">
	<h3><?php echo __('Produtos relacionados');?></h3>
	<?php if (!empty($classe['Produto'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Classe Id'); ?></th>
		<th><?php echo __('Marca Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Descrição'); ?></th>
		<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
		foreach ($classe['Produto'] as $produto): ?>
		<tr>
			<td><?php echo $produto['id'];?></td>
			<td><?php echo $produto['classe_id'];?></td>
			<td><?php echo $produto['marca_id'];?></td>
			<td><?php echo $produto['nome'];?></td>
			<td><?php echo $produto['descricao'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'produtos', 'action' => 'view', $produto['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'produtos', 'action' => 'edit', $produto['id'])); ?>
				<?php echo $this->Form->postLink(__('Excluir'), array('controller' => 'produtos', 'action' => 'delete', $produto['id']), null, __('Você tem certeza que deseja excluir o # %s?', $produto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	
	<?php echo $this->Html->link(__('Novo Produto'), array('controller' => 'produtos', 'action' => 'add'), array('class'=>'ym-button'));?> 
	
	<?php endif; ?>

	
	</div>
	
	

<!-- fim -->















</div>

</div>








