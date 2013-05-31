<?php if (!empty($title)) : ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<div class="<?php print $class; ?>"<?php print $attributes; ?>>

    <?php foreach ($rows as $row_number => $columns): ?>
      <div <?php if ($row_classes[$row_number]) { print 'class="' . $row_classes[$row_number] .' clearfix"';  } ?>>

        <?php foreach ($columns as $column_number => $item): ?>
          <div <?php if ($column_classes[$row_number][$column_number]) { print 'class="views-row ' . $column_classes[$row_number][$column_number] .'"';  } ?>>
            <?php print $item; ?>
			<?php	$offset = strpos($item, 'lauthsmall">');
					$toShow = substr($item, $offset + 12, 100);
					$toShowFinal = explode('<' ,$toShow);
					$myLink = str_replace(' ', '-', $toShowFinal[0]);
					echo "<div class='see_more'><a href='".$GLOBALS['base_path']."politik/".$myLink."'>Læs mere</a></div>";?>
          </div>

        <?php endforeach; ?>
      </div>

    <?php endforeach; ?>
</div>