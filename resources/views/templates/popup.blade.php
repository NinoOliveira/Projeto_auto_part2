<!--DOCTYPE html-->
<html>
	<head>
		<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/estilo.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/fontAwesome.css') }}" />
		<script src="{{ asset('js/jquery.js') }}"></script>
		<script src="{{ asset('js/bootstrap.js') }}"></script>
		<script src="{{ asset('js/jquery.mask.js') }}"></script>
		<script src="{{ asset('js/script.js') }}"></script>
		<script src="{{ asset('js/fontAwesome.js') }}"></script>
	</head>
	<body>
		
		@if (Session::get("status") == "salvo")
			<div class="alert alert-success" role="alert">
				Salvo com sucesso!
			</div>
		@endif
		
		@if (Session::get("status") == "excluido")
			<div class="alert alert-danger" role="alert">
				Excluído com sucesso!
			</div>
		@endif
		
		<div class="container" style="padding: 20px;">
		
			@yield("cadastro")
			
			@yield("listagem")
			
		</div>
	</body>
</html>