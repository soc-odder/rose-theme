<?php if (current_path() === 'node') { ?>
<div class="search_pos">
	<div class="contact">
		<a href="#">KONTAKT</a>
		<a href="#">TILMELD NY HEDSBREV</a>
	</div>

	<div class="search">
		<span><input type="text" class="search" maxlength="128" width="30" size="15" value="" name="search_block_form" title="Enter the terms you wish to search for."></span>
		<a><input type="submit" class="search" value="SØG" name="op" id="edit-submit"></a>
		<?php print $search['hidden'] ?>
		<div class="clear"></div>
	</div>
</div>
<?php }
	  else { ?>
<div class="search_pos">
	<div class="contact">
		<a href="#">KONTAKT</a>
		<a href="#">TILMELD NY HEDSBREV</a>
	</div>

	<div class="search">
		<span><input type="text" class="search" maxlength="128" width="30" size="15" value="" name="search_block_form" title="Enter the terms you wish to search for."></span>
		<a><input type="submit" class="search" value="SØG" name="op" id="edit-submit"></a>
		<?php print $search['hidden'] ?>
		<div class="clear"></div>
	</div>
</div>
	<?php } ?>