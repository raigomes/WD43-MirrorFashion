<?php 
	$cabecalho_title = "Mirror Fashion";
	$cabecalho_reset_css = "<link rel='stylesheet' href='css/reset.css'>";
	$cabecalho_css = "<link rel='stylesheet' href='css/estilos.css'>";
	$cabecalho_css_mobi = "<link rel='stylesheet' href='css/mobile.css' media='(max-width: 939px)'>";
	include("cabecalho.php"); 
?>

<br><br>
<div class="container destaque">
	<section class="busca">
		<h2>Busca</h2>
		<form>
			<input type="search">
			<input type="image" src="img/busca.png">
		</form>
	</section><!-- fim .busca -->
	<section class="menu-departamentos">
		<h2>Departamentos</h2>
		<nav>
			<ul>
				<li>
					<a href="#">Blusas e Camisas</a>
					<ul>
						<li><a href="#">Manga curta</a></li>
						<li><a href="#">Manga comprida</a></li>
						<li><a href="#">Camisa social</a></li>
						<li><a href="#">Camisa casual</a></li>
					</ul>
				</li>
				<li><a href="#">Calças</a></li>
				<li><a href="#">Saias</a></li>
				<li><a href="#">Vestidos</a></li>
				<li><a href="#">Sapatos</a></li>
				<li><a href="#">Bolsas e Carteiras</a></li>
				<li><a href="#">Acessórios</a></li>
			</ul>
		</nav>
	</section><!-- fim .menu-departamentos -->
	<img src="img/destaque-home.png" alt="Promoção: Big City Night">
</div><!-- fim .container .destaque -->

<div class="container paineis">
	<section class="painel novidades">
		<h2>Novidades</h2>
		<ol>
			<!-- primeiro produto -->
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura1.png">
						<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura2.png">
						<figcaption>Camisa Caveira por R$ 39,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura3.png">
						<figcaption>Conjunto Blazer+Camisa Verão por R$ 69,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura4.png">
						<figcaption>Jaqueta Femme Fatalle por R$ 99,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura5.png">
						<figcaption>Camiseta Gym por R$ 29,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura9.png">
						<figcaption>Camisa Xadrez linha Sedução por R$ 59,90</figcaption>
					</figure>
				</a>
			</li>
		</ol>
	</section>
	<section class="painel mais-vendidos">
		<h2>Mais Vendidos</h2>
		<ol>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura9.png">
						<figcaption>Camisa Xadrez linha Sedução por R$ 59,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura14.png">
						<figcaption>Camisa Ocean por R$ 69,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a href="produto.html">
					<figure>
						<img src="img/produtos/miniatura15.png">
						<figcaption>Vestido Perfume do Campo por R$ 79,90</figcaption>
					</figure>
				</a>
			</li>
		</ol>
	</section>
</div>

<?php include("rodape.php"); ?>