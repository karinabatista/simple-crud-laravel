@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	Todos os Imóveis
                	<a class="float-right" href="{{ url('/imoveis/novo') }}">Novo Imóvel</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                    	<th>Título</th>
                    	<th>Código</th>
                    	<th>Tipo</th>
                    	<th>Bairro</th>
                    	<th>Cidade</th>
                    	<th>Preço</th>
                    	<th>Area</th>
                    	<th>Ações</th>
                    	<tbody>
                    	@foreach($immobile as $immobile)
                    		<tr>
	                    		<td>{{$immobile->immobile_title}}</td>
	                    		<td>{{$immobile->immobile_code}}</td>
	                    		<td>{{$immobile->immobile_type}}</td>
	                    		<td>{{$immobile->immobile_address_district}}</td>
	                    		<td>{{$immobile->immobile_address_city}}</td>
	                    		<td>{{$immobile->immobile_price}}</td>
	                    		<td>{{$immobile->immobile_area}}</td>
	                    		<td>
	                    			<a href="imoveis/{{ $immobile->id }}/editar" class="btn btn-default btn-sm">Editar</a>
	                    			{!!Form::open(['method' => 'DELETE','url' => '/imoveis/'.$immobile->id])!!}
	                    				<button type="submit" class="btn btn-default btn-sm">Excluir</button>
	                    			{!!Form::close()!!}
	                    		</td>
                    		</tr>
                    	@endforeach	
                    	</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection