<?php
require_once ('databaseUshqimet.php');


class modelUshqimet{
    private $Id;
    private $image;
    private $title;
    private $body;
    public $db;


    public function __construct($Id='',$image='', $title='',$body=''){
        $this ->Id=$Id;
        $this ->image=$image;
        $this ->title=$title;
        $this ->body=$body;
        $this->db = new Database;
    }
    public function setId($id){
        $this ->id=$id;
    }
    public function getId(){
        return $this ->id;
    }

    public function setImage($image){
        $this ->image=$image;
    }
    public function getImage(){
        return $this ->image;
    }

    public function setTitle($title){
        $this ->title=$title;
    }
    public function getTitle(){
        return $this ->title;
    }

    public function setBody($body){
        $this ->body=$body;
    }
    public function getBody(){
        return $this ->body;
    }


    public function readData(){
        $query = $this->db->pdo->query('SELECT * from tableushqimet');

        return $query->fetchAll();
    }

    public function insert($request){
        $request['image'] = './Fotot/' .$request['image'];
        $query = $this->db->pdo->prepare('INSERT INTO tableushqimet (image, title, body)
        VALUES (:image, :title, :body)');

        $query->bindParam(':image', $request['image']);
        $query->bindParam(':title', $request['title']);
        $query->bindParam(':body', $request['body']);
        $query->execute();

        return header('Location: dashboardUshqimet.php');
    }

    public function edit($id){
      
        $query = $this->db->pdo->prepare('SELECT * from tableushqimet WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE tableushqimet SET image = :image,
        title = :title, body = :body WHERE id = :id');
        $query->bindParam(':image', $request['image']);
        $query->bindParam(':title', $request['title']);
        $query->bindParam(':body', $request['body']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: dashboardUshqimet.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from tableushqimet WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: dashboardUshqimet.php");
    }
}
?>