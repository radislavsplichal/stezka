<?php
// This class defines what is a comment and defines what you can do with it
class Comment{
	private $type = "comment";
	private $refArticleID;
	public $commentID;
	private $commentText;
	private $commentAuthor;
	private $commentDate;

	//save a comment into the database
	public function saveComment() {
		$date = date('d.m.Y');
		$author = "Admin";
		$arguments = "user, text, dateCreated";
		$values = $author."','".$text."','".$date;
		$bot = new Lilly;
		$bot->saveObject($this->type,$arguments,$values);
		echo 'Comment saved';
	}
	//display a comment
	public function showComment() {

	}
	public function deleteComment($id) {
		$bot = new Lilly;
		$bot->deleteObject($id,$this->type);
	}

}
?>
