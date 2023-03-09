<?php require_once 'noticia.php';
// as credenciais do banco de dados
$host = "localhost";
$port = "5432";
$dbname = "testetecnico";
$user = "samuel";
$password = "postgres";

// Tentativa de conexão ao banco de dados
try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
    exit();
}
/*
// Criando um novo objeto notícia

$noticia = new Noticia();
$noticia->setTitulo("Cientistas propõem novo computador biológico, feito a partir de células cerebrais humanas:");
$noticia->setTexto("a pesquisa da Universidade Johns Hopkins pretende estudar “inteligências organoides”, com potencial para superar a capacidade de processamento de máquinas baseadas em silício, consumindo muito menos energia. As informações são do jornal científico Frontiers.");
$noticia->setData("2023-03-03");

// Inserindo a notícia na tabela "noticias"
try {
    $sql = "INSERT INTO noticias (titulo, texto, data_publicacao) VALUES (:titulo, :texto, :data)";
    $params = [
        ':titulo' => $noticia->getTitulo(),
        ':texto' => $noticia->getTexto(),
        ':data' => $noticia->getData(),
    ];
    $pdo->prepare($sql)->execute($params);
    echo "Notícia inserida com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao inserir notícia: " . $e->getMessage();
}
*/

?>