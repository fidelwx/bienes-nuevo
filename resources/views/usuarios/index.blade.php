@extends('layouts.app')

@section('content')

	@if(Auth::check())
        @if(Auth::user()->role_id == 1)
            
        	<div class="container">
				<h2>Usurarios</h2>
			    <table class="table table-bordered" id="tb">
			       <thead>
			          <tr>
			             <th>Id</th>
			             <th>Name</th>
			             <th>Email</th>
			          </tr>
			       </thead>
			    </table>
			</div>

        @elseif(Auth::user()->role_id == 2)
            <h2>No Tienes Acceso a este Modulo</h2>
        @endif
    @endif

	

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
	            { "data": "email" }
	    	]
		});
	}
	</script>

@endsection