<?php

namespace Practica\Database;

class Image
{
    private $pdo;
    private $data;

    public function __construct()
    {
        try {
            $this->pdo = new \PDO('mysql:dbname=test;chartset=UTF-8;host=localhost;port=3463', 'root', '');
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function find(int $id) : Image
    {
        $image = new Image;

        $stmt = $image->pdo->prepare('SELECT * FROM images WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $response = $stmt->fetch(\PDO::FETCH_ASSOC);
        
        $image->setData($response);

        return $image;
    }

    public function getId() : int
    {
        return (int)$this->data['id'];
    }

    public function getSrc() : string
    {
        return $this->data['src'];
    }

    public function setData($data)
    {
        $this->data = $data;
    }
}