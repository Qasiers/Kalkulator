<?php
/* Smarty version 4.3.2, created on 2023-12-21 13:54:12
  from 'B:\Program Files\xampp\htdocs\klasa_V\2023.12.01\zadanie\app\calcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65843574987fe1_22751050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cee6786adc5571ad3523a4ac23639a7ce332f7d2' => 
    array (
      0 => 'B:\\Program Files\\xampp\\htdocs\\klasa_V\\2023.12.01\\zadanie\\app\\calcView.html',
      1 => 1703163150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65843574987fe1_22751050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2011603152658435749704a7_84118928', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162101849465843574972f13_03849701', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_2011603152658435749704a7_84118928 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2011603152658435749704a7_84118928',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Autor: Barbara Turniak<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_162101849465843574972f13_03849701 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_162101849465843574972f13_03849701',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
	<legend class="calc_legend">Kalkulator</legend>
	<fieldset>
		<label for="id_a">Pierwsza liczba: </label><br/>
		<input id="id_a" type="text" name="a" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->a;?>
"><br/>
		<label for="id_op">Działanie: </label><br/>
		<select id="id_op" name="op">

		<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->op_name))) {?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['form']->value->op;?>
">ponownie: <?php echo $_smarty_tpl->tpl_vars['res']->value->op_name;?>
</option>
		<option value="" disabled="true">---</option>
		<?php }?>

			<option value="add">&plus;</option>
			<option value="sub">&minus;</option>
			<option value="times">&times;</option>
			<option value="div">&divide;</option>
		</select><br/>					
		<label for="id_b">Druga liczba:</label><br/>
		<input id="id_b" type="text" name="b" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->b;?>
">
	</fieldset>
	<button type="submit">Oblicz</button>
</form>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isErr()) {?>
	<h4>Błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErr(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
