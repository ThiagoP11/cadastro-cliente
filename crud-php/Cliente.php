<?php
class Cliente
{
    // declaração de propriedade
    private String $nome;
    private String $email;
    private String $dataNascimento;
    private String $telefone;
    private String $cpf;


    public function __construct(String $nome, String $email, String $dataNascimento, String $telefone, String $cpf) {
        $this->nome = $nome;
        $this->email = $email;
        $this->dataNascimento = $dataNascimento;
        $this->telefone = $telefone;
        $this->cpf = $cpf;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getDataNascimento(){
        return $this->dataNascimento;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function getCpf(){
        return $this->cpf;
    }




    // declaração de método
    public function displayVar() {
        echo $this->var;
    }
}
?>