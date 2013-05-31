<div<?php print $attributes; ?>>

  <?php if (isset($page['header'])) : ?>
    <?php print render($page['header']); ?>
  <?php endif; ?>

  <?php /*kpr($page);*/
		$myContent = $page['content']['content']['content']['system_main']['nodes'];/*$page['content']['content']['content']['system_main']['nodes'][$arrayKeys[0]]['field_my_focus']['#object']*/
		$arrayKeys = array_keys($myContent); ?>
  <?php if (isset($page['content'])) : ?>
    <?php print render($page['content']); ?>
  <?php endif; ?>  
  
  <?php if (isset($page['footer'])) : ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>
</div>