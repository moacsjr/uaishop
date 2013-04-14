
<div class="ym-column">
  <div class="ym-col1" >
    <div class="pessoasDocumentos view ym-cbox">
      <h2><?php  echo __('Pessoas Documento');?></h2>
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
			<?php echo h($pessoasDocumento['PessoasDocumento']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Numero'); ?></td>
			<td>
			<?php echo h($pessoasDocumento['PessoasDocumento']['numero']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Tipo Documento'); ?></td>
			<td>
			<?php echo $this->Html->link($pessoasDocumento['TipoDocumento']['id'], array('controller' => 'tipo_documentos', 'action' => 'view', $pessoasDocumento['TipoDocumento']['id'])); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Pessoa'); ?></td>
			<td>
			<?php echo $this->Html->link($pessoasDocumento['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $pessoasDocumento['Pessoa']['id'])); ?>
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
	  
		<?php echo $this->Html->link(__('Editar Pessoas Documento'), array('action' => 'edit', $pessoasDocumento['PessoasDocumento']['id']), array('class'=>'ym-button')); ?> 
		<?php echo $this->Form->postLink(__('Excluir Pessoas Documento'), array('action' => 'delete', $pessoasDocumento['PessoasDocumento']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $pessoasDocumento['PessoasDocumento']['id'])); ?> 
		<?php echo $this->Html->link(__('Listar Pessoas Documentos'), array('action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Pessoas Documento'), array('action' => 'add'), array('class'=>'ym-button')); ?> 
<?php echo __('<h6>Tipo Documentos</h6>'); ?>		<?php echo $this->Html->link(__('Listar Tipo Documentos'), array('controller' => 'tipo_documentos', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Tipo Documento'), array('controller' => 'tipo_documentos', 'action' => 'add'), array('class'=>'ym-button')); ?> 
<?php echo __('<h6>Pessoas</h6>'); ?>		<?php echo $this->Html->link(__('Listar Pessoas'), array('controller' => 'pessoas', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Pessoa'), array('controller' => 'pessoas', 'action' => 'add'), array('class'=>'ym-button')); ?> 
   </div>
</div>
</div>








