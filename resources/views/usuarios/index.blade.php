@extends('layouts.app')

@section('content')

	<div class="container">
		<h2>Usuarios</h2>
		@can('usuarios.create')
		<a class="btn btn-info pull-right" href="{{ route('bienes.create') }}">
	        <i class="fas fa-fw fa-upload"></i>
	        <span class="mx-1">Cargar nuevo Bien</span>
	    </a>
	    @endcan
	    <table class="table table-bordered" id="tb">
	       <thead>
	          <tr>
	             <th>Id</th>
	             <th>Name</th>
	             <th>Email</th>
             	<th>Opciones</th>
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
			"ajax": 'usuario',
			"columns": [
	            { "data": "id" },
	            { "data": "name" },
	            { "data": "email" },
	            { "data": null, render: function(data,type,row){
	            	return `
	            	<a href='#' class='btn btn-default btn-sm'  data-toggle='modal' data-target='#modal-editar' title='Editar'><i class="fa fa-fw fa-edit mr-1"></i></a>
	            	<a href='#' class='btn btn-warning btn-sm'><i class="fa fa-fw fa-edit mr-1"></i></a>
	            	<a href='#' onclick='eliminar("${data.id}")' title='Eliminar' class='btn btn-danger btn-sm'><i class="fa fa-fw fa-trash-alt mr-1"></i></a>`;
	            }}],
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