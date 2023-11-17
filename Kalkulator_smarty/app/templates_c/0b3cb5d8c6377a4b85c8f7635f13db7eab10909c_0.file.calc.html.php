<?php
/* Smarty version 4.3.2, created on 2023-11-17 09:41:56
  from 'B:\Program Files\xampp\htdocs\klasa_V\2023.11.10\zadanie\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_655727548bc057_48603596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b3cb5d8c6377a4b85c8f7635f13db7eab10909c' => 
    array (
      0 => 'B:\\Program Files\\xampp\\htdocs\\klasa_V\\2023.11.10\\zadanie\\app\\calc.html',
      1 => 1700210402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655727548bc057_48603596 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1891040415655727548a9894_49351356', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_437428062655727548aa789_67607771', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_1891040415655727548a9894_49351356 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1891040415655727548a9894_49351356',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Autor: Barbara Turniak<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_437428062655727548aa789_67607771 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_437428062655727548aa789_67607771',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
	<legend class="calc_legend">Kalkulator</legend>
	<fieldset>
		<label for="id_a">Pierwsza liczba: </label><br/>
		<input id="id_a" type="text" name="a" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['a'];?>
" /><br/>
		<label for="id_op">Działanie: </label><br/>
		<select id="id_op" name="op">
			<?php if ((isset($_smarty_tpl->tpl_vars['form']->value['op_name']))) {?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['form']->value['op'];?>
">ponownie: <?php echo $_smarty_tpl->tpl_vars['form']->value['op_name'];?>
</option>
			<option value="" disabled="true">---</option>
			<?php }?>
			<option value="add">&plus;</option>
			<option value="sub">&minus;</option>
			<option value="times">&times;</option>
			<option value="div">&divide;</option>
		</select><br/>
		<label for="id_b">Druga liczba: </label><br/>
		<input id="id_b" type="text" name="b" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['b'];?>
" /><br/>
	</fieldset>
	<button type="submit">Oblicz</button>
</form>	

	<?php if ((isset($_smarty_tpl->tpl_vars['array_msg']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['array_msg']->value) > 0) {?> 
		<h4>Błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_msg']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4>Wynik</h4>
	<p class="result">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
