<?php
use db\page;
use db\mock;
use db\mongodb;
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


<body>
<header>
<h1><?=page::$title?></h1>
<p>Tags: <?=page::$keyword?></p>
</header>

<main>

<div><?#=?></div>

<article>

<?=page::$copyright?>
<time><?=page::$ctime->format(DATE_ATOM)?></time>
<time><?=page::$mtime->format(DATE_RFC850)?></time>
<?=page::$payload?>

</article>

</main>

<footer><?=page::$copyright?></footer>
