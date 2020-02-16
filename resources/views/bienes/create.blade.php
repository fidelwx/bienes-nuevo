@extends('layouts.app')

@section('content')

<div class="container">
	<h2>Nuevo Bien</h2>
	<div class="card-body">
        <form id="my_form" method="post">
        {{ csrf_field() }}
            <div class="row mb-4">
                <div class="col">
                    <select class="browser-default custom-select" name="category_id" id="category_id">
                    <option selected disabled>Categoria</option>
                    @foreach($tcategorias as $categoria)
                    <option value="{{ $categoria->code }}">{{ $categoria->description }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col">
                    <select class="browser-default custom-select" name="type_id" id="type_id">
                        <option selected disabled>Tipo de Bien</option>
                        @foreach($ttipos as $tipo)
                        <option value="{{ $tipo->code }}">{{ $tipo->description }}</option>
                        @endforeach
                  </select>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <select class="browser-default custom-select" name="dependence_id" id="dependence_id">
                        <option selected disabled>Dependencia</option>
                        @foreach($tdependencias as $dependencia)
                        <option value="{{ $dependencia->code }}">{{ $dependencia->dependence }}</option>
                        @endforeach
                  </select>
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Correlativo" name="correlative" id="correlative">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <input type="text" class="form-control mb-4" placeholder="Código completo" name="complete_code" id="complete_code">
                    <textarea class="form-control" id="description" placeholder="Descripcion del Bien" name="description" rows="5"></textarea>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <input type="date" class="form-control" placeholder="Fecha de compra" name="purchase_date" id="purchase_date">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Cantidad" name="quantity" id="quantity">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Orden de compra" name="purchase_order" id="purchase_order">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Serial del Bien" name="serial" id="serial">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Origen" name="origin" id="origin">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Precio" name="price" id="price">
                </div>
                <input type="hidden" name="status" value="1">
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" id="guardar" class="btn btn-success btn-block btn-lg" name="save" >Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
	$("#category_id").on("change",function(e){
		codigo(e);
    });
    $("#type_id").on("change",function(e){
		codigo(e);
    });
    $("#dependence_id").on("change",function(e){
		codigo(e);
    });
    $("#correlative").on("change",function(e){
		codigo(e);
    });

    function codigo(e){
    	console.log('0' + category_id.value)
    	$('#complete_code').val(`${'0' + category_id.value}-${type_id.value}-${dependence_id.value}-${correlative.value}`);
    }

	$("#guardar").on("click",function(event){
    	event.preventDefault();
    	guardar();
    });

    function guardar(){
    	var form = $('#my_form').serialize();
        var url = '{{ Route('bienes.store') }}';

        $.ajax({
            type: 'post',
            url: url,
            data: form,
            dataType: 'json',
            success: function(data) {
                $('#category_id').val('Categoria')
                $('#type_id').val('Tipo de Bien')
                $('#dependence_id').val('Dependencia')
                $('#correlative').val('')
                $('#complete_code').val('')
                $('#description').val('')
                $('#purchase_date').val('')
                $('#quantity').val('')
                $('#purchase_order').val('')
                $('#serial').val('')
                $('#origin').val('')
                $('#price').val('')
                console.log('success');
                console.log(data);
            },
            error: function(data) {
                var errors = data.responseJSON;
            }
        });
    }
</script>

@endsection