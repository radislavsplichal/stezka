<?php
session_start();
//include 'classes/Page.php';
include 'classes/loadComponents.php';
$id = $_POST['id'];
if (isset($_SESSION['state']) && $_SESSION['state'] == 'edit')
{
$articleText = $_POST['article'];
$articleTitle = $_POST['title'];

$article = new Article;
$article->editArticle($id, $articleText, $articleTitle);

$_SESSION['state'] = 'view';}
else {

  $_SESSION['state'] = 'edit';
  $_SESSION['focus'] = $id;
}

// header("Location:"."index.php");
// exit();



 ?>
