<?php
  $style = get_option('alert_style', $params['id']);
  $icon = get_option('icon', $params['id']);
?>

<div class="row">
  <div class="col">
    <div class="form-group">
      <label class="control-label d-block"><?php _e("Alert Type"); ?></label>
      <select class="mw_option_field selectpicker" data-width="100%" name="alert_style">
        <option <?php if ($style == 'alert-light') : ?>selected<?php endif; ?> value=""><?php _e("Default"); ?></option>
        <option <?php if ($style == 'alert-info') : ?>selected<?php endif; ?> value="alert-info"><?php _e("Info"); ?></option>
        <option <?php if ($style == 'alert-success') : ?>selected<?php endif; ?> value="alert-success"><?php _e("Success"); ?></option>
        <option <?php if ($style == 'alert-warning') : ?>selected<?php endif; ?> value="alert-warning"><?php _e("Warning"); ?></option>
        <option <?php if ($style == 'alert-danger') : ?>selected<?php endif; ?> value="alert-danger"><?php _e("Error"); ?></option>
      </select>
    </div>
  </div>
</div>