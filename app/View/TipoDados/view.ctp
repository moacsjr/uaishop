
<div class="row">

<div class="span4" >
    <div class="actions well">    
    <ul class="nav nav-list">
      <li class='nav-header'><?php echo __('Ações'); ?></li>
	  
		<li><?php echo $this->Html->link(__('Editar Tipo Dado'), array('action' => 'edit', $tipoDado['TipoDado']['id']), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Form->postLink(__('Excluir Tipo Dado'), array('action' => 'delete', $tipoDado['TipoDado']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $tipoDado['TipoDado']['id'])); ?></li> 
		<li><?php echo $this->Html->link(__('Listar Tipo Dados'), array('action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Tipo Dado'), array('action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Caracteristicas'); ?></li>		<li><?php echo $this->Html->link(__('Listar Caracteristicas'), array('controller' => 'caracteristicas', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Caracteristica'), array('controller' => 'caracteristicas', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
</ul>
   </div>
</div>



  <div class="span8" >
    <div class="tipoDados view ym-cbox">
      <h2><?php  echo __('Tipo Dado');?></h2>
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
			<?php echo h($tipoDado['TipoDado']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Descrição'); ?></td>
			<td>
			<?php echo h($tipoDado['TipoDado']['descricao']); ?>
			&nbsp;
		</td>
		</tr>        </tbody>	
	</table>	
</div>




<!-- inicio -->
	
    <div class="related ym-cbox">
	<h3><?php echo __('Caracteristicas relacionados');?></h3>
	<?php if (!empty($tipoDado['Caracteristica'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tipo Dado Id'); ?></th>
		<th><?php echo __('Descrição'); ?></th>
		<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
		foreach ($tipoDado['Caracteristica'] as $caracteristica): ?>
		<tr>
			<td><?php echo $caracteristica['id'];?></td>
			<td><?php echo $caracteristica['tipo_dado_id'];?></td>
			<td><?php echo $caracteristica['descricao'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'caracteristicas', 'action' => 'view', $caracteristica['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'caracteristicas', 'action' => 'edit', $caracteristica['id'])); ?>
				<?php echo $this->Form->postLink(__('Excluir'), array('controller' => 'caracteristicas', 'action' => 'delete', $caracteristica['id']), null, __('Você tem certeza que deseja excluir o # %s?', $caracteristica['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	
	<?php echo $this->Html->link(__('Novo Caracteristica'), array('controller' => 'caracteristicas', 'action' => 'add'), array('class'=>'ym-button'));?> 
	
	<?php endif; ?>

	
	</div>
	
	

<!-- fim -->















</div>

</div>








