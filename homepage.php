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
                            <img src="img/logodeitada_recorte.png" alt="Logo DevExperience" description="Logo DevExperience"
                                id="logo1">
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
    </main>
    <footer>
    </footer>
</body>

</html>