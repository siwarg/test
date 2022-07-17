<?php
/* Smarty version 3.1.39, created on 2022-06-29 23:26:05
  from 'C:\wamp64\www\simplyG\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62bcc36dba1b51_03525601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '076b825a23af7e471ed32d106aa82a7f001ba8b0' => 
    array (
      0 => 'C:\\wamp64\\www\\simplyG\\themes\\classic\\templates\\index.tpl',
      1 => 1628071972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62bcc36dba1b51_03525601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18350505762bcc36db93991_52204149', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_72253270762bcc36db95921_30116876 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_105495825862bcc36db9a335_77413564 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_55738083562bcc36db98503_31734455 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105495825862bcc36db9a335_77413564', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_18350505762bcc36db93991_52204149 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_18350505762bcc36db93991_52204149',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_72253270762bcc36db95921_30116876',
  ),
  'page_content' => 
  array (
    0 => 'Block_55738083562bcc36db98503_31734455',
  ),
  'hook_home' => 
  array (
    0 => 'Block_105495825862bcc36db9a335_77413564',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72253270762bcc36db95921_30116876', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55738083562bcc36db98503_31734455', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
