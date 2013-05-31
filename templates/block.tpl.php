<?php $tag = $block->subject ? 'section' : 'div'; ?>
<<?php print $tag; ?><?php print $attributes; ?>>
  <div class="block-inner clearfix">
    <?php print render($title_prefix); ?>
    <?php if ($block->subject): ?>
	<?php
		if (($block->subject === 'KALENDER') OR ($block->subject === 'SPØRGEHJØNET'))
		{
			echo '<h2 class="caption">';
			print $block->subject;
			echo '</h2>';
		}
		else
		{ ?>
		<h2<?php print $title_attributes; ?>><?php print $block->subject; ?></h2>
	<?php } ?>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    
    <div<?php print $content_attributes; ?>>
      <?php print $content ?>
    </div>
  </div>
</<?php print $tag; ?>>