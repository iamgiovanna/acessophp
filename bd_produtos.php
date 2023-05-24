<?php

include_once 'Conectar.php';

//parte 1 atributos

class Produto{

    private $id;
    private $nome;
    private $estoque;
    private $conn;

    //parte 2 - os getters e setters

    public function getId(){
        return $this->id;
    }

    public function setId($iid){
        $this->id = $iid;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($name){
        $this->nome= $name;
    }

    public function getEstoque(){
        return $this->estoque;
    }
    
    public function setEstoque($estoqui){
        $this->estoque = $estoqui;
    }

// parte 3 - métodos

function listar()
{

    try
    {
        $this-> conn = new Conectar();
        $sql = $this->conn->query("Select * from produto order by nome");
        $sql-> execute();
        return $sql->fetchAll();
        $this->conn = null;
    }
    catch(PDOException $exc)
    {
        echo "Erro ao executar consultar." .$exc->getMessage();
    }
}
//encerramento da classe Produto
}



?>