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
		<p><?= $text_module ?></p>
		<p><?= $text_success ?></p>
		<hr>
		<div class="panel panel-info">
			<!-- Default panel contents -->
			<div class="panel-heading">Таблица oc_hello_world </div>
			<div class="panel-body">
				<p>Выводим все записи из таблицы oc_hello_world.</p>
			</div>

			<!-- Table -->
			<table class="table">
				<thead>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>FOTO</th>
					<th>LINK</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($hello_world as $hello): ?>
					<tr>
						<th><?= $hello['id'] ?></th>
						<td><?= $hello['name'] ?></td>
						<td><img src="<?= $hello['image'] ?>" alt="HTML5 Icon" width="128"></td>
						<td><a href="<?= $hello['link'] ?>">Перейти</a></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
				...
			</table>
		</div>

	</div>
</div>