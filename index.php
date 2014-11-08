<?php 	
 	include_once "Control.php";
	$ctrl = new Control($_SERVER['PHP_SELF']);

	$language = $ctrl->getLanguage();
	$language->defineLanguage('english');
 ?>
<!DOCTYPE HTML>
<html lang="pt-br">
 <head>
	<meta charset="UTF-8">
 	<?php 
 		$ctrl->css();
 	?>
 	<title><?php $language->fletch(); ?></title>
 </head>
 
 <body>
 	<!-- Cabeçalho -->
 	<header></header>

 	<!-- Menu -->
 	<nav></nav>

 	<!-- Painel de Conteudo -->
 	<article>
 		<!-- Conteudo -->
 		<section></section>
 	</article>

	<!-- Barra Complementar -->
	<aside></aside>

	<!-- Rodapé -->
	<footer></footer>
	<?php 
		$ctrl->jsPublicLibrary('jquery');
		$ctrl->js(); 
	?>
 </body>
 </html>
