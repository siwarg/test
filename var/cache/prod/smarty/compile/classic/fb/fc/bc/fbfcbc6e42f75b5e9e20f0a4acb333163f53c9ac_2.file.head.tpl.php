<?php
/* Smarty version 3.1.39, created on 2022-06-29 23:26:03
  from 'C:\wamp64\www\simplyG\modules\ets_testimonial\views\templates\hook\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62bcc36ba16982_76351874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbfcbc6e42f75b5e9e20f0a4acb333163f53c9ac' => 
    array (
      0 => 'C:\\wamp64\\www\\simplyG\\modules\\ets_testimonial\\views\\templates\\hook\\head.tpl',
      1 => 1656521752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62bcc36ba16982_76351874 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
var ETS_TTN_AUTOPLAY_SLIDESHOW =<?php if ($_smarty_tpl->tpl_vars['ETS_TTN_AUTOPLAY_SLIDESHOW']->value) {?> true<?php } else { ?>false<?php }?>;
var ETS_TTN_TIME_SPEED_SLIDESHOW =<?php if ($_smarty_tpl->tpl_vars['ETS_TTN_TIME_SPEED_SLIDESHOW']->value) {
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['ETS_TTN_TIME_SPEED_SLIDESHOW']->value), ENT_QUOTES, 'UTF-8');
} else { ?>5000<?php }?>;
<?php echo '</script'; ?>
><?php }
}
