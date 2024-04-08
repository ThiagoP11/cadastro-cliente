<?php

require_once('Cliente.php');

$dsn="mysql:host=localhost;dbname=cadastro";

$pdo = new PDO($dsn,'root','thiago0806');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_GET['delete'])){
    $id = (int)$_GET['delete'];
    $pdo->exec("DELETE FROM CLIENTES WHERE id=$id");
    echo 'deletado com sucesso o id: '.$id;
}

$nome = isset($_POST['nome']);
$email = isset($_POST['email']);
$dataNascimento = isset($_POST['dataNascimento']);
$telefone = isset($_POST['telefone']);
$cpf = isset($_POST['cpf']);



$cliente = new Cliente($nome, $email, $dataNascimento, $telefone, $cpf);


if(isset($_POST['nome'])){
    $sql = $pdo->prepare("INSERT INTO clientes VALUES (null,?,?,?,?,?)");
    $sql->execute(array($cliente->getNome(),$cliente->getEmail(),$cliente->getDataNascimento(),$cliente->getTelefone(),$cliente->getCpf()));
    echo 'Inserido com sucesso';

}




//$cliente = new Cliente($nome, $email, $dataNascimento, $telefone, $cpf);

//$sql = "INSERT INTO clientes(nome, email, data_nascimento, telefone, cpf)VALUES('$nome','$email','$dataNascimento','$telefone','$cpf')"; 

/*if(mysqli_query($conn, $sql)){
    header("Location: index.php");
}else {
    echo "Deu Erro" . $sql . "<br>" . mysqli_error($conn);
}*/

?>

<form method="post">
        <input type="text" name="nome">
        <input type="text" name="email">
        <input type="text" name="dataNascimento">
        <input type="text" name="telefone">
        <input type="text" name="cpf">
        <input type="submit" value="Enviar">

</form>

<?php

    $sql = $pdo->prepare("SELECT * FROM CLIENTES");
    $sql->execute();
    $fetchClientes = $sql->fetchAll();

    foreach($fetchClientes as $key => $value) {
        echo '<a href="?delete='.$value['id'].'">(X)</a>'.$clientes->getEmail().' | '.getEmail();
        echo '<hr>';
    }


?>