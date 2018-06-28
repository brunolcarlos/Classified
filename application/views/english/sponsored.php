	<div class="col s12 m12 l4 AnunciosCarrosPatrocinado"  style='width:300px;height:auto;padding: 0 !important;margin-top: 0px;'>
		<h1 class="h1DescCarro" style='margin-bottom:22px'>Sponsoreds</h1>
		<!--Aqui fecha Publicidade-->
		<?php foreach ($banners as $banner):?>
			<?php
			$datas = $this->banners_model->validaDataBanner($banner['VencUserBanner']);
			if ($datas) :?>
			<a href='http://<?= $banner['linkRedirect'] ?>' alt='<?= html_escape($banner['linkRedirect']) ?>' title='<?= html_escape($banner['linkRedirect']) ?>' style='text-align: center;'>
				<img src='<?= base_url("admin/".$banner['bannerCaminho'].$banner['bannerNome']) ?>' alt='<?= html_escape($banner['linkRedirect']) ?>' title='<?= html_escape($banner['linkRedirect']) ?>' style='width: 300px; margin-bottom: 25px !important;border:solid 1px #e0e0e0;border-radius: 2px;margin-left: 0;border-bottom:solid 4px #e0e0e0' class='z-depth-0'>
			</a>
		<?php endif; ?>
	<?php endforeach;?>

</div>

</div><!--Aqui fecha a div container que envolve todo o corpo do site-->
