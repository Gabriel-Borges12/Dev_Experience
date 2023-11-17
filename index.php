<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleindex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href=" ./img/logo.png">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    <title>Login DEV EXPERIENCE</title>
</head>

<body>
    <div class="main">
        <div class="lado-esq">
            <img id="logologin1" src="img/WEEK.png">
            <h1 id="titulo">Bem vindo ao Dev Experience!</h1>
            <p id="text">O "SENAI Dev Experience", é uma maratona de tecnologia que reúne estudantes de nível técnico da
                Escola e Faculdade SENAI Felix Guisard em uma competição de aprendizado prático, interação entre
                estudantes e incentivo ao trabalho em equipe para resolução de problemas.</p>
            <div class="foto-caderneta">
                <img id="caderneta" src="img/cadernetalogin.png">
            </div>
        </div>
        <div class="lado-dir">
            <!-- <img id="logoLoginDir" src="img/WEEK.png"> -->
            <!-- <h1 id="tituloDir">Bem vindo ao Week!</h1> -->
            <div class="logo-responsiva">
                <img id="logologin" src="img/lo.png">
            </div>
            <div class="container">

                <form id="cadastro-form" method="post" action="processar_login.php">
                    <h1 id="logintitulo">Login</h1>
                    <img id="img-user" src="img/user.png">

                    <input type="text" class="formzao" name="user" placeholder="Nome do usuario" autocomplete="off"
                        id="usuario">
                    <br><br>
                    <img id="img-senha" src="img/senha.png">
                    <input type="password" class="formzao" name="senha" placeholder="Senha" id="senha">
                    <i class="fa-regular fa-eye" id="show-password"></i>

                    <p id=""><a class="esqueceur" href="redefinirsenha.php">Esqueceu sua senha?</a></p>
                    <!-- <input type="button" value="" href="home.html"> -->
                    <!-- <button type="button" id="botaologin" onclick="window.location.href='./home.php'">Login</button> -->
                    <input type="submit" value="Login" id="botaologin">

                    <p id="naotenho">Não tem uma conta?</p>
                    <a class="cadastre-se" href="cadastro.php">Cadastre-se</a>

                    <!-- <input type="button" value="Click Me" onclick=""/> -->

                    <script>
                        const senhaInput = document.getElementById("senha");
                        const showPasswordIcon = document.getElementById("show-password");

                        showPasswordIcon.addEventListener("click", () => {
                            if (senhaInput.type === "password") {
                                senhaInput.type = "text";
                            } else {
                                senhaInput.type = "password";
                            }
                        });    
                    </script>
                </form>
            </div>
        </div>
    </div>

</body>

</html>