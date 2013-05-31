<div class="vertaligntop">
<table class="tableadjust">
  <?php if (!empty($title)) : ?>
    <caption><?php print $title; ?></caption>
  <?php endif; ?>
  <thead>
    <tr>
      <?php foreach ($header as $field => $label): ?>
        <th class="views-field views-field-<?php print $fields[$field]; ?>">
          <?php print $label; ?>
        </th>
      <?php endforeach; ?>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rows as $count => $row): ?>
      <tr class="<?php print implode(' ', $row_classes[$count]); ?>">
        <?php foreach ($row as $field => $content): ?>
			<?php if ($fields[$field] == 'body')
					echo '<td class="views-field members_info">';
				  else if (strpos($fields[$field], 'date') != FALSE) {
					echo '<td class="views-field tablecol1">';
					$content = str_replace(' 00:00:00', '', $content);
				  }
				  else if (strpos($fields[$field], 'title') != FALSE) {
					echo '<td class="views-field ole_title ole_info">';
				  }
				  else if (strpos($fields[$field], 'kandidat') != FALSE) {
					echo '<td class="views-field views-field-'.$fields[$field].' slidephoto_img2">';
					$content = str_replace(',', '', $content);
					$content = str_replace('<img ', '<img style="padding-bottom: 20px;" ', $content);
				  }
				  else
					echo '<td class="views-field views-field-'.$fields[$field].'">'; ?>
				<?php print $content; ?>
			</td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>