@extends('layout.layout')
@section('titulo')
Secretaria
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
        	$('#enviar').on('click', function(){
        	   $('#vtnClienteModal').dialog('close');
            })
        });   
    </script>
@stop
@section('edit-content')
<div class="wrapper">
  	<h1>Secretaria</h1>
    <div class="col-md-10" style="float: left;">
        <input id="nuevo" type="button" class="btn btn-success"  value="Nuevo">
    </div>
	<div id="vtnClienteModal">
        {{Form::open(array('url'=> '/user','method'=> 'POST','files'=> 'true',))}}
        <ul class="nav nav-tabs nav-white">
            <li class="active">
                <a href="#personal" data-toggle="tab">Info Personal</a>
            </li>
            <li class="">
                <a href="#laboral" data-toggle="tab">Info Laboral</a>
            </li>
        </ul>
        <div class="list-group-item form-horizontal tab-content">
            <div id="personal" class="tab-pane active">
                <div class="form-group">
                    <label for="first-name" class="col-md-2 control-label">First Name:</label>
                    <div class="col-md-10 asterisco">
                        <input id="first-name" class="form-control" placeholder="Name" name="firstName">
                    </div>
                </div>
                <div class="form-group">
                    <label for="first-name" class="col-md-2 control-label">Last Name:</label>
                    <div class="col-md-10 asterisco"><input id="last-name" class="form-control" placeholder="Last Name" name="lastName">
                    </div>
                </div>
                <div class="form-group">
                    <label for="first-name" class="col-md-2 control-label">Cedula:</label>
                    <div class="col-md-10 asterisco"><input id="cedula" class="form-control" placeholder="Cedula" name="cedula">
                    </div>
                </div>
                <div class="form-group">
                    <label for="first-name" class="col-md-2 control-label">Direccion:</label>
                    <div class="col-md-10 asterisco"><input id="direccion" class="form-control" placeholder="Direccion" name="direccion">
                    </div>
                </div>
                <div class="form-group">
                    <label for="first-name" class="col-md-2 control-label">Telefono o Celular:</label>
                    <div class="col-md-10 asterisco"><input id="telefono" class="form-control" placeholder="Telefono" name="telefono">
                    </div>
                </div>
                <div class="form-group">
                    <label for="first-name" class="col-md-2 control-label">Fecha Nacimiento:</label>
                    <div class="col-md-10 asterisco"><input id="nacimiento" class="form-control" placeholder="Nacimiento" name="nacimiento">
                    </div>
                </div>
            </div>
            <div id="laboral" class="tab-pane">  
                <div class="form-group">
                    <label for="first-name" class="col-md-2 control-label">Email:</label>
                    <div class="col-md-10 asterisco"><input id="email" class="form-control" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="first-name" class="col-md-2 control-label">Password:</label>
                    <div class="col-md-10 asterisco"><input id="password" class="form-control" placeholder="Password" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="first-name" class="col-md-2 control-label">EPS:</label>
                    <div class="col-md-10 asterisco"><input id="eps" class="form-control" placeholder="Eps" name="eps">
                    </div>
                </div>
                <div class="form-group">
                    <label for="first-name" class="col-md-2 control-label">Alergias:</label>
                    <div class="col-md-10 asterisco"><input id="alergias" class="form-control" placeholder="Alergias" name="alergias">
                    </div>
                </div>
                <div class="form-group">
                    <label for="first-name" class="col-md-2 control-label">Foto:</label>
                    <div class="col-md-10 asterisco"><input id="foto" type="file" class="form-control" placeholder="Telefono" name="foto">
                    </div>
                </div>
                <div class="form-group" hidden>
                    <div class="col-md-10 asterisco"><input id="grupo" class="form-control" placeholder="Telefono" name="grupo" value="Secretarias">
                    </div>
                </div>
                <div class="form-group" >
                    <div class="col-md-10" style="float: right;"><input id="enviar" type="submit" class="form-control btn-info"  value="Save"></div>
                </div>
                <div class="form-group" >
                    <div class="col-md-10" style="float: right;"><input id="cancelar" type="reset" class="form-control btn-danger"  value="Cancelar"></div>
                </div>
            </div>
        </div>
        {{Form::close()}}
	</div>
    <table class="table table-bordered">
        <tr>
            <td>Nombre</td>
            <td>Apellido</td>
        </tr>
        @if(isset($secretaria))
            @foreach($secretaria as $client) 
            {{Form::open(array('url'=> 'user/'.$client['id'],'method'=> 'DELETE','files'=> 'true',))}}
                <tr>
                    <td><a href="{{URL::to('perfil')}}/{{$client['id']}}">{{$client['first_name']}}</a></td>
                    <td>{{$client['last_name']}}</td>
                    <td><input type="submit" placeholder="" value="Delete"></td>
                </tr>
                
            {{Form::close()}}                      
            @endforeach
        @else
        <tr>
            <td>
                <p>No Existe Usuario "Secretaria"</p>
            </td>
        </tr>
        @endif
    </table>
</div>
@stop