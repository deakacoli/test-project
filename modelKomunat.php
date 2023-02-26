<?php
require_once ('databaseKomunat.php');


class modelKomunat{
    private $Id;
    private $image;
    private $title;
    public $db;


    public function __construct($Id='',$image='', $title=''){
        $this ->Id=$Id;
        $this ->image=$image;
        $this ->title=$title;
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

   

    //CRUD

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from tablekomunat');

        return $query->fetchAll();
    }

    public function insert($request){
        $request['image'] = './Fotot/'.$request['image'];
        $query = $this->db->pdo->prepare('INSERT INTO tablekomunat (image, title)
        VALUES (:image, :title)');

        $query->bindParam(':image', $request['image']);
        $query->bindParam(':title', $request['title']);

        $query->execute();

        return header('Location: dashboardKomunat.php');
    }

    public function edit($id){
      
        $query = $this->db->pdo->prepare('SELECT * from tablekomunat WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE tablekomunat SET image = :image,
        title = :title WHERE id = :id');
        $query->bindParam(':image', $request['image']);
        $query->bindParam(':title', $request['title']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: dashboardKomunat.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from tablekomunat WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: dashboardKomunat.php");
    }
}
?>