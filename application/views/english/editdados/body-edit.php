<div class="row container">
	<div class="col s12 m12 l7 AnunciosCarros" style='margin-right: 75px;'>
		<h1 class="h1DescCarro" style='margin-top: 28px'>Edit information</h1>
		
		<?php if (!$dados['speak']) : ?>
			<div class="col s12 m12 l12">
				<p class="z-depth-1 flashData">
					<i class="material-icons alinhaIcone margenIcone">announcement</i>
					You need to select your language.
				</p>
			</div>
		<?php endif; ?>
		<div class="modal-content">
			<div class="row z-depth-0" style="border: solid 1px #ccc;border-radius: 2px;">
				<form class="col s12 m12 s12" style="padding-top: 10px" method="post">
					<div class="row">
						<div class="input-field col s12 m12 s12" style='height: 90px'>
							<input id="urlEdit" type="text" onkeyup="this.value = Trim( this.value )" value="<?= html_escape($dados['usernameUrl']) ?>" class="validate" >
							<label for="urlEdit"><span id="urls">http://carsalenew.com/</span><span id="urlCuston"><?= ($dados['usernameUrl'])? html_escape($dados['usernameUrl']) : "username" ?></span></label>
							<span id="erroUsername"></span>
							<br><br>
						</div>
						<div class="input-field col s12 m12 s12" style='height: 100px'>
							<button class="btn waves-effect waves-light #ef6c00 orange darken-3" type="submit" name="action" id="BtnurlEdit">Submit Url
							</button>
						</div>
						<div class="input-field col s12 m6 s6">
							<input id="nameEdit" type="text" value="<?= html_escape($dados['nome'] )?>" disabled class="validate" >
							<label for="nameEdit">Name</label>
						</div>
						<div class="input-field col s12 m6 s6">
							<input id="telEdit" type="text" value="<?= html_escape($dados['telefone']) ?>" disabled class="telefone" >
							<label for="telEdit">Phone</label>
						</div>
						<div class="input-field col s12 m12 s12">
							<input id="siteEdit" type="text" value="<?= html_escape($dados['site']) ?>" disabled class="validate" >
							<label for="siteEdit">Website ex: www.mywebsite.com</label>
						</div>
						<div class="input-field col s12 m12 s12">
							<input id="addressEdit" type="text" value="<?= html_escape($dados['endereco']) ?>" disabled class="validate" >
							<label for="addressEdit">Address</label>
						</div>
						<div class="input-field col s12 m12 s12">
							<input id="emailEdit" type="email" value="<?= html_escape($dados['email']) ?>" disabled class="validate" >
							<label for="emailEdit" data-error="Incorrect format">Email</label>
						</div>

						<div class="col s12 m12 l12" id="speakdivFake">
							<select disabled name="speak" id="speakFake">
								<option value="<?= html_escape($dados['speak']) ?>"><?= languagesEdit($dados['speak']); ?></option>
							</select>
							<label>Do you speak ?</label>
						</div>

						<div class="col s12 m12 l12" id="speakdiv">
							<select name="speak" required="" id="speak">
								<?php if($dados['speak']) : ?>
									<option value="<?= html_escape($dados['speak']) ?>"><?= languagesEdit($dados['speak']); ?></option>
								<?php else : ?>
									<option value="">Select your language</option>
								<?php endif; ?>
								<option value="e">English</option>
								<option value="es">English + Spanish</option>
								<option value="ep">English + Portuguese</option>
								<option value="esp">English + Spanish + Portuguese</option>
								<option value="s">Spanish</option>
								<option value="sp">Spanish + Portuguese</option>
								<option value="p">Portuguese</option>
							</select>
							<label>Do you speak ?</label>
						</div>

						<div class="input-field col s12 m12 l12" id="stateEditD">
							<select name="" required="" disabled="" id="stateEditFake">
								<option value="<?= html_escape($dados['state']) ?>"><?= ($dados['state']) ?></option>

							</select>
						</div>

						<div class="input-field col s12 m12 l12" id="stateEditDO">

							<select name="stateEdit" required="" id="stateEdit">
								<option value="<?= $dados['state'] ?>"><?= html_escape($dados['state']) ?></option>
								<option value="AK">AK</option>
								<option value="AL">AL</option>
								<option value="AR">AR</option>
								<option value="AZ">AZ</option>
								<option value="CA">CA</option>
								<option value="CO">CO</option>
								<option value="CT">CT</option>
								<option value="DC">DC</option>
								<option value="DE">DE</option>
								<option value="FL">FL</option>
								<option value="GA">GA</option>
								<option value="HI">HI</option>
								<option value="IA">IA</option>
								<option value="ID">ID</option>
								<option value="IL">IL</option>
								<option value="IN">IN</option>
								<option value="KS">KS</option>
								<option value="KY">KY</option>
								<option value="LA">LA</option>
								<option value="MA">MA</option>
								<option value="MD">MD</option>
								<option value="ME">ME</option>
								<option value="MI">MI</option>
								<option value="MN">MN</option>
								<option value="MO">MO</option>
								<option value="MS">MS</option>
								<option value="MT">MT</option>
								<option value="NC">NC</option>
								<option value="ND">ND</option>
								<option value="NE">NE</option>
								<option value="NH">NH</option>
								<option value="NJ">NJ</option>
								<option value="NM">NM</option>
								<option value="NV">NV</option>
								<option value="NY">NY</option>
								<option value="OH">OH</option>
								<option value="OK">OK</option>
								<option value="OR">OR</option>
								<option value="PA">PA</option>
								<option value="RI">RI</option>
								<option value="SC">SC</option>
								<option value="SD">SD</option>
								<option value="TN">TN</option>
								<option value="TX">TX</option>
								<option value="UT">UT</option>
								<option value="VA">VA</option>
								<option value="VT">VT</option>
								<option value="WA">WA</option>
								<option value="WI">WI</option>
								<option value="WV">WV</option>
								<option value="WY">WY</option>
							</select>
							<label>State</label>
						</div>
						<div class="input-field col s12 m12 s12">
							<input id="cidadeEdit" type="text" value="<?= html_escape($dados['cidade']) ?>" disabled class="validate" >
							<label for="cidadeEdit" >Cidade</label>
						</div>
						<div class="input-field col s12 m12 s12">
							<input id="passwordEditOld" type="password"  class="password" disabled>
							<label for="passwordEditOld">Password old</label>
						</div>
						<div class="input-field col s12 m12 l12">
							<input id="passwordEditNew" type="password"  class="password" disabled>
							<label for="passwordEditNew">New password</label>
						</div>
						<span id="retorno"></span>
					</div>
					<div class="modal-footer right-align col s12 m12 l12">
						<button style='margin-bottom: 10px' id="btnVeditar" class="waves-effect waves-light btn white-text #e53935 red darken-1">Edit</button>
						<span id="retorno"></span>
					</div>
					<div class="modal-footer right-align col s5 m9 l9">
						<button style='margin-bottom: 10px' id="btnEdit" class="waves-effect waves-light btn white-text #afb42b lime darken-2">Confirm</button>
						<span id="retorno"></span>
					</div>
					<div class="modal-footer right-align col s7 m3 l3">
						<button style='margin-bottom: 10px' id="btnBCancel" class="waves-effect waves-light btn white-text #1565c0 blue darken-3">Cancel</button>
						<span id="retorno"></span>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			$("#btnEdit").hide();
			$("#btnBCancel").hide();
			$("#stateEditDO").hide();
			$("#speakdiv").hide();

			$("#btnVeditar").on("click",function(event) {
				event.preventDefault();
				$("#btnVeditar").hide();
				$("#btnEdit").show();
				$("#btnBCancel").show();
				$("#nameEdit").prop("disabled", false);
				$("#addressEdit").prop("disabled", false);
				$("#siteEdit").prop("disabled", false);
				$("#urlEdit").prop("disabled", false);
				$("#cidadeEdit").prop("disabled", false);
				$("#telEdit").prop("disabled", false);
				$("#stateEditD").hide();
				$("#stateEditDO").show();
				$("#speakdivFake").hide();
				$("#speakdiv").show();
				$("#passwordEditOld").prop("disabled", false);
				$("#passwordEditNew").prop("disabled", false);
			});

			$("#btnBCancel").on("click",function(event) {
				event.preventDefault();
				$("#btnVeditar").show();
				$("#btnEdit").hide();
				$("#btnBCancel").hide();
				$("#nameEdit").prop("disabled", true);
				$("#siteEdit").prop("disabled", true);
				$("#addressEdit").prop("disabled", true);
				$("#emailEdit").prop("disabled", true);
				$("#cidadeEdit").prop("disabled", true);
				$("#urlEdit").prop("disabled", false);
				$("#telEdit").prop("disabled", true);
				$("#stateEditD").show();
				$("#stateEditDO").hide();
				$("#speakdivFake").show();
				$("#speakdiv").hide();
				$("#passwordEditOld").prop("disabled", true);
				$("#passwordEditNew").prop("disabled", true);
			});

			$("#btnBCancel").click(function(event) {
				event.preventDefault();
			});




			$('#btnEdit').click(function(event) {
				event.preventDefault();
				var nameEdit = $('#nameEdit').val();
				var telEdit = $('#telEdit').val();
				var emailEdit = $('#emailEdit').val();
				var stateEdit = $('#stateEdit').val();
				var addressEdit = $('#addressEdit').val();
				var siteEdit = $('#siteEdit').val();
				var speak = $('#speak').val();
				var Newspeak = $('#speak option:selected').text();
				var cidadeEdit = $('#cidadeEdit').val();
				var passwordEditOld = $('#passwordEditOld').val();
				var passwordEditNew = $('#passwordEditNew').val();
				var value = stateEdit;
				if (passwordEditNew === "") {
					$("#retorno").html("<span class='alinhaTexto'><i class=' material-icons alinhaIcone margenIcone text-red'>thumb_up</i>Password New is Required </span>");
				}else{
					$.post('<?= base_url("edit/editardados") ?>', {
						nameEdit: nameEdit,
						telEdit: telEdit,
						emailEdit: emailEdit,
						cidadeEdit: cidadeEdit,
						addressEdit: addressEdit,
						speak: speak,
						siteEdit: siteEdit,
						stateEdit: stateEdit,
						passwordEditOld: passwordEditOld,
						passwordEditNew: passwordEditNew
					}, function(data) {
						if (data === "1") {
							$('#stateEditD').html("<span class='spanDados'>New State : "+stateEdit+"</span>");
							$('#speakdivFake').html("<span class='spanDados'>New Laguage : "+Newspeak+"</span>");
							$("#nameEdit").prop("disabled", true);
							$("#telEdit").prop("disabled", true);
							$("#emailEdit").prop("disabled", true);
							$("#addressEdit").prop("disabled", true);
							$("#siteEdit").prop("disabled", true);
							$("#cidadeEdit").prop("disabled", true);
							$("#stateEditD").show();
							$("#stateEditDO").hide();
							$("#btnVeditar").show();
							$("#speakdivFake").show();
							$("#speakdiv").hide();
							$(".flashData").hide();
							$("#btnEdit").hide();
							$("#btnBCancel").hide();
							$("#passwordEditOld").prop("disabled", true);
							$("#passwordEditNew").prop("disabled", true);
							$("#retorno").html("<span class='alinhaTexto'><i class=' material-icons alinhaIcone margenIcone text-red'>thumb_up</i>Success</span>");
						}else{
							$("#nameEdit").prop("disabled", false);
							$("#telEdit").prop("disabled", false);
							$("#siteEdit").prop("siteEdit", false);
							$("#speak").prop("disabled", false);
							$("#addressEdit").prop("addressEdit", false);
							$("#emailEdit").prop("disabled", true);
							$("#cidadeEdit").prop("disabled", false);
							$("#stateEditD").hide();
							$("#stateEditDO").show();
							$("#speakdivFake").hide();
							$("#speakdiv").show();
							$("#passwordEditOld").prop("disabled", false);
							$("#passwordEditNew").prop("disabled", false);
							$("#retorno").html(data);
						}
					});
				}

				

			});
			

			$("#urlEdit").keyup(function() {
				var text = $(this).val();
				text =  $.trim(text);
				$("#urlCuston").html(text);
				var url = "<?= base_url("edit/username") ?>";
				$.post(url,{
					username : text
				},function(data){
					$("#erroUsername").html(data);	
				});
			});

			$("#BtnurlEdit").click(function(event) {
				event.preventDefault();
				var texto = $("#urlEdit").val();
				var url = "<?= base_url("edit/usernameupdate") ?>";
				$.post(url,{
					urlEdit : texto
				},function(data){
					$("#erroUsername").html(data);	
				});
			});

		});

function Trim(str){
	return str.replace(/^\s+|\s+$/g,"");
}

</script>

<style>
	#urlCuston{
		padding: 5px !important;
		background: #ef6c00 !important;
		color: #fff;
	}
	#urls{
		padding: 5px !important;
		background: #666 !important;
		color: #fff;
	}
</style>