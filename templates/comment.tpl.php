<article<?php print $attributes; ?>>
  <header>
    <?php if (isset($unpublished)): ?>
      <em class="unpublished"><?php print $unpublished; ?></em>
    <?php endif; ?>
  </header>

  <?php print $picture; ?>

  <footer class="comment-submitted">
   <?php
      print $submitted;
    ?>
  </footer>

  <div<?php print $content_attributes; ?>>
    <?php
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <?php if ($signature): ?>
    <div class="user-signature"><?php print $signature ?></div>
  <?php endif; ?>

</article>
