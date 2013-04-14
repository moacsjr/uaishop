
<div class="row">

<div class="span4" >
    <div class="actions well">    
    <ul class="nav nav-list">
      <li class='nav-header'><?php echo __('Ações'); ?></li>
	  
		<li><?php echo $this->Html->link(__('Editar Produto'), array('action' => 'edit', $produto['Produto']['id']), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Form->postLink(__('Excluir Produto'), array('action' => 'delete', $produto['Produto']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $produto['Produto']['id'])); ?></li> 
		<li><?php echo $this->Html->link(__('Listar Produtos'), array('action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Produto'), array('action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Classes'); ?></li>		<li><?php echo $this->Html->link(__('Listar Classes'), array('controller' => 'classes', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Classe'), array('controller' => 'classes', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Marcas'); ?></li>		<li><?php echo $this->Html->link(__('Listar Marcas'), array('controller' => 'marcas', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Marca'), array('controller' => 'marcas', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
</ul>
   </div>
</div>



  <div class="span8" >
    <div class="produtos view ym-cbox">
      <h2><?php  echo __('Produto');?></h2>
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
			<?php echo h($produto['Produto']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Classe'); ?></td>
			<td>
			<?php echo $this->Html->link($produto['Classe']['caracteristica_id'], array('controller' => 'classes', 'action' => 'view', $produto['Classe']['id'])); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Marca'); ?></td>
			<td>
			<?php echo $this->Html->link($produto['Marca']['descricao'], array('controller' => 'marcas', 'action' => 'view', $produto['Marca']['id'])); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Nome'); ?></td>
			<td>
			<?php echo h($produto['Produto']['nome']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Descrição'); ?></td>
			<td>
			<?php echo h($produto['Produto']['descricao']); ?>
			&nbsp;
		</td>
		</tr>        </tbody>	
	</table>	
</div>




<!-- inicio -->
<!-- fim -->















</div>

</div>








