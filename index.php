<?php
session_start();
include_once 'inc/header.php';
include_once 'classes/categoria.class.php';
include_once 'classes/post.class.php';
include_once 'classes/usuario.class.php';

if(!isset($_SESSION['logado'])){
    header("Location: login.php");
    exit;
}
$contatos = new categoria();
$post = new post();
$usuario = new usuario();
$usuario->setUsuario($_SESSION['logado']);
?>

<h1>Menu</h1>
<form method="post">
        <a href="listar_categoria.php">VISUALIZAR CATEGORIAS</a><br><br>
        <a href="listar_post.php">VISUALIZAR POSTS</a><br><br>
        <a href="sair.php">SAIR</a> 
    </form>    
<?php include 'inc/footer.php'; ?>