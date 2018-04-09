<div class="box">
	<div class="box-heading">
		<h2>
			<?php echo $heading_title; ?>
		</h2>
	</div>
	<div class="box-content">
		<h3>Hello world view</h3>
		<!--
			TODO: Реализовать код представления
		-->
		<p>код модуля</p>
		<p><?= $text_module?></p>
		<p><?= $text_success?></p>
		<hr>
		<p>
			<?php
				var_dump($temp);
			?>
		</p>
		<hr>
		<p>
			<?php
				var_dump($temp_info);
			?>
		</p>
		<hr>
		<p>
			<?php
				var_dump($hello_world);
			?>
		</p>
<hr>
		<p>
			<?php
				var_dump($hello_world_new);
			?>
		</p>

	</div>
</div>