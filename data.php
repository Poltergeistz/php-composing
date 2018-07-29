<div class="ui card">

	<div class="image">
		<img src=<?php echo $f[$i][5]; ?>>
	</div>

	<div class="content">

		<a href='<?php echo $f[$i][4];?>' class="header"><?php echo $f[$i][0]; ?></a>

		<div class="meta">
			<span class="date"><?php echo $f[$i][2]; ?></span>
		</div>

		<div class="description">
			<?php echo $f[$i][3]; ?>
		</div>

	</div>

	<div class="extra content">
		<span class="right floated">Born in <?php echo $f[$i][1]; ?></span>
	</div>

</div>
