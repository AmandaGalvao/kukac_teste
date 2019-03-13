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
</head>
<div class="container">

    <br>
    <div class="col-md-11">

        <div class="card">
            <div class="card-header">
                <div style="text-align: center"><b>Resultados</b></div>
            </div>
            <form action="{{ url('/valida') }}" method="get" enctype="multipart/form-data">
                <div class="card-body">
                    {{ csrf_field() }}

                    <div class="row">
                        <?php
                        if(!empty($nome)){
                            ?>
                            <div class="col-md-6 col-md-offset-2">
                                <div class="form-group">
                                    <label for="nome">Nome Completo</label>
                                    <input type="text" class="form-control{{$errors->has('nome') ? ' is-invalid':''}}" value="{{$nome}}" id="nome" name="nome" placeholder="Digite seu nome">
                                    <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
                                </div> 
                                </div>      
                                <?php
                            }else{
                            }
                            ?>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="cep">CEP</label>
                                <input type="text" required class="form-control{{$errors->has('cep') ? ' is-invalid':''}}" value="{{$retorno->cep}}" id="cep" name="cep">
                                <div class="invalid-feedback">{{ $errors->first('cep') }}</div>
                            </div>
                        </div>
                         <div class="col-md-6">
                         <div class="form-group">
                                <label for="logradouro">Logradouro</label>
                                <input type="text" required class="form-control{{$errors->has('logradouro') ? ' is-invalid':''}}" value="{{$retorno->logradouro}}" id="logradouro" name="logradouro">
                                <div class="invalid-feedback">{{ $errors->first('logradouro') }}</div>
                            </div>
                        </div>
                         <div class="col-md-6">
                         <div class="form-group">
                                <label for="bairro">Bairro</label>
                                <input type="text" required class="form-control{{$errors->has('bairro') ? ' is-invalid':''}}" value="{{$retorno->bairro}}" id="bairro" name="bairro">
                                <div class="invalid-feedback">{{ $errors->first('bairro') }}</div>
                            </div>
                        </div>
                         <div class="col-md-6">
                         <div class="form-group">
                                <label for="localidade">Localidade</label>
                                <input type="text" required class="form-control{{$errors->has('localidade') ? ' is-invalid':''}}" value="{{$retorno->localidade}}" id="localidade" name="localidade">
                                <div class="invalid-feedback">{{ $errors->first('localidade') }}</div>
                            </div>
                        </div>
                         <div class="col-md-6">
                         <div class="form-group">
                                <label for="uf">UF</label>
                                <input type="text" required class="form-control{{$errors->has('uf') ? ' is-invalid':''}}" value="{{$retorno->uf}}" id="uf" name="uf">
                                <div class="invalid-feedback">{{ $errors->first('uf') }}</div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="renda">Renda Familiar Per Capta</label>
                                <input type="text" required class="form-control{{$errors->has('renda') ? ' is-invalid':''}}" value="{{ $rendaPerCapta }}" id="renda" name="renda">
                                <div class="invalid-feedback">{{ $errors->first('renda') }}</div>
                            </div>              

                            
                    </div>
                </div>
                    <div class="card-footer text-right">

                        <a href="#" onclick="history.back()" class="btn btn-info">Voltar</a>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>