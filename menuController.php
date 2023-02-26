<?php
require_once './aktivitetetDatabase.php';

class menuController{
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

    //CRUD

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from menu');

        return $query->fetchAll();
    }

    public function insert($request){
        $request['image']='./Fotot/'.$request['image'];
        $query = $this->db->pdo->prepare('INSERT INTO menu (menu_image, menu_title, menu_body)
        VALUES (:menu_image, :menu_title, :menu_body)');

        $query->bindParam(':menu_image', $request['image']);
        $query->bindParam(':menu_title', $request['title']);
        $query->bindParam(':menu_body', $request['body']);
        $query->execute();

        return header('Location: menuDashboard.php');
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from menu WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE menu SET menu_image = :menu_image,
        menu_title = :menu_title, menu_body = :menu_body WHERE id = :id');
        $query->bindParam(':menu_image', $request['image']);
        $query->bindParam(':menu_title', $request['title']);
        $query->bindParam(':menu_body', $request['body']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: menuDashboard.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from menu WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: menuDashboard.php");
    }
}
?>