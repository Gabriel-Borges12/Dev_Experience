<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/index.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap"rel="stylesheet'>
	<link rel="shortcut icon" href="./img/logo_original.png" type="image/x-icon">
	<title>Dev expirence</title>
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
                            <li><a href="#sobre">Sobre</a></li>
                            <li><a href="#modulo">Módulos</a></li>
							<li><a href="#edicoes">Edições</a></li>
							<li><a href="#vencedores">Vencedores</a></li>

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
			<div class="galery">
				<!-- galeria de imagens -->
				<div class="app">
					<div class="cardList">
						<button class="cardList__btn btn btn--left">
							<div class="icon">
								<svg>
									<use xlink:href="#arrow-left"></use>
								</svg>
							</div>
						</button>

						<div class="cards__wrapper">
							<div class="card current--card">
								<div class="card__image">
									<img src="https://ap.senai.br/wp-content/uploads/2018/09/Simulado-preparat%C3%B3rio-ao-ENEM-%C3%A9-realizado-por-alunos-do-SESI-e-do-SENAI-Amap%C3%A1.jpg"
										alt="" />
								</div>
							</div>

							<div class="card next--card">
								<div class="card__image">
									<img src="https://al.sesi.com.br/public/noticia/cache/1280x720/1583_enem-cambona-3-.jpeg"
										alt="" />
								</div>
							</div>

							<div class="card previous--card">
								<div class="card__image">
									<img src="https://www.sistemafibra.org.br/sesi/sobradinho/images/categorias/noticias/2018/05-maio/SAEP-senai.jpg"
										alt="" />
								</div>
							</div>
						</div>

						<button class="cardList__btn btn btn--right">
							<div class="icon">
								<svg>
									<use xlink:href="#arrow-right"></use>
								</svg>
							</div>
						</button>
					</div>

					<div class="infoList">
						<div class="info__wrapper">
							<div class="info current--info">
								<h1 class="text name">Dev expirience</h1>
								<h4 class="text location">Senai</h4>
								<p class="text description">exemplo</p>
							</div>

							<div class="info next--info">
								<h1 class="text name">Dev expirience</h1>
								<h4 class="text location">Senai</h4>
								<p class="text description">exemplo</p>
							</div>

							<div class="info previous--info">
								<h1 class="text name">Dev expirience</h1>
								<h4 class="text location">Senai</h4>
								<p class="text description">exemplo</p>
							</div>
						</div>
					</div>

					<div class="app__bg">
						<div class="app__bg__image current--image">
							<img src="https://ap.senai.br/wp-content/uploads/2018/09/Simulado-preparat%C3%B3rio-ao-ENEM-%C3%A9-realizado-por-alunos-do-SESI-e-do-SENAI-Amap%C3%A1.jpg"
								alt="" />
						</div>
						<div class="app__bg__image previous--image">
							<img src="https://www.sistemafibra.org.br/sesi/sobradinho/images/categorias/noticias/2018/05-maio/SAEP-senai.jpg"
								alt="" />
						</div>
						<div class="app__bg__image next--image">
							<img src="https://al.sesi.com.br/public/noticia/cache/1280x720/1583_enem-cambona-3-.jpeg"
								alt="" />
						</div>
					</div>
				</div>


				<div class="loading__wrapper">
					<div class="loader--text">Please Wait...</div>
					<div class="loader">
						<span></span>
					</div>
				</div>


				<svg class="icons" style="display: none;">
					<symbol id="arrow-left" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
						<polyline points='328 112 184 256 328 400'
							style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
					</symbol>
					<symbol id="arrow-right" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
						<polyline points='184 112 328 256 184 400'
							style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
					</symbol>
				</svg>
				<script src='https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js'></script>
				<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js'></script>
				<script src="./galeria.js"></script>

				<!-- fim da galeria de imagens -->
			</div>
			<div class="sobre" id="sobre">
				<div class="text">
					<h1>SENAI Dev Experience</h1>
					<div class='linhazinha'></div>
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
				<div class="imagemlogo">
					<img src="img/SENAI_logodeitado.png" alt="">
				</div>
			</div>

            <div class="text-1" id="modulo">
<div class="box-text">
<h1>Módulos da Competição.</h1>
<div class="linha"></div>
<h3>Módulo A: Programação de aplicações web.</h3>
<p>No módulo A, espera-se que o estudante implemente soluções web responsivas que atendam demandas
específicas do mercado de trabalho. A avaliação dos resultados será realizada de acordo com os critérios
de qualidade de software previstos na ISO/IEC 25010: Eficiência, responsividade, acessibilidade,
memorabilidade, manutenibilidade e confiabilidade. Este módulo visa não apenas testar a
proficiência técnica dos estudantes, mas também incentivar a criação de aplicações web que atendam
às demandas específicas do mercado de trabalho atual.</p>

<h3>Módulo B: Infraestrutura e Segurança Cibernética</h3>
<p>No módulo B, espera-se que o estudante adote boas práticas de programação que objetivem mitigar
o risco de ataques cibernéticos e exploração de vulnerabilidades de segurança. O estudante deverá
ainda ser capaz de analisar arquivos de tráfego malicioso de redes de computadores demonstrando
conhecimento prático de investigação de incidentes para detecção de anomalias. A avaliação será
realizada com base na eficácia das medidas de segurança implementadas e resultados obtidos após a
análise.</p>

<h3>Módulo C: Inovação Tecnológica</h3>
<p>No Módulo C, Inovação Tecnológica, espera-se que os participantes explorem sua criatividade e
habilidades de resolução de problemas para propor soluções inovadoras e disruptivas. Neste módulo,
espera-se que os estudantes identifiquem desafios relevantes no campo da tecnologia e proponham
soluções inovadoras. A avaliação será realizada com base na originalidade, viabilidade técnica e
potencial impacto positivo na indústria, dentro dos diferentes tipos de inovação - produtos,
serviços, processos e marketing – tendo como referência as temáticas de: tecnologia da informação,
empreendedorismo e sustentabilidade (ambiental e/ou social).</p>
</div>
</div>

		</div>

	</main>
    
    <footer>
        <div class="conteudogeral">
            <div class="conteudo1">
                <img id="logofooter" src="img/logo_original_sombra.png">
            </div>
            <div class="conteudo2">
                <h4>Links Importantes</h4><br>
                <ul class="linksfooter">
                <li><a class="linksimportantes" href="funcionalidades.php">Sobre Nós</a></li>
                <li><a class="linksimportantes" id="linksimportantes" href="img/Termos.pdf" target="_blank">Módulos</a></li>
                    <li><a class="linksimportantes" href="#">Galeria</a></li>

            </div>
            <div class="conteudo3">
                <h4>Siga nossas redes sociais!</h4>
                <div class="social-icons">
                    <!-- ícones encontrados no site icons8.com.br -->
                    <a href="https://www.sp.senai.br/" class="social-icon"><img
                            src="img/icons8-facebook-48.png" alt="Facebook"></a>
                    <a href="https://www.sp.senai.br/" class="social-icon"><img
                            src="img/icons8-twitter-48 (1).png" alt="Twitter"></a>
                    <a href="https://www.sp.senai.br/" class="social-icon"><img src="img/icons8-instagram-50 (1).png"
                            alt="Instagram"></a>
                    <br><br>
                    <h5>Dúvidas ou sugestões?</h5>
                    <a href="#" class="linkemail">emailaqui@gmail.com</a><br>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>