<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleindex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href=" ./img/logo_original_sombra.png">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <title>Inscrever-se em Dev Experience</title>
</head>

<body>
    <div class="main">
        <div class="lado-esq">
            <img id="logologin1" src="img/logo_original_sombra.png">
            <h1 id="titulo">Se inscreva no projeto!</h1>
            <p id="text">Descubra um mundo de inovação e aprendizado na "SENAI Dev Experience"! É mais do que uma competição; é uma
                oportunidade de mergulhar em desafios práticos. Se você está pronto para explorar o
                universo da tecnologia inscreva-se agora na "SENAI Dev Experience". Estamos ansiosos para receber novos talentos e criar juntos soluções
                inovadoras para os desafios do mundo real</p>
        </div>
        <div class="lado-dir">
            <!-- <img id="logoLoginDir" src="img/WEEK.png"> -->
            <!-- <h1 id="tituloDir">Bem vindo ao Week!</h1> -->
            <div class="logo-responsiva">
                <img id="logologin" src="../img/SENAI_logodeitado.png">
            </div>
            <div class="container">

                <form id="cadastro-form" method="post" action="processar_login.php">
                    <h1 id="logintitulo">Inscrever-se</h1>
                    <label>Qual é o nome da equipe? (Exemplo: Equipe Alfa Beta)</label>
                    <img id="img-user" src="img/people.png">
                    <input type="text" class="formzao" name="user" 
                        autocomplete="off" id="usuario">
                    <label>Digite o nome completo de cada integrante da equipe.</label>
                    <img id="img-user" src="img/name.png">
                    <input type="text" class="formzao" name="user"
                        autocomplete="off" id="usuario">
                    <label>Qual a idade atual de cada participante?</label>
                    <img id="img-user" src="img/age.png">
                    <input type="text" class="formzao" name="user" 
                        autocomplete="off" id="usuario">
                    <label>Qual é o CPF de cada participante da equipe?</label>
                    <img id="img-user" src="img/cpf.png">
                    <input type="text" class="formzao" name="user" 
                        autocomplete="off" id="usuario">
                    <label>Qual o e-mail corporativo ou pessoal de cada integrante da equipe?</label>
                    <img id="img-user" src="img/email.png">
                    <input type="text" class="formzao" name="user" 
                        autocomplete="off" id="usuario">


                    <!-- <input type="button" value="" href="home.html"> -->
                    <!-- <button type="button" id="botaologin" onclick="window.location.href='./home.php'">Login</button> -->
                    <input type="submit" value="Inscrever-se" id="botaologin">


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