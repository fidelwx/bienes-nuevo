@extends('layouts.app')

@section('content')

<div class="container">
	<h2>Bienes</h2>
	@can('bienes.create')
		<a class="btn btn-info pull-right" href="{{ route('bienes.create') }}">
	        <i class="fas fa-fw fa-upload"></i>
	        <span class="mx-1">Cargar nuevo Bien</span>
	    </a>
    @endcan
    <table class="table table-bordered pull-left" id="tb">
       <thead>
          <tr>
             <th>Id</th>
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
             <th>Opciones</th>
          </tr>
       </thead>
    </table>

    {{-- Modal --}}
	<div class="modal fade" id="modal-editar">
      <div class="modal-dialog">
        <div class="modal-content">
	    <form method="post" id="form-discapacidadu">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
          	<label for="nameU">Nombre:<small class="text-danger">*</small></label>
          	<input type="text" class="form-control" id="nameU" name="name" placeholder="Ingrese el nombre de la discapacidad">
          	{{-- <input type="hidden" name="_method" value="{{ csrf_field() }}" > --}}
          	<input type="hidden" name="id" id="idU">
          </div>
          <div class="modal-footer">
        	<input type="submit" name="submit" value="Actualizar" class="btn btn-success btn-block pull-right">
          </div>
	    </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    {{-- Modal --}}

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
	            { "data": "id" },
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
	            { "data": "price" },
	            { "data": null, render: function(data,type,row){
	            	return `
	            	<a href='#' onclick='ver("${data.id}")' data-toggle='modal' data-target='#modal-ver' title='Ver' class='btn btn-warning btn-sm'><i class="fa fa-fw fa-edit mr-1"></i></a>
	            	<a href='#' onclick='editar("${data.id}")' data-toggle='modal' data-target='#modal-editar' title='Editar' class='btn btn-warning btn-sm'><i class="fa fa-fw fa-edit mr-1"></i></a>
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