<?php
/* Smarty version 3.1.39, created on 2022-06-29 23:26:05
  from 'C:\wamp64\www\simplyG\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62bcc36dc80c47_82451596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '686aca9790653a017ac4379e8bd5873b83726ee7' => 
    array (
      0 => 'C:\\wamp64\\www\\simplyG\\themes\\classic\\templates\\page.tpl',
      1 => 1628071972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62bcc36dc80c47_82451596 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117044848162bcc36dc6ed70_77559193', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_6792585062bcc36dc71535_10353772 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_142819354162bcc36dc6ff93_70151766 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6792585062bcc36dc71535_10353772', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_131361021062bcc36dc78a26_61086587 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_150373893762bcc36dc7a3c6_22771346 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_183632156062bcc36dc77809_19998493 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131361021062bcc36dc78a26_61086587', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150373893762bcc36dc7a3c6_22771346', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_96928545962bcc36dc7dd05_97714383 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_121760321162bcc36dc7cc12_46258148 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96928545962bcc36dc7dd05_97714383', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_117044848162bcc36dc6ed70_77559193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_117044848162bcc36dc6ed70_77559193',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_142819354162bcc36dc6ff93_70151766',
  ),
  'page_title' => 
  array (
    0 => 'Block_6792585062bcc36dc71535_10353772',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_183632156062bcc36dc77809_19998493',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_131361021062bcc36dc78a26_61086587',
  ),
  'page_content' => 
  array (
    0 => 'Block_150373893762bcc36dc7a3c6_22771346',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_121760321162bcc36dc7cc12_46258148',
  ),
  'page_footer' => 
  array (
    0 => 'Block_96928545962bcc36dc7dd05_97714383',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142819354162bcc36dc6ff93_70151766', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183632156062bcc36dc77809_19998493', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121760321162bcc36dc7cc12_46258148', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
