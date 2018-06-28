<div class="row container">
	<div class="col s12 m12 l8 AnunciosCarros">
		<h1 class="h1DescCarro">Check Vin Number</h1>

			<div class="modal-content">
				<div class="col s12">
					<div class="row">
						<form class="col s12 m12 l12">
							<div class="row">
								<div class="input-field col s12 m12 l12">
									<input id="vinnumber" type="text" length="17">
									<label for="input_text">Enter Vin</label>
								</div>
								<div class="input-field col s12 m12 l12">
									<a class="waves-effect waves-light btn #0d47a1 blue darken-4 white-text" id="btnVin">Check</a>
								</div>
								<div class="input-field col s12 m12 l12">
									<div class="input-field col s12 m12 s12" id="erroEmail">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script>
				$('#btnVin').click(function(event) {
					event.preventDefault();
					var vin = $('#vinnumber').val();
					var url = "<?= base_url('vin/vinn') ?>";

					$.post(url, 
					{
						vin: vin
					}, function(data) {

						$('#erroEmail').html("<img src='<?= base_url('img/l568ECv.gif')?>'' alt='' id='imgLoad'>");
						$('#imgLoad').show();
						setTimeout(function(){
							$('#imgLoad').hide();
							$('#erroEmail').html(data);
						}, 3000);
						
					});
				});
			</script>