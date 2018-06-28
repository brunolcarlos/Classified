	<div class="col s12 m12 l4 AnunciosCarrosPatrocinado"  style='width:300px;height:auto;padding: 0 !important;margin-top: 0px;'>

		<h2 class="h1DescCarro" style='margin-top:73px;margin-bottom: 3px;color:#fff;padding: 5px;background: #0288d1;border-radius: 2px;text-align: center;'>Click image to change</h2>

		<?php if ($this->session->flashdata('error')) {
			echo "<p style='padding:5px;background:red;color:#fff;text-align:center;border-radius:3px'>".$this->session->flashdata('error')."</p>";
		} ?>
		<form action="<?= base_url("edit/alteraFoto") ?>" enctype="multipart/form-data" method='post'>
			<div class='form-group'>
				<br>
				<label for="fileUpload" id="image-holder" >
					<img style='width: 300px;cursor: pointer;border:solid 1px #ccc;padding: 5px;border-radius: 2px' src="<?= base_url("$dados[foto]") ?>" alt="<?= base_url("$dados[foto]") ?>" title="CLICK IMAGE TO CHANGE - Carsalenew.com">
				</label>
				<input style='display: none' required="" type="file" name="media" id="fileUpload" class='form-control'>
				<div id="image-holder" class='ExibeImg'></div>
				<div class="progress">
					<div class="indeterminate"></div>
				</div>
				<br>
				<br>
				<button disabled="" class='btn btn-primary enviar'><span class='glyphicon glyphicon-picture'> </span> Send photo</button>
			</div>
		</form>
	</div>

	<script>
		$(".progress").hide();
		$("#fileUpload").on('change', function () {

			if (typeof (FileReader) != "undefined") {

				var image_holder = $("#image-holder");
				image_holder.empty();
				var reader = new FileReader();
				reader.onload = function (e) {
					$("<img />", {
						"src": e.target.result,
						"style": "width:300px;height:290px;border: solid 1px #ccc;padding: 5px;border-radius: 2px",
						"class": "ExibeImg"
					}).appendTo(image_holder);
				}
				image_holder.show();
				reader.readAsDataURL($(this)[0].files[0]);

				$(".enviar").css("background",'orange');
				$(".enviar").prop("disabled",false);


			} else{
				alert("Este navegador nao suporta FileReader.");
			}
		});

		$(".enviar").click(function(event) {
			$(".progress").show();
		});
	</script>