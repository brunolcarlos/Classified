<br>
<div class="row container">
	<div class="col s12 m12 l12 AnunciosCarrosUsername">

		<div class="row"><!-- começa o card -->
			<div class="col s12 m7 l7">
				<div class="card z-depth-0" style='position: relative; border:solid 1px #ccc;height: auto;padding: 5px;background: #fafafa'>
					<div class="card-image imageCard">
						<img class="imgCards" src="<?= base_url($dados['capaLogo']) ?>" style='border-bottom: solid 5px #e65100;'>
						<span class="spancirculo">
							<img class="imgcirculo z-depth-1" alt="<?= html_escape($dados['nome'])?>" class="carrosFotominiCard" src="<?= base_url($dados['foto']) ?>" title='Seller <?= html_escape(substr($dados['nome'],0,18))?>'>
						</span>
					</div>
					
					<div class="card-content textosCard" style='background: #212121  ;color: #fff;border-bottom: solid 5px #e65100;height: 360px'>
						<h2 style='font-size: 1.6em;text-transform: capitalize;'><?= html_escape($dados['nome']) ?></h2>
						<ul style=''>
							<li>Address : <?= html_escape($dados['endereco'])?></li>
							<li>Phone   : <?= html_escape($dados['telefone'])?></li>
							<li>City    : <?= html_escape($dados['cidade'])?></li>
							<li>State   : <?= html_escape($dados['state'])?></li>
							<li>Seller  : <?= html_escape($dados['nome'])?></li>
							<li>E-mail  : <?= html_escape($dados['email'])?></li>
							<li>Website : <a style='font-size: 1em !important;color: #fb8c00 !important' class='#1e88e5 blue-text darken-1' href="http://<?= retirahttp($dados['site'])?>" target="_blank"><?= retirahttp($dados['site'])?></a></li>
							<?php if(isset($dados['speak'])): ?>
								<li>Speak</li>
								<li><?= languagesBandeiras($dados['speak']) ?></li>
							<?php endif; ?>
						</ul>
					</div>
					<div class="card-action " style='margin-bottom: 14px'>
						<div class="row">
							<form class="col s12">
								<h2 class="h1DescCarro">Send Email</h2>

								<div class="row">
									<div class="input-field col s12">
										<input id="nameU" type="text" class="validate">
										<label for="nameU" data-error="wrong" data-success="right">Name</label>
									</div>
									<div class="input-field col s12">
										<input id="phoneU" type="text" class="telefone">
										<label for="phoneU" data-error="wrong" data-success="right">Phone</label>
									</div>
									<div class="input-field col s12">
										<input id="emailU" type="email" class="validate">
										<label for="emailU" data-error="wrong" data-success="right">E-mail</label>
									</div>
									<div class="input-field col s12">
										<textarea id="messageU" class="materialize-textarea"></textarea>
										<label for="messageU">Textarea</label>
									</div>
									<button class="btn waves-effect waves-light right #fb8c00 orange darken-1" type="submit" id="btnContatcUserList" name="action" style='margin-right: 8px'>Submit
									</button>
									<div class="col s12 erroEmail" id="erroUsername"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col s12 m5 l5 padding3">
				<div class="col s12 m12 l12 externaLista ">
					<h2 class="h1DescCarro">Last posts</h2>
					<?php foreach ($carros as $dado) :?>
						<?php 
						$fotos = $this->carroshome->puxaThumb($dado['id']);
						?>
						<a href="<?= base_url("car/$dado[id]") ?>">
							<div class='listaCarros'>
								<div class='fundoFotoListaPerfil col s5 m5 l5' style='padding-left: 0' >
									<img class='carrosFotomini z-depth-1' src="<?= base_url($fotos['caminho']."thumb/".$fotos['thumb']) ?>" alt="" style='border: none;border-radius: 3px;margin-top: 7px;margin-left: 7px'>
								</div>
								<div class='col s7 m7 l7 listaModelos black-text'>
									<ul>
										<li><h6 style='font-size: 1.2em;font-weight: bold'><?= html_escape(substr($dado['modelo'],0,20)) ?></h6></li>
										<li>Year  : <?= html_escape(substr($dado['year'],0,15)) ?></li>
										<li>Price : 
											<?=  ($dado['price'])? html_escape(numeroEmReais(substr($dado['price'],0,7)) ): "check" ?>
											<hr style='color: #fff;background: #fff;'>
											<li>Seller  : <?= html_escape(substr($dados['nome'],0,20)) ?></li>

										</li>
									</ul>
								</div>
							</div>
						</a>
					<?php endforeach ?>
				</div>
			</div>
		</div>

	</div>
</div>


<script>

	function validaDadosForm(){
		var nameU = $("#nameU").val().length;
		var emailU = $("#emailU").val().length;
		var phoneU = $("#phoneU").val().length;
		var messageU = $("#messageU").val().length;
		if (nameU > 0 & emailU > 0 &  phoneU > 0  & messageU > 0) {
			return true;
		}else{
			$("#nameU").focus();
			$("#erroUsername").html("All fields is required");
			return false;

		}
	}

	jQuery(document).ready(function($) {

		$("#btnContatcUserList").click(function(event) {
			event.preventDefault();

			if (validaDadosForm()) {
				var nameU = $("#nameU").val();
				var emailU = $("#emailU").val();
				var phoneU = $("#phoneU").val();
				var messageU = $("#messageU").val();
				var username = "<?= $dados['usernameUrl'] ?>";

				var url ="<?= base_url('home/contactusername') ?>";

				$.post(url,{
					nameU : nameU,
					emailU : emailU,
					phoneU : phoneU,
					messageU : messageU,
					username : username

				}, function(data) {
					$("#erroUsername").html(data);
					$("#nameU").val("");
					$("#phoneU").val("");
					$("#emailU").val("");
					$("#messageU").val("");
				});
			}

		});
	});

</script>

<style>
	.imgcirculo{
		width:155px !important;
		height: 155px !important;
		border-radius: 5px !important;
		/* border:solid 5px #212121 !important; */
		object-fit: cover;
		object-position: center;
	}
	.spancirculo{
		position: absolute !important;
		top: 55% !important;
		left: 38% !important;
	}
	@media (max-width: 1100px) {
		.imgcirculo{
			width:40% !important;
			height: 40% !important;
			border-radius: 5px !important;
			/* border:solid 4px #212121 !important; */
			object-fit: cover;
			object-position: center;
		}
		.spancirculo{
			position: absolute !important;
			top: 48% !important;
			left: 38% !important;
		}
	}
	@media (max-width: 1000px) {
		.imgcirculo{
			width:40% !important;
			height: 40% !important;
			border-radius: 5px !important;
			/* border:solid 4px #212121 !important; */
			object-fit: cover;
			object-position: center;
		}
		.spancirculo{
			position: absolute !important;
			top: 55% !important;
			left: 38% !important;
		}
	}

	@media (max-width: 430px) {
		.imgCards{
			height: 160px;
		}
		.imgcirculo{
			width:48% !important;
			height: 48% !important;
			border-radius: 5px !important;
			/* border:solid 3px #212121 !important; */
			object-fit: cover;
			object-position: center;
		}
		.spancirculo{
			position: absolute !important;
			top: 50% !important;
			left: 32% !important;
		}
	}
	@media (max-width: 330px) {
		.imgCards{
			height: 160px;
		}
		.imgcirculo{
			width:48% !important;
			height: 48% !important;
			border-radius: 5px !important;
			/* border:solid 3px #212121 !important; */
			object-fit: cover;
			object-position: center;
		}
		.spancirculo{
			position: absolute !important;
			top: 62% !important;
			left: 33% !important;
		}
	}


</style>