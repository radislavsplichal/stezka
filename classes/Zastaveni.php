<?php
// This class is responsible for all actions regarding the articles in the app.
// create, edit, update, delete
//include ('databaseConnection.php');
//include ('Lilly.php');
//echo $servername;
class Zastaveni
{
  //properties
  private $type = "zastaveni";
  private $id;
  private $textDesc;
  private $title;
  private $dateUpdated;



  

public function insertZastaveni ($title, $text) {
	$date = date('d.m.Y');
	$author = "Admin";
	$arguments ="author, article, dateCreated, title";
	$values = $author."','".$text."','".$date."','".$title;


	$bot = new Lilly;
	$bot->saveObject($this->type,$arguments,$values);
	echo 'zastaveni Saved';
}
  //$sql = "INSERT INTO articles (author, article, dateCreated, title) VALUES ('$author', '$text', '$date', '$title');";



public function displayZastaveni () {
  echo '<div id="'.$this->id.'" class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
        <div class="panel panel-default">
        <div style="display: inline;" class="administration button-group pull-right" role="group" aria-label="...">
        <form method="POST" action="formHandle.php">
          <input type="hidden" name="id" value='.$this->id.'></input>
          <button type="button" title="Odstranit článek" onClick="this.parentNode.submit();" class="glyphicon glyphicon-remove" aria-hidden="true"></button>
          <!-- Hidden input types -->
          <input type="hidden" name="formType" value="delete"></input>
        </form><form method="POST" action="formHandle.php">
          <input type="hidden" name="id" value='.$this->id.'></input>
          <button type="button" title="Upravit článek" onClick="this.parentNode.submit();" class="glyphicon glyphicon-pencil" aria-hidden="true"></button>
          <!-- Hidden input types -->
          <input type="hidden" name="formType" value="edit"></input>
        </form>
        </div>
        <div class="panel-heading"><b>'.$this->title.'</b></br>
        Author: <i>'.$this->author.'</i></br>
        Created: '.$this->dateCreated.'

          </div>
        <div class="panel-body">
        '.$this->article.'
        </div>
        </div>
        </div>
        <div class="col-md-1"></div>
        </div>';
}

public function deleteZastaveni($id){
$bot = new Lilly;
$bot->deleteObject($id,$this->type);

 }


public function editZastaveni($id, $article, $title){
$date = date('d.m.Y');

$arguments[0] = 'article';
$arguments[1] = "dateUpdated";
$arguments[2] = 'title';

$values[0] = $article;
$values[1] = $date;
$values[2] = $title;

$bot = new Lilly;
$bot->editObject($id,$this->type,$arguments,$values);
echo 'Article Edited';

}
}

?>
