<?php
/* Smarty version 4.3.1, created on 2023-07-15 07:24:41
  from '/home/vfcacxhub/public_html/content/themes/default/templates/ajax.lightbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b249b981f772_96488621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a6c7812ade66badd9e82ceeb70261129a13be0f' => 
    array (
      0 => '/home/vfcacxhub/public_html/content/themes/default/templates/ajax.lightbox.tpl',
      1 => 1689358234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post_photo.tpl' => 1,
  ),
),false)) {
function content_64b249b981f772_96488621 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('post', $_smarty_tpl->tpl_vars['photo']->value['post']);?>

<div class="lightbox-post" data-id="<?php if ($_smarty_tpl->tpl_vars['photo']->value['is_single']) {
echo $_smarty_tpl->tpl_vars['post']->value['post_id'];
} else {
echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];
}?>">
  <div class="js_scroller" data-slimScroll-height="100%">
    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_lightbox'=>true), 0, false);
?>
  </div>
</div><?php }
}
