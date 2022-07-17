<?php
/* Smarty version 3.1.39, created on 2022-06-30 00:19:56
  from 'C:\wamp64\www\simplyG\modules\ets_testimonial\views\templates\hook\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62bcd00cad1fe2_00847329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7eacac392baa414a168bc71a522cf88549e4833f' => 
    array (
      0 => 'C:\\wamp64\\www\\simplyG\\modules\\ets_testimonial\\views\\templates\\hook\\admin.tpl',
      1 => 1656521752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62bcd00cad1fe2_00847329 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_ttn_module_dir']->value,'html','UTF-8' ));?>
views/js/rating.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_ttn_module_dir']->value,'html','UTF-8' ));?>
views/js/admin.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    <?php if ((isset($_smarty_tpl->tpl_vars['ets_link_search_product']->value))) {?>
        var ets_link_search_product ='<?php echo $_smarty_tpl->tpl_vars['ets_link_search_product']->value;?>
';
    <?php }?>
    var comfirm_delete_image_text = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to delete this image?','mod'=>'ets_testimonial','js'=>1),$_smarty_tpl ) );?>
';
    var confirm_delete_all_review ='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to delete all selected reviews','mod'=>'ets_testimonial','js'=>1),$_smarty_tpl ) );?>
';
    var confirm_duplicate_all_review ='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to duplicate all selected reviews','mod'=>'ets_testimonial','js'=>1),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
><?php }
}
