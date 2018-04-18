<?php
use db\page;
use db\mock;
use db\mongodb;
use html\html;
try{
  new page(new mock);
}catch(Throwable $e){
  http_response_code(500);
  die($e->getMessage());
}
?>
<!DOCTYPE html>
<head>
<meta charset=UTF-8>
<title><?=page::$title?></title>
<?=html::meta()->set(['name'=>'keywords','content'=>page::$keyword])?>
<?=html::meta()->set(['name'=>'description','content'=>page::$description])?>


<body>
<header>
<h1><?=page::$title?></h1>
<p>Tags: <?=page::$keyword?></p>
</header>

<main>

<div><?#=?></div>

<article>

<?=page::$copyright?>
<?=html::time(page::$ctime)?>
<time><?=page::$ctime->format(DATE_ATOM)?></time>
<time><?=page::$mtime->format(DATE_RFC850)?></time>
<?=page::$payload?>

</article>

</main>

<footer><?=page::$copyright?></footer>
