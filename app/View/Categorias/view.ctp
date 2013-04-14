
<div class="ym-column">
  <div class="ym-col1" >
    <div class="categorias view ym-cbox">
      <h2><?php  echo __('Categoria');?></h2>
      <table>
	     <thead>
	        <tr>
	          <td width="20%">Campo</td>
	          <td width="80%">Descrição</td>
	        </tr>
	      </thead>
	      <tbody>
			<tr>			<td><?php echo __('Id'); ?></td>
			<td>
			<?php echo h($categoria['Categoria']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Descrição'); ?></td>
			<td>
			<?php echo h($categoria['Categoria']['descricao']); ?>
			&nbsp;
		</td>
		</tr>        </tbody>	
	</table>	
</div>




<!-- inicio -->
	
    <div class="related ym-cbox">
	<h3><?php echo __('Classes relacionados');?></h3>
	<?php if (!empty($categoria['Classe'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th><?php echo __('Caracteristica Id'); ?></th>
		<th><?php echo __('Descrição'); ?></th>
		<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
		foreach ($categoria['Classe'] as $classe): ?>
		<tr>
			<td><?php echo $classe['id'];?></td>
			<td><?php echo $classe['categoria_id'];?></td>
			<td><?php echo $classe['caracteristica_id'];?></td>
			<td><?php echo $classe['descricao'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'classes', 'action' => 'view', $classe['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'classes', 'action' => 'edit', $classe['id'])); ?>
				<?php echo $this->Form->postLink(__('Excluir'), array('controller' => 'classes', 'action' => 'delete', $classe['id']), null, __('Você tem certeza que deseja excluir o # %s?', $classe['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	
	<?php echo $this->Html->link(__('Novo Classe'), array('controller' => 'classes', 'action' => 'add'), array('class'=>'ym-button'));?> 
	
	<?php endif; ?>

	
	</div>
	
	

<!-- fim -->















</div>
<div class="ym-col3" >
    <div class="actions ym-cbox">    
      <h6><?php echo __('Ações'); ?></h6>
	  
		<?php echo $this->Html->link(__('Editar Categoria'), array('action' => 'edit', $categoria['Categoria']['id']), array('class'=>'ym-button')); ?> 
		<?php echo $this->Form->postLink(__('Excluir Categoria'), array('action' => 'delete', $categoria['Categoria']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $categoria['Categoria']['id'])); ?> 
		<?php echo $this->Html->link(__('Listar Categorias'), array('action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Categoria'), array('action' => 'add'), array('class'=>'ym-button')); ?> 
<?php echo __('<h6>Classes</h6>'); ?>		<?php echo $this->Html->link(__('Listar Classes'), array('controller' => 'classes', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Classe'), array('controller' => 'classes', 'action' => 'add'), array('class'=>'ym-button')); ?> 
   </div>
</div>
</div>








