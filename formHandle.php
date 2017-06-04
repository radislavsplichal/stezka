<?php
include 'classes/loadComponents.php';
$type = $_POST['formType'];
//session_start();

switch ($type) {
  case 'insert':
    # code...
    $array;
    foreach ($_GET as $key => $value) {
        echo "$key = $value<br>";
        $array[$key] = $value;
    }


      $title = $_GET["title"];
      $text = $_GET["text"];

      $newArticle = new Article;
      $newArticle->insertArticle($title, $text);

      header("Location:"."index.php");
      exit();
    break;
  case 'edit':
    # code...

    $id = $_POST['id'];
    if (isset($_SESSION['state']) && $_SESSION['state'] == 'edit')
    {
    $articleText = $_POST['article'];
    $articleTitle = $_POST['title'];

    $article = new Article;
    $article->editArticle($id, $articleText, $articleTitle);

    $_SESSION['state'] = 'view';
    echo "string";
}

    else {

      $_SESSION['state'] = 'edit';
      $_SESSION['focus'] = $id;
    }

    header("Location:"."index.php");
    exit();
    break;
  case 'delete':
    # code...
    $id = $_POST['id'];

    $article = new Article;
    $article->deleteArticle($id);


    header("Location:"."index.php");
    exit();
    break;
  default:
    # code...
    break;
}



// header("Location:"."index.php");
// exit();

//Joe the handler

//$object = new $type;
//$object->$action(args);

 ?>
