<?php require_once 'conf.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Notícias</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header class="header">
            <div class="logo">
                <img class="imglogo" src="images/icone_noticia.png" alt="Logo">
                <h1 class="textlogo">Site de notícias</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Notícias</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
        </header>
        <main class="main">
            
            <?php               
            ?>
            
            <div class="noticias">
                <h1>Noticias</h1>
            </div>
            <?php
            try {
                $stmt = $pdo->query('SELECT * FROM noticias');
                $noticias = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($noticias as $noticia) {
                    $date=date_create($noticia['data_publicacao']);
                    echo"<div class='item'>
                            <img class='img' src='images/exemplo_img_noticia.jpg'>
                            <section class='news-section'>
                                <p>" . date_format($date,"d/m/Y") . "</p>
                                <h2>" . $noticia['titulo'] . "</h2>
                                <p>" . $noticia['texto'] . "</p>
                            </section>
                        </div>";
                }
            } catch (PDOException $e) {
                echo "Erro ao listar notícias: " . $e->getMessage();
            }
            ?>
        </main>
        <footer class="footer">
            <p>&copy; 2023 Minha página de notícias. Todos os direitos reservados.</p>
        </footer>
    </div>
</body>

</html>