<div class="reservation edit">
	<?php echo $this->Form->create('Reservation'); ?>
	<fieldset>
		<legend style="text-align: center"><?php echo __('Edycja Reservation'); ?></legend>
		<?php
		echo $this->Form->input('id',array('hidden' => 'true'));
		echo $this->Form->date('reservation_date');
		echo $this->Form->input('users_id',array('label' => 'User','type'=>'number'));
		echo $this->Form->input('services_id',array('label' => 'usługa','type'=>'number'));
		?>
	</fieldset>
<?php echo $this->Form->end(__('Zapisz zmiany')); ?>
</div>
