<?php
$copy_id = $params['id'];

$copy_options = [];
$copy_options['btn_type'] = '';
$copy_options['copy_id'] = '';

$get_copy_options = get_module_options($params['id']);
if (!empty($get_copy_options)) {
  foreach ($get_copy_options as $get_copy_option) {
    $copy_options[$get_copy_option['option_key']] = $get_copy_option['option_value'];
  }
}

$type = $copy_options['btn_type'];

if (isset($params['copy_id'])) {
  $copy_id = $params['copy_id'];
}

$attributes = '';
if (isset($params['copy_onclick'])) {
  $attributes .= 'onclick="' . $params['copy_onclick'] . '"';
}

if ($type == false and isset($params['btn_type'])) {
  $type = $params['btn_type'];
}
if ($type == '') {
  $type = 'btn-primary';
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
