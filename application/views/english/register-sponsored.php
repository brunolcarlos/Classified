<?php if (!$this->session->userdata('logado')) : ?>
	<div class='col s12 m12 l4' style="margin-top: 2px;">
		<h1 class="h1DescCarro" style="margin-bottom: 16px;margin-top: 35px;">Register</h1>
		<div class="modal-content">
			<div class="row z-depth-0 #f5f5f5 grey lighten-4 registro"  data-spy="affix" data-offset-top="60" data-offset-bottom="200" style="border: solid 1px #eeeeee;border-bottom:solid 4px #e0e0e0">
				<form class="col s12 m12 s12 " id="formCadastro" method="post" autocomplete="off">
					<div class="row">
						<div class="input-field col s12 m6 s6">
							<input id="name" type="text" name="name" class="validate" >
							<label for="name">Name</label>
						</div>
						<div class="input-field col s12 m6 s6">
							<input id="phone" type="text" name="phone" required="" class="telefone">
							<label for="phone">Phone</label>
						</div>
						<div class="input-field col s12 m12 l12">
							<input id="email" type="email" name="email" required="">
							<label for="email" id="emailErro" data-error="Incorrect format">Email</label>
						</div>
						<div class="input-field col s12 m12 l12">
							<select name="state" required="" id="state">
								<option value="all">Select state *</option>
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
							<input id="password" type="password" required="" name="password" class="validate" autocomplete="off">
							<label for="password">Password</label>
						</div>

					</div>
					<div class="modal-footer">
						<button type="submit" class="waves-effect waves-light  btn white-text #fb8c00 orange darken-1" id="cadastrarP" style="margin-bottom: 7px;">Register</button>
					</div>
				</form>
			</div>

		</div>
	</div>
<?php endif; ?>

<script>
	$(document).ready(function(){ $("#name").val('') }); 
	$(document).ready(function(){ $("#email").val('') }); 
	$(document).ready(function(){ $("#password").val('') }); 

</script>