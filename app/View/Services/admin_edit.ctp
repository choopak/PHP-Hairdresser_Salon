<div class="container">
	<?php echo $this->Form->create('Service'); ?>
	<fieldset>
		<legend style="text-align: center"><?php echo __('Edycja Usługi'); ?></legend>
		<?php
				echo $this->Form->input('salons_id'); // usunięcie type number
				echo $this->Form->input('service_name',array('label' => 'Nazwa usługi'));
        		echo $this->Form->input('service_time',array('label' => 'Czas trwania usługi(min)'));
        		echo $this->Form->input('price',array('label' => 'Cena'));
		?>
	</fieldset>
<?php echo $this->Form->end(__('Zapisz zmiany')); ?>
</div>


