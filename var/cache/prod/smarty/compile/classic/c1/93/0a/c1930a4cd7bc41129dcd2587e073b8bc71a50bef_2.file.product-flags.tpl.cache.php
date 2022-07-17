<?php
/* Smarty version 3.1.39, created on 2022-06-29 23:26:05
  from 'C:\wamp64\www\simplyG\themes\classic\templates\catalog\_partials\product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62bcc36d45d6d3_15131210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1930a4cd7bc41129dcd2587e073b8bc71a50bef' => 
    array (
      0 => 'C:\\wamp64\\www\\simplyG\\themes\\classic\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1628071972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62bcc36d45d6d3_15131210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '75958283362bcc36d44f8c3_69500425';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81658452562bcc36d4524a0_02311132', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_81658452562bcc36d4524a0_02311132 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_81658452562bcc36d4524a0_02311132',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
