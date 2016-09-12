<?php get_header(); ?>
		<!-- QUEM SOMOS ###########################################################################################################
		-->
	<div class="container-fluid  bgwhite box-shadow" id="quemsomos">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<h1 class="noticias-titulo">Quem Somos</h1>
					<div class="col-xs-offset-4 col-xs-4 decoracao bgdarkgray"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="col-xs-6">
						<div class="col-xs-offset-1">
							<h3 class="arial font18" id="missao"><em>Missão</em></h3>
						</div>
					</div>	
				</div>
			</div>
			<div class="row">
				<div class="col-xs-offset-1 col-xs-11">
					<p class="droid">Com o objetivo de promover pesquisa de caráter multidisciplinar e inter-institucional, prestando serviços, divulgação de conhecimentos na área da Saúde Coletiva e Nutrição e colaborar direta ou indiretamente na formulação de soluções para os problemas de saúde da comunidade, o NESC tem como missão:
realizar produção educativa em serviço no campo da saúde coletiva, orientada aos trabalhadores do SUS, além de apoiar a pesquisa, ensino e extensão, por meio de processos de aprendizagem no trabalho na Paraíba e internamente à UFPB.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 text-center">
					<h2>Equipe</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3 text-center">
					<div class="col-xs-12">FOTO</div>
					<div class="row">
						nome do membro
					</div>
					<div class="row">
						icone
					</div>
					<div class="row">
						<a href="#">baixar lattes</a>
					</div>
				</div>

				<div class="col-xs-3 text-center">
					<div class="col-xs-12">FOTO</div>
					<div class="row">
						nome do membro
					</div>
					<div class="row">
						icone
					</div>
					<div class="row">
						<a href="#">baixar lattes</a>
					</div>
				</div>

				<div class="col-xs-3 text-center">
					<div class="col-xs-12">FOTO</div>
					<div class="row">
						nome do membro
					</div>
					<div class="row">
						icone
					</div>
					<div class="row">
						<a href="#">baixar lattes</a>
					</div>
				</div>

				<div class="col-xs-3 text-center">
					<div class="col-xs-12">FOTO</div>
					<div class="row">
						nome do membro
					</div>
					<div class="row">
						icone
					</div>
					<div class="row">
						<a href="#">baixar lattes</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- NOTÍCIAS ###########################################################################################################
-->
	<div class="container-fluid bgorange box-shadow"  id="noticias">
		<div class="container">
			<div class="row">
				<h1 class="noticias-titulo text-center whiteletter">Notícias</h1>
				<div class="col-xs-offset-4 col-xs-4 decoracao bgdarkorange"></div>
			</div>

			<div class="row">
				
			<?php while ( have_posts() ) : the_post() ?>
				<div class="col-xs-offset-1 col-xs-5 bloconoticia bgwhite">
					<div class="row">
						<div class="col-xs-12">
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
									<div class="col-xs-6 noticiathumbnail">
										<?php if ( has_post_thumbnail() ){
											the_post_thumbnail();
											}
										?>
								
									</div>
									<div class="col-xs-6 noticiatexto">
										<div class="noticiatitulo font15 bold">
											<?php the_title(); ?><br>
										</div>
										<div class="noticiaconteudo">
											<?php the_content(); ?>
										</div>
									</div>
								</a>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
				
				<!-- <div class="col-xs-offset-1 col-xs-5 bloconoticia bgwhite">
					<div class="col-xs-12 text-center">
						IMAGEM
					</div>
					<div class="row">
						<div class="col-xs-12 text-center">
							<a href="#">Titulo da noticia</a>
						
						</div>
					</div>
				</div> -->
			</div>

			<div class="row">
				<div class="col-xs-offset-5 col-xs-2 text-center">
					<a href="" class="noticiasbotao"><h3 class="font14">Ver todos</h3></a>
				</div>
			</div>
		</div>
	</div>



	<!-- CONTATO ##########################################################################################################
	 -->

	<div class="container-fluid bgblue box-shadow" id="contato">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<h1 class="noticias-titulo whiteletter">Contato</h1>
					<div class="col-xs-offset-4 col-xs-4 decoracao bgdarkerblue"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-offset-1 col-xs-5 mapa bgwhite" id="mapa">
					MAPA
				</div>
				<div class="col-xs-offset-1 col-xs-4 text-left grayletter">
					<div class="row">
						<div class="col-xs-12" id="chegar">
							<p class="info"><img src="trunk/mail.png" alt="Email">secnesc@ccs.ufpb.br</p><br>
							<p class="info"><a href="https://www.facebook.com/nesc.ufpb/?ref=bookmarks"><img src="trunk/face.png" alt="Facebook">/Nesc.UFPB</p></a><br>
							<p class="info"><img src="trunk/tel.png" alt="Telefone">(83) 3216-7249</p><br>
							<p>Universidade Federal da Paraíba. Centro de Ciências da Saúde. NESC - Núcleo de Estudos em Saúde Coletiva.
							Endereço: Cidade Universitária, s/n. Bloco tal, 2º andar - CEP: 58.051-900. João Pessoa - PB.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- FOOTER ##########################################################################################################
	-->
<?php get_footer(); ?>