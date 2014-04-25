@extends('layout.layout')
@section('titulo')
Preventivo
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
		         			<label><h3>CONTRATO N°:</h3> </label>
							<input type="text" name="" value="" placeholder="Contrato" class="">
							<label><h3>Cliente:</h3> </label>
							<input type="text" name="" value="" placeholder="Cliente" class="">
							<label><h3>Responsable:</h3> </label>
							<input type="text" name="" value="" placeholder="Responsable" class="">
							<label><h3>Dirección:</h3> </label>
							<input type="text" name="" value="" placeholder="Direccion" class="">
							<label><h3>NIT: </h3></label>
							<input type="text" name="" value="" placeholder="Nit" class="">
							<label><h3>Email:</h3> </label>
							<input type="text" name="" value="" placeholder="Email" class="">
							<label><h3>Teléfonos: </h3></label>
							<input type="text" name="" value="" placeholder="Telefonos" class="">
							</div>
						<table class="table table-bordered">
								<caption>Mantenimiento Preventivo</caption>
									<thead>
					            		<tr class="etiqueta">
					            			<td><h4>Euipos</h4></td>
					            			<td><h4>Descripcion de los Trabajos Realizados</h4></td>
					            		</tr>
					            		<tr>
					            			<td class="input etiqueta-span-200" >
						            			<label class="checkbox inline">
						                  			<input type="number" id="" value="option1" class="etiqueta-span-40 select-multiple"> Servidores
								                </label>
								                <label class="checkbox inline">
								                  	<input type="number" id="" value="option2" class="etiqueta-span-40 select-multiple"> Estaciones
								                </label>
								                <label class="checkbox inline">
								                  	<input type="number" id="" value="option3" class="etiqueta-span-40 select-multiple"> Impresoras
								                </label>
								                <label class="checkbox inline">
								                  	<input type="number" id="" value="option4" class="etiqueta-span-40 select-multiple"> Scanner
								                </label>
								                <label class="checkbox inline">
								                  	<input type="number" id="" value="option5" class="etiqueta-span-40 select-multiple"> Gabinetes
								                </label>
								                <label class="checkbox inline">
								                  	<input type="number" id="" value="option6" class="etiqueta-span-40 select-multiple"> UPS
								                </label>
								                <label class="checkbox inline">
								                  	<input type="number" id="" value="option6" class="etiqueta-span-40 select-multiple"> R. Lógica
								                </label>
								                <label class="checkbox inline">
								                  	<input type="number" id="" value="option6" class="etiqueta-span-40 select-multiple"> R. Eléctrica
								                </label>
								                <label class="checkbox inline">
								                  	<input type="number" id="" value="option6" class="etiqueta-span-40 select-multiple"> C. Telefónica
								                </label>
								                <label class="checkbox inline">
								                  	<input type="number" id="" value="option7" class="etiqueta-span-40 select-multiple"> Otro
								                </label>
					            			</td>
					            			<td><textarea></textarea></td>
					            		</tr>
					            		<tr class="etiqueta"><td colspan="2"><h3>Observaciones</h3></td></tr>
					            		<tr><td colspan="2"><textarea name="observaciones" class="observaciones"></textarea></td></tr>
									</thead>
						</table><br>
						<table class="table table-bordered">
							<tr>
								<td><input type="text"> </td> <td><input type="text"> </td> <td><input type="text"> </td>
							</tr>
							<tr>
								<td><h5><label>Nombre</label></h5> </td> <td><h5><label>Nombre</label></h5> </td> <td><h5><label>Nombre</label></h5> </td>
							</tr>
							<tr>
								<td><h5><label>Tecnico Supervisor</label></h5> </td> <td><h5><label>Cliente</label></h5> </td> <td><h5><label>Supervisor JG</label></h5> </td>
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