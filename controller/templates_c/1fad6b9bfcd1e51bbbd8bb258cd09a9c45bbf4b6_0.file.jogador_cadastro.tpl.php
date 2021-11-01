<?php
/* Smarty version 4.0.0-rc.0, created on 2021-10-29 22:52:00
  from '/var/www/wise/rpg/view/jogador_cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_617ca540322bb8_64790477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fad6b9bfcd1e51bbbd8bb258cd09a9c45bbf4b6' => 
    array (
      0 => '/var/www/wise/rpg/view/jogador_cadastro.tpl',
      1 => 1635555958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617ca540322bb8_64790477 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../view/css/estilos.css"
    
  </head>
  <body class="fundo">
    <h1 class="titulo">Cadastrar</h1>
    <form class="cadastro row g-2">
      <div class="usr">
        <input type="text" placeholder="usuário" required>
        <input type="email" placeholder="email" required>
      </div>
      <div class="passwd">
        <input type="password" placeholder="senha" required>
        <input type="password" placeholder="Confirme a senha" required>
      </div>
      <div>
        <button class="cad" href="#">Cadastrar</button>
      </div>
    </form>
    

    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
