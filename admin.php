<?php must_have_access(); ?>

<?php
$from_live_edit = false;
if (isset($params["live_edit"]) and $params["live_edit"]) {
  $from_live_edit = $params["live_edit"];
}
?>

<?php if (isset($params['backend'])) : ?>
  <module type="admin/modules/info" />
<?php endif; ?>

<div class="card style-1 mb-3 <?php if ($from_live_edit) : ?>card-in-live-edit<?php endif; ?>">
  <div class="card-header">
    <module type="admin/modules/info_module_title" for-module="<?php print $params['module'] ?>" />
  </div>

  <div class="card-body pt-3">
    <?php
    $style = get_module_option('alert_style', $params['id']);
    ?>

    <style>
      #editor_holder {
        display: none;
      }

      .mw-iframe-editor {
        width: 100%;
        height: 300px;
      }
    </style>

    <div class="module-live-edit-settings module-alert-settings">
      <div class="text-start">
        <module type="admin/modules/templates" simple="true" />
      </div>
    </div>
  </div>
</div>