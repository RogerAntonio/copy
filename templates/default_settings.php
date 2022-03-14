<?php
$style = get_option('btn_type', $params['id']);
?>

<div class="row">
  <div class="col">
    <div class="form-group">
      <label class="control-label d-block"><?php _e("Button Type"); ?></label>
      <select class="mw_option_field selectpicker" data-width="100%" name="btn_type">
        <option <?php if ($style == 'btn-primary') : ?>selected<?php endif; ?> value=""><?php _e("Primary"); ?></option>
        <option <?php if ($style == 'btn-secondary') : ?>selected<?php endif; ?> value="btn-secondary"><?php _e("Secondary"); ?></option>
      </select>
    </div>
  </div>
</div>