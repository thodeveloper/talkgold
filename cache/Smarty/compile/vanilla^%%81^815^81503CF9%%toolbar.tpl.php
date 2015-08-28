<?php /* Smarty version 2.6.25, created on 2015-08-28 09:33:44
         compiled from D:%5Ctho.nguyen%5Ctalkgold/plugins/Wysihtml5/views/toolbar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'D:\\tho.nguyen\\talkgold/plugins/Wysihtml5/views/toolbar.tpl', 4, false),)), $this); ?>
<div class="editor-toolbar js-editor-toolbar" style="display: none;">

  <a data-wysihtml5-command="bold" class="Button" title="CTRL+B">
    <span><?php echo smarty_function_t(array('c' => 'Bold'), $this);?>
</span> <i class="icon icon-bold"></i>
  </a>
  <a data-wysihtml5-command="italic" class="Button" title="CTRL+I">
    <span><?php echo smarty_function_t(array('c' => 'Italic'), $this);?>
</span> <i class="icon icon-italic"></i>
  </a>
  <a data-wysihtml5-command="underline" class="Button">
    <span><?php echo smarty_function_t(array('c' => 'Underline'), $this);?>
</span> <i class="icon icon-underline"></i>
  </a>
  <a data-wysihtml5-command="justifyLeft" class="Button">
    <span><?php echo smarty_function_t(array('c' => 'Left'), $this);?>
</span> <i class="icon icon-align-left"></i>
  </a>
  <a data-wysihtml5-command="justifyCenter" class="Button">
    <span><?php echo smarty_function_t(array('c' => 'Center'), $this);?>
</span> <i class="icon icon-align-center"></i>
  </a>
  <a data-wysihtml5-command="justifyRight" class="Button">
    <span><?php echo smarty_function_t(array('c' => 'Right'), $this);?>
</span> <i class="icon icon-align-right"></i>
  </a>
  <a data-wysihtml5-command="insertUnorderedList" class="Button">
    <span><?php echo smarty_function_t(array('c' => 'Bulleted List'), $this);?>
</span> <i class="icon icon-list-ul"></i>
  </a>
  <a data-wysihtml5-command="insertOrderedList" class="Button">
    <span><?php echo smarty_function_t(array('c' => 'Numbered List'), $this);?>
</span> <i class="icon icon-list-ol"></i>
  </a>
  <a data-wysihtml5-command="createLink" class="Button">
    <span><?php echo smarty_function_t(array('c' => 'Link'), $this);?>
</span> <i class="icon icon-link"></i>
  </a>
  <a data-wysihtml5-command="insertImage" class="Button">
    <span><?php echo smarty_function_t(array('c' => 'Image'), $this);?>
</span> <i class="icon icon-picture"></i>
  </a>
  <a data-wysihtml5-action="change_view" class="Button">
    <span><?php echo smarty_function_t(array('c' => 'Source'), $this);?>
</span> <i class="icon icon-source"></i>
  </a>

  <div data-wysihtml5-dialog="createLink" class="createLink" style="display: none;">
    <label>
      <?php echo smarty_function_t(array('c' => 'Link'), $this);?>

      <input data-wysihtml5-dialog-field="href" value="http://" type="text" class="InputBox">
    </label>
    <a data-wysihtml5-dialog-action="save" class="Button"><?php echo smarty_function_t(array('c' => 'OK'), $this);?>
</a>
    <a data-wysihtml5-dialog-action="cancel" class="Button"><?php echo smarty_function_t(array('c' => 'Cancel'), $this);?>
</a>
  </div>

  <div data-wysihtml5-dialog="insertImage" class="insertImage" style="display: none;">
    <label>
      <?php echo smarty_function_t(array('c' => 'Image'), $this);?>
:
      <input data-wysihtml5-dialog-field="src" value="http://" type="text" class="InputBox">
    </label>
    <label>
      <?php echo smarty_function_t(array('c' => 'Align'), $this);?>
:
      <select data-wysihtml5-dialog-field="className">
        <option value=""><?php echo smarty_function_t(array('c' => 'Default'), $this);?>
</option>
        <option value="wysiwyg-float-left"><?php echo smarty_function_t(array('c' => 'Left'), $this);?>
</option>
        <option value="wysiwyg-float-right"><?php echo smarty_function_t(array('c' => 'Right'), $this);?>
</option>
      </select>
    </label>
    <a data-wysihtml5-dialog-action="save" class="Button"><?php echo smarty_function_t(array('c' => 'OK'), $this);?>
</a>
    <a data-wysihtml5-dialog-action="cancel" class="Button"><?php echo smarty_function_t(array('c' => 'Cancel'), $this);?>
</a>
  </div>

</div>