<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
 
 $cakeDescription = __d('cake_dev', "UAIShop : Compre aqui ");

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap');		
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('site');		
		echo $this->Html->css('flexslider');
						
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
		
	?>

	<!-- Mobile viewport optimisation -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- (en) Add your meta data here -->
	<!-- (de) Fuegen Sie hier ihre Meta-Daten ein -->
	
	
</head>
<body>
<header>
	<div class="container">

			<h1>Project Title</h1>

	</div>
</header>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="#">Project name</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
            <?php echo $this->element('menu'); ?>			    
        </ul>
        <form class="navbar-search pull-right">
		    <input class="search-query" type="search" placeholder="Pesquise aqui seu produto..." />
		    <input class="btn" type="submit" value="Pesquisar" />
	    </form>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>


<div id="main" class="container">
		
    <?php echo $this->Session->flash(); ?>

    <?php echo $this->fetch('content'); ?>

</div>
<footer>
	<div class="container">
    	<p>© Company 2013 &ndash; <a href="http://www.uailink.com.br">UAILink Marketing Digital</a></p>
	</div>
</footer>

<?php
        echo $this->Html->script('jquery-1.8.1.min');
		echo $this->Html->script('jquery.form');
		echo $this->Html->script('jquery.flexslider-min');
		echo $this->Html->script('jquery.meio.mask.min');
		echo $this->Html->script('bootstrap');
?>

<script type="text/javascript">
          // call setMask function on the document.ready event
          jQuery(function($) {
            $('input[type="text"]').setMask();
            $('input[type="number"]').setMask();   
          });
    </script>
    
        <!-- Cached scripts block -->

    <?php echo $this->Js->writeBuffer(array('cache'=>'true')); // Write cached scripts ?>
    
</body>

</html>
