<link rel="stylesheet" href="<?php print $config['url_to_module']; ?>alert.css" />
<script>
  mw.lib.require('bootstrap5js');
</script>
<?php
$alert_id = 'alert-' . $params['id'];

$alert_options = [];
$alert_options['alert_style'] = '';
$alert_options['icon'] = '';
$alert_options['alert_id'] = '';

$get_alert_options = get_module_options($params['id']);
if (!empty($get_alert_options)) {
  foreach ($get_alert_options as $get_alert_option) {
    $alert_options[$get_alert_option['option_key']] = $get_alert_option['option_value'];
  }
}

$style = $alert_options['alert_style'];

if ($alert_options['icon']) {
  $icon = $alert_options['icon'];
} elseif (isset($params['icon'])) {
  $icon = $params['icon'];
} else {
  $icon = '';
}

$icon = html_entity_decode($icon);

if (isset($params['alert_id'])) {
  $alert_id = $params['alert_id'];
}

$attributes = '';
if (isset($params['alert_onclick'])) {
  $attributes .= 'onclick="' . $params['alert_onclick'] . '"';
}

if ($style == false and isset($params['alert_style'])) {
  $style = $params['alert_style'];
}
if ($style == '') {
  $style = 'alert-light';
}

$module_template = get_option('data-template', $params['id']);
if ($module_template == false and isset($params['template'])) {
  $module_template = $params['template'];
}
if ($module_template != false) {
  $template_file = module_templates($config['module'], $module_template);
} else {
  $template_file = module_templates($config['module'], 'default');
}

if (is_file($template_file) != false) {
  include($template_file);
} else {
  print lnotif("No template found. Please choose a template.");
}
?>