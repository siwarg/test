<?php
/* Smarty version 3.1.39, created on 2022-06-30 00:19:58
  from 'C:\wamp64\www\simplyG\modules\ets_testimonial\views\templates\hook\limit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62bcd00e585c04_09688951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b79792c8ccada4dd6cd6c5e2153bb5691f7bc5d' => 
    array (
      0 => 'C:\\wamp64\\www\\simplyG\\modules\\ets_testimonial\\views\\templates\\hook\\limit.tpl',
      1 => 1656521752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62bcd00e585c04_09688951 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="limit results">
    <label class="" for="paginator_select_limit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Items per page:','mod'=>'ets_testimonial'),$_smarty_tpl ) );?>
</label>
    <div>
        <select id="paginator_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pageName']->value,'html','UTF-8' ));?>
_select_limit" class="pagination-link custom-select paginator_select_limit" name="paginator_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pageName']->value,'html','UTF-8' ));?>
_select_limit" >
            <option value="10" <?php if ($_smarty_tpl->tpl_vars['limit']->value == 10) {?> selected="selected"<?php }?>>10</option>
            <option value="20" <?php if ($_smarty_tpl->tpl_vars['limit']->value == 20) {?> selected="selected"<?php }?>>20</option>
            <option value="50" <?php if ($_smarty_tpl->tpl_vars['limit']->value == 50) {?> selected="selected"<?php }?>>50</option>
            <option value="100" <?php if ($_smarty_tpl->tpl_vars['limit']->value == 100) {?> selected="selected"<?php }?>>100</option>
            <option value="300" <?php if ($_smarty_tpl->tpl_vars['limit']->value == 300) {?> selected="selected"<?php }?>>300</option>
        </select>
    </div>
</div><?php }
}
