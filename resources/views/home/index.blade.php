<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
</head>
<div class="container">

	<br>
	<div class="col-md-11">

		<div class="card">

			<div class="card-header">
				<div style="text-align: center"><b>Dados do Usuário</b></div>
			</div>
			<form action="{{ url('/valida') }}" method="get" enctype="multipart/form-data">
				<div class="card-body">
					{{ csrf_field() }}

					<div class="row">
						<div class="col-md-6 col-md-offset-2">
							<div class="form-group">
								<label for="nome">Nome Completo</label>
								<input type="text" class="form-control{{$errors->has('nome') ? ' is-invalid':''}}" value="{{ old('nome') }}" id="nome" name="nome" placeholder="Digite seu nome">
								<div class="invalid-feedback">{{ $errors->first('nome') }}</div>
							</div>       

							<div class="form-group">
								<label for="cep">CEP*</label>
								<input type="text" required class="form-control{{$errors->has('cep') ? ' is-invalid':''}}" value="{{ old('cep') }}" id="cep" name="cep">
								<div class="invalid-feedback">{{ $errors->first('cep') }}</div>
							</div>
						</div>

						
						<script type="text/javascript">

							$("#cep").mask("00000-000");

						</script>
						<div class="col-md-6">
							<div class="form-group">
								<label for="renda">Renda Familiar*</label>
								<input type="text" required class="form-control{{$errors->has('renda') ? ' is-invalid':''}}" value="{{ old('renda') }}" id="renda" name="renda">
								<div class="invalid-feedback">{{ $errors->first('renda') }}</div>
							</div>              

							<script type="text/javascript">

								$('#renda').mask('#.##0,00', {reverse: true});

							</script>

							<div class="form-group">
								<label for="qtDependentes">Quantidade de dependentes*</label>
								<input type="text" required class="dinheiro form-control" style="display:inline-block" value="{{ old('qtDependentes') }}" id="qtDependentes" name="qtDependentes">
								<div class="invalid-feedback">{{ $errors->first('qtDependentes') }}</div>
							</div>              
						</div>
					</div>
					<div class="card-footer text-right">

						<button type="submit" class="btn btn-info">Validar Dados</button>

					</div>
					<p><b>* Campos obrigatórios</b>
					</form>
				</div>
			</div>
		</div>
	</div>