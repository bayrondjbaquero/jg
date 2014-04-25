@extends('layout.layout')
@section('titulo')
PC
@stop
@section('head')
@parent
<script>
	var seconds = 2; // el tiempo en que se refresca
	var divid = "ev"; // el div que quieres actualizar!
	var url = "/cl"; // el archivo que ira en el div

	function refreshdiv(){

		// The XMLHttpRequest object

		var xmlHttp;
		try{
			xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
		}
		catch (e){
			try{
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
			}
			catch (e){
				try{
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e){
					alert("Tu explorador no soporta AJAX.");
					return false;
				}
			}
		}

		// Timestamp for preventing IE caching the GET request
		var timestamp = parseInt(new Date().getTime().toString().substring(0, 10));
		var nocacheurl = url+"?t="+timestamp;

		// The code...

		xmlHttp.onreadystatechange=function(){
			if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
				document.getElementById(divid).innerHTML=xmlHttp.responseText;
				setTimeout('refreshdiv()',seconds*1000);
			}
		}
		xmlHttp.open("GET",nocacheurl,true);
		xmlHttp.send(null);
	}

	// Empieza la función de refrescar

	window.onload = function(){
		refreshdiv(); // corremos inmediatamente la funcion
	}
</script>
@stop
@section('edit-content')
<section class="bg-light lter"> 
    <section class="hbox stretch"> <!-- .aside --> 
        <aside> 
         	<section class="vbox"> 
         		<section class="scrollable"> 
         			<section class="panel">
						<div class="wrapper">
							{{Form::open(array('url'=> 'soporte_tecnico','method'=> 'POST','files'=> 'true',))}}
								@if(Session::get('user')->getGroups()[0]->name == "clientes" && isset($clientes))
								<label for="first-name" class="col-md-2 control-label">Cliente:</label>
								<input type="text" id="cliente" value="{{Session::get('user')->first_name}} {{Session::get('user')->last_name}}" disabled>
									@else
									<label for="first-name" class="col-md-2 control-label">Cliente:</label>
									<select name="clientes" id="" class="form-control">
										<option value="">Seleccionar cliente</option>
										@foreach($clientes as $client)
											<option value="{{$client['id']}}">{{$client['first_name']}} {{$client['last_name']}}</option>
										@endforeach	
									</select>
								@endif
								<div class="form-group" >
                				<div class="col-md-10" style="float: right;"><input id="first-name" type="submit" class="form-control btn-info"  value="Save"></div>
                			</div>
							{{Form::close()}}
								<label for="first-name" class="col-md-2 control-label">Producto:</label>
								<select name="" id="" class="form-control">
									<option value="">Seleccionar Producto</option>
									@foreach($clientes as $client)
										<option value="">{{$client['first_name']}} {{$client['last_name']}}</option>
									@endforeach	
								</select>
							<table class="table table-bordered">
								<caption>Descripción del Equipo</caption>
								<tbody>
									<tr>
										<td class="etiqueta etiqueta-span-100"><strong>Marca:</strong></td>
										<td class="input"><input></td>
										<td class="etiqueta etiqueta-span-60"><strong>Ref:</strong></td>
										<td class="input"><input></td>
									</tr>
									<tr>
										<td class="etiqueta"><strong>Serial:</strong></td>
										<td class="input" colspan="3"><input></td>
									</tr>
									<tr>
										<td class="etiqueta"><strong>Detalle:</strong></td>
										<td class="input" colspan="3"><input></td>
									</tr>
								</tbody>
							</table>

							<table class="table table-bordered">
								<caption>Diagnóstico</caption>
								<tbody>
									<tr>
										<td class="etiqueta etiqueta-span-100"><strong>Usuario:</strong></td>
										<td class="input"><input></td>
										<td class="etiqueta etiqueta-span-150"><strong>Departamento:</strong></td>
										<td class="input"><input></td>
										<td class="etiqueta etiqueta-span-150"><strong>Tipo de Servicio:</strong></td>
										<td class="input">
											<select name="servicio">
												<option>Preventivo</option>
												<option>Correctivo</option>
												<option>Garantía</option>
												<option>Redes</option>
											</select>
										</td>
									</tr>
									<tr>
										<td class="input" colspan="6">
											<textarea name="" id="" rows="10"></textarea>
										</td>
									</tr>
								</tbody>
							</table>
							<div id="ev"></div>
							<table class="table table-bordered">
								<caption>Solución</caption>
								<tbody>
									<tr>
										<td class="input" colspan="6">
											<textarea name="" id="" rows="10"></textarea>
										</td>
									</tr>
								</tbody>
							</table>
							<div class="form-group" >
                				<div class="col-md-10" style="float: right;"><input id="first-name" type="submit" class="form-control btn-info"  value="Save"></div>
                			</div>
						</div> <!-- wrapper -->
					</section>
				</section>
			</section>
		</aside>
	</section>
</section>
@stop