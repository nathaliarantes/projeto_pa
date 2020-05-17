
	<section>
		<div class="container-fluid">
			<div class="row">
				<img src="<?=base_url('assets/imagens/banner.jpg')?>" width="100%">
			</div>
		</div>
	</section>

	<!-- PESQUISA -->
	<section class="pt-0">
		<div class="container-fluid bg-primary py-5">
			<div class="row py-3">
				<div class="col-12 text-center">
					<h1 class="text-white font-weight-bold">Encontre um projeto para participar:</h1>
				</div>
			</div>
			<div class="row py-3 justify-content-center">
				<div class="col-8">
					<form class="form-inline d-flex justify-content-center md-form form-sm">
					  <input class="form-control form-control-lg mr-3 w-75" type="text" placeholder="Pesquise por título, instituição ou área de conhecimento" aria-label="Procurar">
					   <button class="btn btn-primary no-hover" type="submit"><i class="fas fa-search" aria-hidden="true"></i></button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- /PESQUISA -->

	<section class="pt-0 pb-5 bg-light">
		<div class="container-full px-5 py-5">
			<div class="row">
				<div class="col-md-9">
					<div class="row">
						<div class="col-12">
							<h3 class="font-weight-bold">Navegue por Área de Conhecimento:</h3>
						</div>
					</div>
					<div class="row mt-4">
						<div class="col-md-2">
							<a href="" class="btn btn-warning" role="button" style="border-radius: 0px;">Computação</a>
						</div>
						<div class="col-md-2">
							<a href="" class="btn btn-warning" role="button" style="border-radius: 0px;">Arquitetura</a>
						</div>
						<div class="col-md-2">
							<a href="" class="btn btn-warning" role="button" style="border-radius: 0px;">Engenharia</a>
						</div>
						<div class="col-md-2">
							<a href="" class="btn btn-warning" role="button" style="border-radius: 0px;">Psicologia</a>
						</div>
						<div class="col-md-2">
							<a href="" class="btn btn-warning" role="button" style="border-radius: 0px;">Biologia</a>
						</div>
						<div class="col-md-2">
							<a href="" class="btn btn-primary" role="button" style="border-radius: 0px;">Ver todas</a>
						</div>
					</div>
					<div class="row mt-5 pt-5">
						<div class="col-12">
							<h3 class="font-weight-bold">Projetos em Destaque</h3>
						</div>
					</div>
					<div class="row mt-4">
			            <div class="col-md-3 col-6">
			            	<img class="foto-projeto mb-2" src="<?=base_url('assets/imagens/projeto_01.jpg')?>" width="100%">
			                <h5>Nome Projeto</h5>
			                <span>Criado por <a href="">Nome</a></span>
			                <a></a>
			            </div>
			            <div class="col-md-3 col-6">
			            	<img class="foto-projeto mb-2" src="<?=base_url('assets/imagens/projeto_02.jpg')?>" width="100%">
			                <h5>Nome Projeto</h5>
			                <span>Criado por <a href="">Nome</a></span>
			            </div>
			            <div class="col-md-3 col-6">
			            	<img class="foto-projeto mb-2" src="<?=base_url('assets/imagens/projeto_03.jpg')?>" width="100%">
			                <h5>Nome Projeto</h5>
			                <span>Criado por <a href="">Nome</a></span>
			            </div>
			            <div class="col-md-3 col-6">
			            	<img class="foto-projeto mb-2" src="<?=base_url('assets/imagens/projeto_04.jpg')?>" width="100%">
			                <h5>Nome Projeto</h5>
			                <span>Criado por <a href="">Nome</a></span>
			            </div>
					</div>
					<div class="row mt-4">
						<div class="col-12 text-center">
							<a href="" class="btn btn-primary btn-lg" role="button" style="border-radius: 0px;">Ver mais</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-12 text-center">
							<a href="ranking.php"><h5 class="font-weight-bold">Ranking</h5></a>
							<h3 class="pt-2 text-warning">TOP 20 <i class="fas fa-trophy"></i></h3>
							<ul class="list-group mt-4">

								<?php foreach($usuariosRank as $ur):?>
									<li class="list-group-item"><a href=""><?=$ur['nome']?></a></li>
								<?php endforeach;?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>