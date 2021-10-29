<?php
/* Smarty version 4.0.0-rc.0, created on 2021-10-28 21:38:27
  from '/var/www/wise/rpg/view/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_617b4283a67066_51528899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '755b965dd294d7113ec91effa9cd507dd5e8b7e6' => 
    array (
      0 => '/var/www/wise/rpg/view/login.tpl',
      1 => 1635467902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617b4283a67066_51528899 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Login</title>

        <link rel="stylesheet" type="text/css" href="../view/css/estilos.css"/>
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js" 
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
        crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="../view/scripts.js"><?php echo '</script'; ?>
>
    </head>
    <body class="bg">
        <div  class="form">
            <form class="login">
                <input type="text" placeholder="usuario" required>
                <input type="password" placeholder="senha" required>
                <button>Entrar</button>
                <p class="novo">Ainda não possui cadastro?
                    <a href="cadastro.php">Crie uma conta!</a>
                </p>
            </form>
        </div>
    </body>
</html>
<?php }
}
