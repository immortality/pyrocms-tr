<ol>
	<li class="even">
		<label>Adres</label>
		<?php echo form_input('address', $options['address']); ?>
	</li>
	<li class="odd">
		<label>Genişlik</label>
		<?php echo form_input('width', ($options['width'] != '' ? $options['width'] : '100%')); ?>
	</li>
	<li class="even">
		<label>Yükseklik</label>
		<?php echo form_input('height', ($options['height'] != '' ? $options['height'] : '400px')); ?>
	</li>
	<li class="odd">
		<label>Yakınlaştırma</label>
		<?php echo form_input('zoom', ($options['zoom'] != '' ? $options['zoom'] : '16')); ?>
	</li>
	<li class="even">
		<label>Açıklama(opsiyonel)</label>
		<?php echo form_textarea('description', $options['description']); ?>
	</li>
</ol>