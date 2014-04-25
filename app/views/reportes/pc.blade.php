@extends('layout.layout')
@section('titulo')
PC
@stop
@section('head')
@parent
@stop
@section('edit-content')
<section class="bg-light lter"> 
    <section class="hbox stretch"> <!-- .aside --> 
        <aside> 
         	<section class="vbox">
         		<section class="scrollable"> 
         			<section class="panel">
         				<div class="wrapper">

         					<div class="informacion-cliente">
	         					<label for="cliente"><h3>Empresa:</h3></label>
								<input id="cliente" class="input" placeholder="Escriba el nombre del cliente"><br>
								<label for="encargado"><h3>Encargado: </h3></label>
								<input id="encargado" class="input" placeholder="Escriba el nombre del encargado"><br>
								<label for="supervisor"><h3>Técnico Supervisor: </h3></label>
								<input id="supervisor" class="input" placeholder="Escriba el nombre del técnico supervisor">
							</div>

							<table class="table table-bordered">
									<caption>Control de Mantenimiento por Usuario</caption>
									<tr class="etiqueta">
										<td> <strong>Item</strong> </td>
										<td> <strong>Fecha</strong> </td>
										<td> <strong>Dependencia</strong> </td>
										<td> <strong>Nombre Usuario</strong> </td>
										<td> <strong>Marca de Equipo</strong> </td>
										<td> <strong>Serial</strong> </td>
										<td> <strong>Observaciones</strong> </td>
										<td> <strong>Vo. Bo.</strong> </td>
									</tr>
									<tr>
										<td class="consecutivo">1</td>
										<td class="input"><input></td>
										<td class="input"><input></td>
										<td class="input"><input></td>
										<td class="input"><input></td>
										<td class="input"><input></td>
										<td class="input"><input></td>
										<td class="input"><input></td>
									</tr>
									<tr>
										<td class="consecutivo">2</td>
										<td class="input"><input></td>
										<td class="input"><input></td>
										<td class="input"><input></td>
										<td class="input"><input></td>
										<td class="input"><input></td>
										<td class="input"><input></td>
										<td class="input"><input></td>
									</tr>
									<tr>
										<td class="consecutivo">3</td>
										<td class="input"><input></td>
										<td class="input"><input></td>
										<td class="input"><input></td>
										<td class="input"><input></td>
										<td class="input"><input></td>
										<td class="input"><input></td>
										<td class="input"><input></td>
									</tr>
							</table>
						</div>	
         			</section>
         		</section>
         	</section>
        </aside>
    </section>
</section>	
				
@stop