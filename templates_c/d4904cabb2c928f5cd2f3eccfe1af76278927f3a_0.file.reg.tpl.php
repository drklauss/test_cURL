<?php /* Smarty version 3.1.27, created on 2015-08-10 17:21:06
         compiled from "C:\DATA\MEGA\DEVELOPING\Winginx\home\auth.local\public_html\templates\reg.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:82455c8a542deb015_62249639%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4904cabb2c928f5cd2f3eccfe1af76278927f3a' => 
    array (
      0 => 'C:\\DATA\\MEGA\\DEVELOPING\\Winginx\\home\\auth.local\\public_html\\templates\\reg.tpl',
      1 => 1439212863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82455c8a542deb015_62249639',
  'variables' => 
  array (
    'errorReg' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c8a542e44db0_76834472',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c8a542e44db0_76834472')) {
function content_55c8a542e44db0_76834472 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '82455c8a542deb015_62249639';
?>
<html>
<head>
    <link rel="stylesheet" href="/style.css" type="text/css" media="screen"/>
    <title></title>
</head>
<body>

<div id="body">
    <div class="form">
        <h3>Форма регистрации</h3>

        <form name="regForm" method="post">
            <label>Введите логин:</label><br>
            <input type="text" name="login" placeholder="Ваш логин"><br>
            <label>Введите пароль:</label><br>
            <input type="password" name="password" placeholder="Ваш Пароль"><br>
            <input type="submit" name="submit" value="Зарегистрироваться">
            <input type="submit" name="goToLogin" value="У меня есть логин" formaction="index.php?auth=login">
            <br>
        </form>
        <ul class="errors"><?php
$_from = $_smarty_tpl->tpl_vars['errorReg']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
                <li><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</li>
            <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?></ul>
    </div>
</div>
</body>
</html>

<?php }
}
?>