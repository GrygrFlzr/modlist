<?php
set_include_path($_SERVER['DOCUMENT_ROOT']);
require_once('resources/scripts/engine.php');
$page = new Page;
$page->setTitle('Page Not Found');
$page->startBody();
?>
<div class="jumbotron">
	<h1>Uh oh!</h1>
	<p>That page doesn't exist!</p>
	<p>
		<a href="/version/latest" class="btn btn-primary btn-lg">Check out the latest mod list!</a>
		<a href="/history" class="btn btn-default btn-lg">What happened to the site?</a>
	</p>
</div>
<?php
$page->endBody();
echo $page->render('resources/templates/modlist-template.php');