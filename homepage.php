<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="headContent">
                <div class="navigation">
                    <div class="logo"><a class="navbar-logo" href="index.php">
                            <img src="img/logodeitada_recorte.png" alt="Logo DevExperience"
                                description="Logo DevExperience" id="logo1">
                        </a></div>
                    <div class="sessions">
                        <ul>
                            <li><a href="galeria.php">Edições</a></li>
                            <li><a href="vencedores.php">Vencedores</a></li>
                            <li><a href="evento.php">Evento</a></li>
                        </ul>
                    </div>
                </div>
                <div class="log">
                    <?php
                    if (!isset($_SESSION["usuario_id"])) {
                        echo "<div class='logarConta'>";
                        echo "<a href='logar.php'>Logar</a>";
                        echo "</div>";
                    }
                    if (isset($_SESSION["usuario_id"])) {
                        echo "<div class='logarConta'>";
                        echo "<a href='logout.php'>Sair</a>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="info">
                <p>O "SENAI Dev Experience," é uma maratona de tecnologia que reúne estudantes de nível técnico da
                    Escola e Faculdade SENAI Felix Guisard em uma competição de aprendizado prático, interação entre
                    estudantes e incentivo ao trabalho em equipe para resolução de problemas.</p>
                <p>A competição do evento é dividida em três grandes módulos, sendo eles:</p>
                    <p>• Módulo A: Programação de aplicações web;</p>
                    <p>• Módulo B: Infraestrutura e Segurança Cibernética;</p>
                    <p>• Módulo C: Inovação Tecnológica.</p>
                    <p>O "SENAI Dev Experience" representa mais do que uma simples competição; trata-se uma imersão
                    profunda no universo da tecnologia, concebida para potencializar o aprendizado e a interação
                    colaborativa entre estudantes. Este evento anual não só desafia a habilidade técnica dos
                    participantes, mas também os inspira a transcender limites, promovendo o espírito inovador e a
                    capacidade de, em equipe, enfrentar desafios do mercado de trabalho.
                    Este documento norteador contém informações essenciais para participantes, instrutores e
                    organizadores do evento.</p>
            </div>

        </div>
    </main>
    <footer>
    </footer>
</body>

</html>