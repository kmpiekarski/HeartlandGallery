<!-- node--program.tpl.php -->

  <div class="content clearfix"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      print render($content);
    ?>
  </div>
