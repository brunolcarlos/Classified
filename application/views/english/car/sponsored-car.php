
<div class="col s12 m12 l4 AnunciosCarrosPatrocinado" style='padding: 0'>
	<?php foreach ($carros as $dado): ?>
		<?php $this->load->model("carroshome");
		$fotos = $this->carroshome->puxaThumb($dado['id'])?>
		<a href="<?= base_url("car/$dado[id]-".str_replace(" ","-",removehtml($dado['modelo']))) ?>" style="padding: 0 !important; margin: 0 !important; border:none !important;background: transparent !important;" alt='<?= $dado['modelo'] ?>' title='<?= $dado['modelo'] ?>' title='<?= $dado['modelo'] ?>' alt='<?= $dado['modelo'] ?>'>

		<div class="col s12 m4 l9" style='padding: 0;'>
				<div class='page-car-suge' style='border-radius: 2px;height: 250px;border:solid 1px #e0e0e0;border-bottom:solid 4px #e0e0e0;'>
					<div class="col s12 m12 l12 linhaAnuSuge">
						<span class='priceSugestao'>
							<?=  ($dado['price'])? html_escape(numeroEmReais(substr($dado['price'],0,7))) : "check" ?>
						</span>
						<img src="<?= base_url($fotos['caminho']."thumb/".$fotos['thumb']) ?>" alt="<?= html_escape(substr($dado['modelo'],0,20))?>"  title='<?= html_escape(substr($dado['modelo'],0,20))?>' class='imgSuge'>
					</div>
					<div class="col s12 m12 l12 descriFotoSuge" style='line-height: 30px'>
						<?= html_escape(substr($dado['modelo'],0,20))?>
					</div>
				</div>
			</div>
		</a>
	<?php endforeach; ?>
</div>
</div><!--Aqui fecha a div container que envolve todo o corpo do site-->