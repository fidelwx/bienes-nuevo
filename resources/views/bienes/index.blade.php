@extends('layouts.app')

@section('content')

<div class="container">
	<h2>Bienes</h2>
	<a class="btn btn-info" href="{{ route('bienes.create') }}">
        <i class="fas fa-fw fa-upload"></i>
        <span class="mx-1">Cargar nuevo Bien</span>
    </a>
    <table class="table table-bordered" id="tb">
       <thead>
          <tr>
             <th>Categoria</th>
             <th>Tipo</th>
             <th>Dependencia</th>
             <th>Correlativo</th>
             <th>Codigo Completo</th>
             <th>Descripcion</th>
             <th>Fecha Compra</th>
             <th>Cantidad</th>
             <th>Orden de Comprar</th>
             <th>Serial</th>
             <th>Origen</th>
             <th>Precio</th>
          </tr>
       </thead>
    </table>
</div>

<script>
	$(document).ready( function () {
	    listar();
	});

	function listar(){
		var tabla = $('#tb').DataTable({
			"processing": 'true',
			"ajax": 'bien',
			"columns": [
	            { "data": "category_id" },
	            { "data": "type_id" },
	            { "data": "dependence_id" },
	            { "data": "correlative" },
	            { "data": "complete_code" },
	            { "data": "description" },
	            { "data": "purchase_date" },
	            { "data": "quantity" },
	            { "data": "purchase_order" },
	            { "data": "serial" },
	            { "data": "origin" },
	            { "data": "price" }],
	        "language": {
	        	"info": "_TOTAL_ registros",
	        	"search": "Buscar",
	        	"paginate": {
	        		"next": "Siguiente",
	        		"previous": "Anterior"
	        	},
	        	"lengthMenu": 'Mostrar <select>'+
	        				'<option value="10">10</option>'+
	        				'<option value="25">25</option>'+
	        				'<option value="50">50</option>'+
	        				'<option value="100">100</option>'+
	        				'<option value="1">Total</option>'+
	        				'</select> registros',
	        	"loadingRecords": "Cargando...",
	        	"processing": "Procesando...",
	        	"emptyTable": "No hay datos",
	        	"zeroRecords": "No hay coincidencias",
	        	"infoEmpty": "",
	        	"infoFiltered": "",
	        }
    	});
	}
</script>

@endsection