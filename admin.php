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
      $icon = get_module_option('icon', $params['id']);
    ?>

    <style>
      #editor_holder {
        display: none;
      }

      .mw-iframe-editor {
        width: 100%;
        height: 300px;
      }

      #icon-picker i {
        margin-inline-start: -10px;
        margin-inline-end: 8px;
      }
    </style>

    <script>
      mw.require('icon_selector.js');
      mw.require('wysiwyg.css');
    </script>

    <div class="module-live-edit-settings module-alert-settings">
      <div class="text-start">
        <label class="control-label d-block"><?php _e("Alert Icon"); ?></label>
        <div class="form-group">
          <span class="btn btn-primary">
            <script>
                $(document).ready(function () {
                  mw.iconLoader().init();
                  var picker = mw.iconPicker({iconOptions: false});
                  picker.target = document.createElement('i');
                  picker.on('select', function (data) {
                    data.render();
                    $('[name="icon"]').val(picker.target.outerHTML).trigger('change')
                    document.querySelector('#icon-picker').innerHTML = (picker.target.outerHTML)
                    picker.dialog('hide');
                  });
                  document.querySelector('#icon-picker').parentNode.onclick = function (){
                    picker.dialog();
                  }

                })
                var removeIcon = function () {
                  $('[name="icon"]').val('').trigger('change')
                  document.querySelector('#icon-picker').innerHTML = '';
                }
            </script>
                <span id="icon-picker"><?php print $icon ? $icon : ''; ; ?></span> <?php _e("Select Icon"); ?></span>
          </span>
          <button class="btn btn-outline-danger" onclick="removeIcon()"><?php _e("Remove icon"); ?></button>

        </div>
        <textarea name="icon" class="mw_option_field" style="display: none"><?php print $icon; ?></textarea>

        <module type="admin/modules/templates" simple="true" />
      </div>
    </div>
  </div>
</div>