<!-- QUEM SOMOS -->

	<div class="divmaster" id="sobrenos">
		<section class="titulo">

			<h1>SOBRE NÓS</h1>
			<hr>
			<?php
				foreach ($descricao as $sobre){
			?>
			<p>
				<?php echo $sobre->descricao ?>
			</p>
			<?php
				}
			?>
			<ul class="img">
				<li>
					<img src="<?php echo base_url('/assets/frontend/img/missao.png'); ?>">
					<h4>MISSÃO</h4>
				</li>
				<li>
					<img src="<?php echo base_url('/assets/frontend/img/visao.png'); ?>">
					<h4>VISÃO</h4>
				</li>
				<li>
					<img src="<?php echo base_url('/assets/frontend/img/valor.png'); ?>">
					<h4>VALORES</h4>
				</li>
			</ul>

		</section>
	</div>