<?php

/*

type: layout

name: Default

description: Default

*/
?>

<div id="<?php print $alert_id ?>" class="alert <?php print $style; ?>" role="alert">
  <?php print $icon; ?>
  <div class="edit" data-field="alert_text" rel="alert_module" data-id="<?php print $params['id'] ?>" <?php print $attributes ?>>
    <p class="element">
      <?php _e('Click here to edit the alert message. You can change the alert color by changing the alert type in the module settings.');?>
    </p>
  </div>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close alert"></button>
</div>