<div class="container">
    <div class="span4" >
        <div class="valores index">
	        <h2><?php echo __('Valores');?></h2>
	        <table cellpadding="0" cellspacing="0">
	        <tr>
	        		        <th><?php echo $this->Paginator->sort('id');?></th>
	        		        <th><?php echo $this->Paginator->sort('caracteristica_id');?></th>
	        		        <th><?php echo $this->Paginator->sort('descricao');?></th>
	        		        <th class="actions"><?php echo __('Ações');?></th>
	        </tr>
	        <?php foreach ($valores as $valor): ?>
	<tr>
		<td><?php echo h($valor['Valor']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($valor['Caracteristica']['descricao'], array('controller' => 'caracteristicas', 'action' => 'view', $valor['Caracteristica']['id'])); ?>
		</td>
		<td><?php echo h($valor['Valor']['descricao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $valor['Valor']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $valor['Valor']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $valor['Valor']['id']), null, __('Você tem certeza que deseja excluir o # %s?', $valor['Valor']['id'])); ?>
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
    <div class="span8">
        <div class="actions">
	        <h3><?php echo __('Ações'); ?></h3>
	        
		        <?php echo $this->Html->link(__('Novo Valor'), array('action' => 'add'), array('class'=>'btn')); ?>        		<?php echo $this->Html->link(__('Listar Caracteristicas'), array('controller' => 'caracteristicas', 'action' => 'index'), array('class'=>'btn')); ?> 
		<?php echo $this->Html->link(__('Novo Caracteristica'), array('controller' => 'caracteristicas', 'action' => 'add'), array('class'=>'btn')); ?> 
	        </ul>
        </div>
    </div>
</div>
