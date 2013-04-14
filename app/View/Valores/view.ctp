
<div class="ym-column">
  <div class="ym-col1" >
    <div class="valores view ym-cbox">
      <h2><?php  echo __('Valor');?></h2>
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
			<?php echo h($valor['Valor']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Caracteristica'); ?></td>
			<td>
			<?php echo $this->Html->link($valor['Caracteristica']['descricao'], array('controller' => 'caracteristicas', 'action' => 'view', $valor['Caracteristica']['id'])); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Descrição'); ?></td>
			<td>
			<?php echo h($valor['Valor']['descricao']); ?>
			&nbsp;
		</td>
		</tr>        </tbody>	
	</table>	
</div>




<!-- inicio -->
<!-- fim -->















</div>
<div class="ym-col3" >
    <div class="actions ym-cbox">    
      <h6><?php echo __('Ações'); ?></h6>
	  
		<?php echo $this->Html->link(__('Editar Valor'), array('action' => 'edit', $valor['Valor']['id']), array('class'=>'ym-button')); ?> 
		<?php echo $this->Form->postLink(__('Excluir Valor'), array('action' => 'delete', $valor['Valor']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $valor['Valor']['id'])); ?> 
		<?php echo $this->Html->link(__('Listar Valores'), array('action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Valor'), array('action' => 'add'), array('class'=>'ym-button')); ?> 
<?php echo __('<h6>Caracteristicas</h6>'); ?>		<?php echo $this->Html->link(__('Listar Caracteristicas'), array('controller' => 'caracteristicas', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Caracteristica'), array('controller' => 'caracteristicas', 'action' => 'add'), array('class'=>'ym-button')); ?> 
   </div>
</div>
</div>








