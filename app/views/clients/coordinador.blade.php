@extends('layout.layout')
@section('titulo')
Coordinadores
@stop
@section('head')
@parent
{{ HTML::style('styles/start/jquery-ui-1.10.4.custom.min.css'); }}
        <!-- Common Scripts: -->
        {{ HTML::script('scripts/jquery-ui.min.js'); }}
        <script type="text/javascript">
        $(document).ready(function(){
        	$('#vtnClienteModal').dialog({
        	  autoOpen: false,
              resizable: false,
              modal: true,
        	});
        	$('#nuevo').on('click', function(){
        		$('#vtnClienteModal').dialog('open');
        	});
        	$('#btnClienteGuardad').on('click', function(){
        		var name = $('#firstName').val();
        		var lastname = $('#lastName').val();
        		var email = $('#email').val();
        		var cedula = $('#cedula').val();
        		var pass = $('#pass').val();
        		var direccion = $('#direccion').val();
        		var telefono = $('#telefono').val();
        		$.ajax({
                    url: '{{URL::to("/user")}}',
                    type: 'POST',
                    dataType: 'html',
                    data: {firstName: name, lastName: lastname, email: email,
                    	direccion: direccion, telefono: telefono,
                    	cedula: cedula, password: pass, grupo: 'coordinadores'},
            })
            .done(function(data) {
            	console.log(data);
                $('#vtnClienteModal').dialog('close');
                window.location.reload();
            })
            .fail(function() {
                    console.log("No se a podido guardar es pero nada");
            });
        	});
        });
        </script>
@stop
@section('edit-content')
<div class="wrapper">
  	<h1>Coordinadores</h1>
    <button id="nuevo">Nuevo</button>
	<button id="eliminar">Eliminar</button>
	<div id="vtnClienteModal">
		<input type="text" placeholder="Nombre" id="firstName">
		<input type="text" placeholder="Apellido" id="lastName">
		<input type="text" placeholder="Email" id="email">
		<input type="text" placeholder="Cedula" id="cedula">
		<input type="password" placeholder="Contraseña" id="pass">
		<input type="text" placeholder="Direccion" id="direccion">
		<input type="text" placeholder="Telefono" id="telefono">
		<button id="btnClienteGuardad">Guardar</button>
	</div>
    <table class="table table-bordered">
        <tr>
            <td>Nombre</td>
            <td>Apellido</td>
        </tr>
        @if(isset($coordinador))
            @foreach($coordinador as $client)                       
                <tr>
                    <td><a href="{{URL::to('perfil')}}/{{$client->id}}">{{$client->first_name}}</a></td>
                    <td>{{$client->last_name}}</td>
                </tr>
            @endforeach
        @else
        <p>nada</p>
        @endif
    </table>
</div>
@stop