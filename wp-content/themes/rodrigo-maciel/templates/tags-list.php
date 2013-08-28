<?php $tags = get_tags(); if ($tags): ?>
	<!-- tags -->
	<ul class="clear">
		<li class="tags-list">
			TAGS
			<ul class="clear">
				<?php foreach ($tags as $key => $value): ?>
					<li><a href="#"><?php echo $value->name; ?></a></li>
				<?php endforeach ?>
			</ul>
		</li>
	</ul>
	<!-- /tags -->
<?php endif ?>