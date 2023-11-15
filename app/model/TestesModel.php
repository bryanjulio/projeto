<?php

require_once('Database.php');

class TestesModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getUserByEmail($email)
    {
        // Obtém a conexão com o banco de dados
        $conn = $this->db->getConnection();

        // Prepara a query de seleção do usuário pelo email
        $stmt = $conn->prepare('SELECT * FROM usuarios WHERE email = ?');

        // Executa a query passando o email como parâmetro
        $stmt->execute([$email]);

        // Obtém o usuário encontrado
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Retorna o usuário encontrado ou null, caso não tenha encontrado nenhum usuário com o email especificado
        return $user ? $user : null;
    }
    public function getNivelAcesso($userId)
    {
        $conn = $this->db->getConnection();
        $stmt = $conn->prepare("SELECT nivel FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $userId]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result ? $result['nivel'] : null;
    }

    public function getUserByID($userId)
    {
        $conn = $this->db->getConnection();
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $userId]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user ? $user : null;

    }

     public function createUser($name, $email, $telefone, $data_nasc, $cidade, $estado, $endereco, $nivel, $empresa, $senha)
    {
        $sql = "INSERT INTO usuarios (nome, email, telefone, data_nasc, cidade, estado, endereco, nivel, empresa, senha) 
                VALUES (:name, :email, :telefone, :data_nasc, :cidade, :estado, :endereco, :nivel, :empresa, :senha)";

        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':data_nasc', $data_nasc);
        $stmt->bindParam(':cidade', $cidade);
        $stmt->bindParam(':estado', $estado);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':nivel', $nivel);
        $stmt->bindParam(':empresa', $empresa);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();
    }



}