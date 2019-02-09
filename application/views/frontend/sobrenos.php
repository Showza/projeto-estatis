<!-- QUEM SOMOS -->

	<div class="divmaster" id="sobrenos">

		<section class="titulo">
			
			<h1>SOBRE NÓS</h1>
			<hr>
			<?php 
				foreach ($descricao as $sobre){
			?>
				<ul class="img">
						<figure>
							<img src="<?php echo base_url('/assets/frontend/img/missao.png'); ?>"><h4>MISSÃO</h4>
							<figcaption>
								<p><?php echo $sobre->missao?></p>		
							</figcaption>
						</figure>

						<figure>
							<img src="<?php echo base_url('/assets/frontend/img/visao.png'); ?>"><h4>VISÃO</h4>
							<figcaption>
								<p><?php echo $sobre->visao?></p>		
							</figcaption>
						</figure>	

						<figure>
							<img src="<?php echo base_url('/assets/frontend/img/valor.png'); ?>"><h4>VALORES</h4>							
							<figcaption>
								<p><?php echo $sobre->valores?></p>		
							</figcaption>
						</figure>	
				</ul>
			<?php  
			}
			?>
		</section>
	</div>