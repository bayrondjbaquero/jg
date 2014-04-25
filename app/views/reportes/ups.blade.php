@extends('layout.layout')
@section('titulo')
UPS
@stop
@section('head')
<script  type="text/javascript" charset="utf-8" async defer>
  // setInterval(function(){alert("Pollo")},6000);
</script>
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
                    <label class="control-label" for="cliente"><h3>Cliente:</h3></label>
                    <input type="text" placeholder="cliente" ><br><br>
                    <select id="cliente" placeholder="cliente" >
                    <option>Seleccionar</option>
                      <option>cliente-1</option>
                      <option>cliente-2</option>
                      <option>cliente-3</option>
                      <option>cliente-4</option>
                    </select>
                    <label for="responsable"><h3>Responsable:</h3></label>
                    <select type="text" id="responsable" placeholder="responsable" >
                      <option>Seleccionar</option>
                      <option>Responsable-1</option>
                      <option>Responsable-2</option>
                      <option>Responsable-3</option>
                      <option>Responsable-4</option>
                    </select><br>
                    <label class="control-label" for="direccions"><h3>Direccion:</h3></label>
                    <input type="text" id="direccion" placeholder="direccion" >
                    <label class="control-label" for="nit"><h3>Nit:</h3></label>
                    <input type="text" id="nit" placeholder="Nit" >
                    <label class="control-label" for="correo"><h3>E-mail:</h3></label>
                    <input type="text" id="correo" placeholder="E-mail" >
                    <label class="control-label" for="telefonos"><h3>Telefonos:</h3></label>
                    <input type="text" id="telefonos" placeholder="telefonos" >
                </div>



                <table class="table table-bordered">
                  <caption>Información del Equipo</caption>
                    <tr>
                      <td colspan="2"><label>Marca:</label> <input placeholder="marca"> </td>
                      <td colspan="4"><label>Modelo:</label> <input placeholder="modelo"> </td>
                      <td colspan="2"><label>Capacidad:</label> <input placeholder="capacidad"> </td>
                      <td colspan="4"><label>Serie:</label> <input placeholder="serie"> </td>
                    </tr>
                    <tr>
                      <td colspan="6"><label>Ubicacion:</label> <input placeholder="ubicacion"></td>
                      <td class="etiqueta etiqueta-span-100"><strong>Referencias<br>Baterias:</strong></td>
                      <td><label>Marca:</label> <input placeholder="amperios"> </td>
                      <td class="etiqueta-span-100"><label>V:</label> <input placeholder="v"> </td>
                      <td class="etiqueta-span-100"><label>A:</label> <input placeholder="a"> </td>
                      <td class="etiqueta-span-100"><label>Cant:</label> <input placeholder="cant"> </td>
                      <td colspan="2"><label>Fecha instalacion:</label> <input placeholder="fecha"> </td>
                    </tr>
                </table>

                <table class="table table-bordered">  
                    <caption>Descripción</caption>
                    <tr>
                      <td><textarea></textarea></td>
                    </tr>
                </table>

                <table class="table table-bordered">
                  <caption>Adecuaciones Eléctricas</caption>
                    <tr>
                      <td><label>Parametros:</label></td> <td colspan="3"><label>Entrada</label></td> <td colspan="3"><label>Salida</label></td> <td><label>Tipo Servicio</label></td>
                      </tr>
                    <tr>
                      <td><label>Tablero:</label> </td> 
                      <td colspan="3"></td> 
                      <td colspan="3"></td> 
                      <td class="input" rowspan="6">
                      <select >
                        <option>Diagnostico</option>
                        <option>Instalacion</option>
                        <option>Reinstalacion</option>
                        <option>Correctivo</option>
                        <option>Mto. General</option>
                        <option>Preventivo</option>
                        <option>Vista Tecnica</option>
                        <option>Cambios de Baterias</option>
                        <option>Otro</option>
                      </select>                     
                      </td>
                    </tr>
                    <tr>
                      <td><label>Breaker:</label></td> <td colspan="4"></td> <td colspan="4"></td> 
                    </tr>
                    <tr>
                      <td><label>Barraje:</label></td> 
                      <td><label>N:</label><input> </td> <td><label>T:</label><input></td>  
                      <td><label>N:</label><input> </td> <td><label>T:</label><input></td> 
                      
                    </tr>
                    <tr>
                      <td><label>Calibre Conductores: </label></td>
                      <td><label>F:</label><input> </td> <td><label>N:</label><input></td> <td><label>T:</label><input></td> 
                      <td><label>F:</label><input> </td> <td><label>N:</label><input></td>  <td><label>T:</label><input></td> 
                      
                    </tr>
                    <tr>
                      <td><label>Numero de Conductores: </label></td>
                      <td><input> </td> <td><input></td> <td><input></td>
                      <td><input> </td> <td><input></td>  <td></td> 
                      
                    </tr>
                    <tr>
                      <td><label>Tipo de Conexion: </label></td> <td colspan="2"></td> <td colspan="2"></td>
                    </tr>
                    <tr>
                      <th><label>Marca:</label> <input value="marca"> </th>
                      <th><label>Tipo de Ventilacion:</label> <input value="modelo"> </th>
                      <th><label>Polucion:</label> <input value="capacidad"> </th>
                      <th><label>Temperatura:</label> <input value="serie"> </th>
                    </tr>
                </table>

                <table class="table table-bordered">
                  <caption>Parámetros del Equipo</caption>
                    <tr>
                      <td><label><h5>Parametros</h5></label></td> <td colspan="3"><label><h5>Mediciones Fluke</h5></label></td> <td colspan="3"><label><h5>Mediciones indicadas por el Equipo</h5></label></td>
                      </tr>
                    <tr>
                      <td rowspan="2"><label>Tensión AC de entrada (V)</label></td>
                      <td><label>R-N:</label><input> </td> <td><label>S-N:</label><input></td> <td><label>T-N:</label><input></td>
                      <td><label>R-N:</label><input> </td> <td><label>S-N:</label><input></td> <td><label>T-N:</label><input></td>
                    </tr>
                     <tr>
                      <td><label>R-S:</label><input> </td> <td><label>S-T:</label><input></td> <td><label>R-T:</label><input></td>
                      <td><label>R-S:</label><input> </td> <td><label>S-T:</label><input></td> <td><label>R-T:</label><input></td>
                    </tr>
                    <tr>
                      <td rowspan="2"><label>Tensión AC de salida (V)</label></td>
                    <td><label>R-N:</label><input> </td> <td><label>S-N:</label><input></td> <td><label>T-N:</label><input></td>
                      <td><label>R-N:</label><input> </td> <td><label>S-N:</label><input></td> <td><label>T-N:</label><input></td>
                    </tr>
                     <tr>
                      <td><label>R-S:</label><input> </td> <td><label>S-T:</label><input></td> <td><label>R-T:</label><input></td>
                      <td><label>R-S:</label><input> </td> <td><label>S-T:</label><input></td> <td><label>R-T:</label><input></td>
                    </tr>
                    <tr>
                      <td><label>Corriente AC de entrada</label></td> 
                      <td><label>R:</label><input> </td> <td><label>S:</label><input></td> <td><label>T:</label><input></td>
                      <td><label>R:</label><input> </td> <td><label>S:</label><input></td> <td><label>T:</label><input></td>
                      
                    </tr>
                    <tr>
                      <td><label>Corriente AC de salida</label> </td>
                      <td><label>R:</label><input> </td> <td><label>S:</label><input></td> <td><label>T:</label><input></td>
                      <td><label>R:</label><input> </td> <td><label>S:</label><input></td> <td><label>T:</label><input></td>
                      
                    </tr>
                    <tr>
                      <td><label>Tension DC cargador</label></td>
                      <td colspan="3"></td> <td colspan="3"></td>
                    </tr>
                    <tr>
                      <td><label>Frecuencia (Hz) </label></td> <td colspan="1.5%">In:</td> <td colspan="1.5%">Out:</td> <td colspan="1.5%">In:</td> <td colspan="1.5%">Out:</td>
                    </tr>
                    <tr>
                      <td><label>Tension Neutro-Tierra</label> </td> <td>In:</td> <td>Out:</td> <td>In:</td> <td>Out:</td>
                    </tr>
                </table>

                  <table class="table table-bordered">
                  <caption>Chequeo de Operación</caption>
                    <tr>
                      <th><label>Panel de Control:</label> <input value=""> </th>
                      <th><label>Alarma:</label> <input value=""> </th>
                      <th><label>Ventiladores:</label> <input value=""> </th>
                      <th><label>Transferencia de inversor:</label> <input value=""> </th>
                      <th><label>Bypass:</label> <input value=""> </th>
                      <th><label>Backup:</label> <input value=""> </th>
                    </tr>
                    <tr class="etiqueta">
                      <td colspan="6">
                        <h4>Pendientes</h4>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="3"><label>JG:</label> <textarea></textarea></td>
                      <td colspan="3"><label>Cliente:</label> <textarea></textarea></td>
                    </tr>
                    <tr>
                      <td colspan="3" class="etiqueta">
                          <h4>Tiempos</h4>
                      </td>
                      <td rowspan="3" colspan="3">
                        <label class="checkbox inline">
                          <input type="checkbox" id="inlineCheckbox1" value="option1">Cotizar
                        </label>
                        <label class="checkbox inline">
                          <input type="checkbox" id="inlineCheckbox2" value="option2">Facturar
                        </label>
                        <label class="checkbox inline">
                          <input type="checkbox" id="inlineCheckbox3" value="option3">Programar Vista
                        </label><br>
                        <label class="checkbox inline">
                          <input type="checkbox" id="inlineCheckbox4" value="option4">Informe
                        </label>
                        <label class="checkbox inline">
                          <input type="checkbox" id="inlineCheckbox5" value="option5">Archivo
                        </label>
                        <label class="checkbox inline">
                          <input type="checkbox" id="inlineCheckbox6" value="option6">Otro
                        </label>
                      </td>
                    </tr>
                    <tr>
                      <td><label>Transporte:</label><input> </td> 
                      <td><label>Hora de llegada:</label><input></td>
                    </tr>
                    <tr>
                      <td><label>Antesala:</label><input> </td> 
                      <td><label>Hora de Salida:</label><input></td>
                    </tr>
                    <tr>
                      <td colspan="2">
                      <label>Contrato:</label>
                        <label class="checkbox inline">
                          <input type="checkbox" id="inlineCheckbox7" value="option7"> Si
                        </label>
                        <label class="checkbox inline">
                          <input type="checkbox" id="inlineCheckbox8" value="option8"> No
                        </label>
                      </td> 
                      <td colspan="4"><label>Valor del Servico: $:</label><input></td>
                    </tr>
                </table>
                <div>
                  <div class="firma_iz">
                    <form class="form-horizontal">
                      <h4>Técnico</h4>
                      <div class="control-group">
                        <label class="control-label" for="inputEmail">Nombre:</label>
                        <div class="controls">
                          <input type="text" id="inputEmail" placeholder="nombre">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="inputEmail">Firma:</label>
                        <div class="controls">
                          <input type="text" id="" placeholder="firma">
                        </div>
                      </div>
                    </form>
                  </div>

                  <div class="firma_dr">
                    <form class="form-horizontal">
                      <h4>Cliente</h4>
                      <div class="control-group">
                        <label class="control-label" for="inputEmail">Nombre:</label>
                        <div class="controls">
                          <input type="text" id="" placeholder="nombre">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="inputEmail">Firma:</label>
                        <div class="controls">
                          <input type="text" id="" placeholder="firma">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                </div>
              </section>
            </section>
          </section>
        </aside>
    </section>
</section>  
@stop