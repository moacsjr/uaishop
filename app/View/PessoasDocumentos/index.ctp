<div class="ym-column">
    <div class="ym-col1" >
        <div class="pessoasDocumentos index ym-cbox">
	        <h2><?php echo __('Pessoas Documentos');?></h2>
	        <table cellpadding="0" cellspacing="0">
	        <tr>
	        		        <th><?php echo $this->Paginator->sort('id');?></th>
	        		        <th><?php echo $this->Paginator->sort('numero');?></th>
	        		        <th><?php echo $this->Paginator->sort('tipo_documento_id');?></th>
	        		        <th><?php echo $this->Paginator->sort('pessoa_id');?></th>
	        		        <th class="actions"><?php echo __('Ações');?></th>
	        </tr>
	        <?php foreach ($pessoasDocumentos as $pessoasDocumento): ?>
	<tr>
		<td><?php echo h($pessoasDocumento['PessoasDocumento']['id']); ?>&nbsp;</td>
		<td><?php echo h($pessoasDocumento['PessoasDocumento']['numero']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pessoasDocumento['TipoDocumento']['id'], array('controller' => 'tipo_documentos', 'action' => 'view', $pessoasDocumento['TipoDocumento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pessoasDocumento['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $pessoasDocumento['Pessoa']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $pessoasDocumento['PessoasDocumento']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $pessoasDocumento['PessoasDocumento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $pessoasDocumento['PessoasDocumento']['id']), null, __('Você tem certeza que deseja excluir o # %s?', $pessoasDocumento['PessoasDocumento']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	        </table>
	        <p>
	        <?php
	        echo $this->Paginator->counter(array(
	        'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count}, começando no registro {:start}, e terminando no {:end}')
	        ));
	        ?>	        </p>

	        <div class="paging">
	        <?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('próxima') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	        </div>
        </div>
    </div>
    <div class="ym-col3">
        <div class="actions ym-cbox">
	        <h3><?php echo __('Ações'); ?></h3>
	        
		        <?php echo $this->Html->link(__('Novo Pessoas Documento'), array('action' => 'add'), array('class'=>'ym-button')); ?>        		<?php echo $this->Html->link(__('Listar Tipo Documentos'), array('controller' => 'tipo_documentos', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Tipo Documento'), array('controller' => 'tipo_documentos', 'action' => 'add'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Listar Pessoas'), array('controller' => 'pessoas', 'action' => 'index'), array('class'=>'ym-button')); ?> 
		<?php echo $this->Html->link(__('Novo Pessoa'), array('controller' => 'pessoas', 'action' => 'add'), array('class'=>'ym-button')); ?> 
	        </ul>
        </div>
    </div>
</div>
