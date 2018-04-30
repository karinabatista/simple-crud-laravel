@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	Cadastrar novo imóvel
                	<a class="float-right" href="{{ url('/imoveis') }}">Todos Imóveis</a>
                </div>

                <div class="card-body">
                   @if(Session::has('success'))
                   		<div class="alert alert-success">{{ Session::get('success') }}</div>
                   @endif

                   @if(Session::has('error'))
                   		<div class="alert alert-danger">{{ Session::get('error') }}</div>
                   @endif
                   
                   @if(Request::is('*/editar'))
                   		{!! Form::model($immobile, ['method' => 'PATCH', 'route' => ['immobile.update', $immobile->id, 'files'=>'true']])!!}

                   @else
                   		{!! Form::open(['url' => 'imoveis/salvar', 'files'=>'true'])!!}	
                   @endif
                   		{!!Form::label('Título do Imóvel', 'Título do Imóvel') !!}	
                   		{!!Form::input('text', 'immobile_title', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Título do imóvel']) !!}

                   		{!!Form::label('Código do imóvel', 'Código do imóvel') !!}
                   		{!!Form::input('text', 'immobile_code', null, ['class' => 'form-control', '', 'placeholder' => 'Código do imóvel']) !!}

                   		{!!Form::label('Tipo do imóvel', 'Tipo do imóvel') !!}
                   		{!!Form::input('text', 'immobile_type', null, ['class' => 'form-control', '', 'placeholder' => 'Tipo do imóvel']) !!}

                   		{!!Form::label('Endereço do imóvel', 'Endereço do imóvel') !!}
                   		{!!Form::input('text', 'immobile_address_name', null, ['class' => 'form-control', '', 'placeholder' => 'Endereço do imóvel']) !!}

                   		{!!Form::label('Número', 'Número') !!}
                   		{!!Form::input('text', 'immobile_address_number', null, ['class' => 'form-control', '', 'placeholder' => 'Endereço do imóvel']) !!}

                   		{!!Form::label('Bairro', 'Bairro') !!}
                   		{!!Form::input('text', 'immobile_address_district', null, ['class' => 'form-control', '', 'placeholder' => 'Endereço do imóvel']) !!}

                   		{!!Form::label('CEP', 'CEP') !!}
                   		{!!Form::input('text', 'immobile_address_CEP', null, ['class' => 'form-control', '', 'placeholder' => 'Endereço do imóvel']) !!}

                   		{!!Form::label('Cidade', 'Cidade') !!}
                   		{!!Form::input('text', 'immobile_address_city', null, ['class' => 'form-control', '', 'placeholder' => 'Endereço do imóvel']) !!}

                   		{!!Form::label('Estado', 'Estado') !!}
                   		{!!Form::input('text', 'immobile_address_state', null, ['class' => 'form-control', '', 'placeholder' => 'Endereço do imóvel']) !!}

                   		{!!Form::label('Preço do imóvel', 'Preço do imóvel') !!}
                   		{!!Form::input('text', 'immobile_price', null, ['class' => 'form-control', '', 'placeholder' => 'Preço do imóvel']) !!}

                   		{!!Form::label('Área do imóvel (m²)', 'Área do imóvel (m²)') !!}
                   		{!!Form::input('text', 'immobile_area', null, ['class' => 'form-control', '', 'placeholder' => 'Área do imóvel']) !!}

                   		{!!Form::label('Quantidade de dormitórios', 'Quantidade de dormitórios') !!}
                   		{!!Form::selectRange('immobile_bedroom', 0, 10)!!}

                   		{!!Form::label('Suites', 'Suites') !!}
                   		{!!Form::selectRange('immobile_suite', 0, 10)!!}

                   		{!!Form::label('Benheiros', 'Benheiros') !!}
                   		{!!Form::selectRange('immobile_toilet', 0, 10)!!}

                   		{!!Form::label('Salas', 'Salas') !!}
                   		{!!Form::selectRange('immobile_room', 0, 10)!!}

                   		{!!Form::label('Garagem', 'Garagem') !!}
                   		{!!Form::selectRange('immobile_garage', 0, 10)!!}

                   		{!!Form::label('Descrição do imóvel', 'Descrição do imóvel') !!}
                   		{!!Form::input('text', 'immobile_description', null, ['class' => 'form-control', '', 'placeholder' => 'Descrição do imóvel']) !!}

                   		{!!Form::label('Insira a imagem do imóvel', 'Insira a imagem do imóvel') !!}
                   		{!!Form::file('immobile_image', null, ['class' => 'form-control', '', 'placeholder' => 'Imagem do imóvel']) !!}

                   		{!!Form::submit('Salvar', ['class' => 'btn btn-primary'])!!}
                   {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection