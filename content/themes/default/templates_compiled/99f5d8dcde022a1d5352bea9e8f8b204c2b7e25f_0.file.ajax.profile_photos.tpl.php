<?php
/* Smarty version 4.3.1, created on 2023-07-15 08:39:45
  from '/home/vfcacxhub/public_html/content/themes/default/templates/ajax.profile_photos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b25b51c52c40_97578672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99f5d8dcde022a1d5352bea9e8f8b204c2b7e25f' => 
    array (
      0 => '/home/vfcacxhub/public_html/content/themes/default/templates/ajax.profile_photos.tpl',
      1 => 1689358232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:__feeds_profile_photo.tpl' => 1,
    'file:_no_data.tpl' => 1,
  ),
),false)) {
function content_64b25b51c52c40_97578672 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, false);
?>
    <?php echo __("Select Photo");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
  <?php if ($_smarty_tpl->tpl_vars['photos']->value) {?>
    <ul class="row">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['photos']->value, 'photo');
$_smarty_tpl->tpl_vars['photo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
$_smarty_tpl->tpl_vars['photo']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_profile_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <!-- see-more -->
    <div class="alert alert-post see-more mt20 js_see-more" data-get="profile_photos" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-type='<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
'>
      <span><?php echo __("See More");?>
</span>
      <div class="loader loader_small x-hidden"></div>
    </div>
    <!-- see-more -->
  <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }?>
</div><?php }
}
