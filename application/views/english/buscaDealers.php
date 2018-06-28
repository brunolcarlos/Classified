<span id="scrollTop"></span>
<!-- #263238 blue-grey darken-4 -->
<div class="row " id="clicafora" style='margin-bottom: 0;position: fixed;width: 100%;z-index: 999;top: 0 !important;background: #990013;border-bottom: solid 2px #212121'>
	<div class="container buscaContainer" style='width: 96.5%'>
		<div class="col s9 m6 l6">
			<input type="text" id="nomedealer" style='border-radius: 2px;border:none' placeholder="Search for Delaers">
			<span id="recebeDealers"></span>
		</div>
		<div class="col s3 m6 l6" >
			<a class="scroll" href="#scrollTop">
				<img src="<?= base_url('img/logo2.fw.png') ?> " alt="" id='imgLogoLoad'>
			</a>
		</div>
	</div>
</div>


<style>

	#imgLogoLoad{
		width: 100px;
		margin-top: 10px;
		float: right;
	}
	#nomedealer{
		background: #fff;
		height: 20px;
		margin-top: 10px;
		margin-bottom: 10px;
		border:none;
		padding: 5px;
		color: #666; 
		font-size: 10px; 
		text-transform: uppercase !important;
	}
	.nomedealer{

		background: #fff;
		height: 20px;
		margin-top: 10px;
		margin-bottom: 10px;
		border:none;
		padding: 5px;
		color: #666; 
		font-size: 10px; 
		text-transform: uppercase !important;
	}
	.nomedealerLoad{
		background-image: url(./img/preload.gif) !important;
		background-repeat: no-repeat  !important;
		background-position: 98% 40%  !important;
		background: #fff;
		height: 20px;
		margin-top: 10px;
		margin-bottom: 10px;
		border:none;
		padding: 5px;
		color: #666; 
		font-size: 10px; 
		text-transform: uppercase !important;
	}
	.dealersClass{
		background: #f5f5f5 !important;
		border-bottom:solid 1px #ccc;
		margin-bottom:1px !important;
		margin-top:1px !important;
		height:35px;
		padding:2px;
		line-height:33px;
	}
	.dealersClass:hover{
		background: #ef6c00 !important;
	}
	.trocaCorLiDealer{
		margin-left:10px !important;
		float:left;
		
	}
	.AtrocaCorDealer{
		color: #666 !important;		
	}
	.AtrocaCorDealer:hover{
		color: #fff !important;		
	}

	#recebeDealers{
		display: none;
		width: 300px;
		max-height: 300px;
		overflow: auto;
		padding: 2px;
		padding-top: 2px;
		position: absolute;
		top: 41px;
		background: #fff;
		color: #fff;
		text-transform: uppercase;
		font-size: 10px;

	}


	@media (max-width: 1000px) {
		.buscaContainer{
			width: 97% !important;
		}
	}

	@media (max-width: 700px) {
		.buscaContainer{
			width: 98% !important;
		}
	}
	@media (max-width: 500px) {
		.buscaContainer{
			width: 100% !important;
		}

		#imgLogoLoad{
			width: 60px;
			margin-top: 18px;
			float: right;
		}

	}

</style>

<script>
	
	$('#nomedealer').keyup(function(event) {
		var infos = $('#nomedealer').val();
		$("#nomedealer").addClass("nomedealerLoad");

		var url = "<?= base_url('buscadealers/search') ?> ";
		$.post(url, 
		{
			infos: infos
		}, function(data) {
			$('#recebeDealers').show();
			$('#recebeDealers').html(data);

			if (!data) {
				$('#recebeDealers').hide();
			}
		});
	});

	$('body').click(function(){
		$('#recebeDealers').hide();
		$("#nomedealer").removeClass("nomedealerLoad");
		$("#nomedealer").addClass("nomedealer");

	})
</script>