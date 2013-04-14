<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Favor informar o usuário e senha'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('nome');
        echo $this->Form->input('email');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
