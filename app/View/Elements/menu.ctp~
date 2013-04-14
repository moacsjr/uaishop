<ul>
	<?php
	
	    $page = ($this->name != 'Pages')? $this->view : $this->getVar('page');
	    
	    $homelink =  $this->Html->link('Home', $this->SiteURL->home(),array('escape' => false));
	    $sobrelink = $this->Html->link('Quem Somos?', $this->SiteURL->sobre(),array('escape' => false));
	    $pesquisarlink = $this->Html->link('Imóveis', $this->SiteURL->pesquisarImoveis(),array('escape' => false));
	    $contatolink = $this->Html->link('Contato', $this->SiteURL->contato(),array('escape' => false));
	    
	 ?>
	
	<li <?php if($page == 'home') echo 'class="active"' ?> > <?php echo $homelink ?> </li>	
	
</ul>
