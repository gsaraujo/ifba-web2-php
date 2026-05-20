<?php

class Estudante{
    private $nome;
    private $cpf;
    private $telefone;
    private $email;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getCpf(){
        return $this->cpf;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }

    public function cadastrarEstudante(){}

    public function exibirEstudante(){
        echo "<h1>Informações do estudante</h1>";
        echo "<p>Nome: ".$this->getNome()."</p>";
        echo "<p>Cpf: ".$this->getCpf()."</p>";
        echo "<p>Telefone: ".$this->getTelefone()."</p>";
        echo "<p>Email: ".$this->getEmail()."</p>";

    }
}

//var_dump($_POST);

$email = explode("@",$_POST["email"]);
//var_dump($email);

if ($email[1] != 'ifba.edu.br') {
    header("location:index.php?erro=email");
    exit;
}
$estudante = new Estudante();
$estudante->setEmail($_POST['email']);
$estudante->setNome($_POST['nome']);
$estudante->setCpf($_POST['cpf']);
$estudante->setTelefone($_POST['telefone']);

$estudante->exibirEstudante();

