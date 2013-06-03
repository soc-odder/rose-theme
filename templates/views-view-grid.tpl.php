<?php if (!empty($title)) : ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<div class="<?php print $class; ?> municipal"<?php print $attributes; ?>>

    <?php foreach ($rows as $row_number => $columns): ?>
      <div <?php if ($row_classes[$row_number]) { print 'class="' . $row_classes[$row_number] .' clearfix"';  } ?>>

        <?php foreach ($columns as $column_number => $item): ?>
          <div <?php if ($column_classes[$row_number][$column_number]) {
						$res = $column_number + $row_number;
						if ($res % 2 == 0)
						  print 'class="views-row mu1"';// . $column_classes[$row_number][$column_number] .'"';
						else
						  print 'class="views-row mu2"';
					} ?>>
            <?php   $myItem = str_replace('<h2 class="node-title">', '<h2 class="lauthsmall">', $item);
					$myItem = str_replace('<div class="field field-name-field-picture field-type-image field-label-hidden">', '<div class="field municipal_img field-type-image field-label-hidden">', $myItem);
					$myItem = str_replace('<div class="field field-name-field-teaser field-type-text-long field-label-hidden">', '<div class="field loremprog field-type-text-long field-label-hidden">', $myItem);
					$myItem = str_replace('<ul class="links inline">', '<ul>', $myItem);
					$myItem = str_replace('<nav class="links node-links clearfix">', '<nav class="links see_more clearfix">', $myItem);
					$myFinalItem = $myItem = str_replace('Read more', 'Læs mere', $myItem);
					print $myFinalItem; ?>
          </div>

        <?php endforeach; ?>
      </div>

    <?php endforeach; ?>
</div>