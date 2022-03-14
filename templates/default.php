<?php

/*

type: layout

name: Default

description: Default

*/
?>
<script>
  mw.require("<?php print $config['url_to_module']; ?>copy.css", true);
  mw.require("<?php print $config['url_to_module']; ?>copy.js", true);
</script>
<div id="<?php print $copy_id; ?>" class="copy-module copy-to-clipboard" role="note">
  <div class="edit safe-mode nodrop" data-field="copy_text" rel="copy_module" data-id="<?php print $copy_id; ?>" <?php print $attributes; ?>>
    <small class="element">
      <?php _e('Change this to anything you wish to have copied.'); ?>
    </small>
  </div>
  <button class="btn <?php print $type; ?> btn-sm" onclick="CopyToClipboard('<?php print $copy_id; ?>')" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php _e('Click to copy'); ?>">
    <?php _e('Copy'); ?>
  </button>
</div>