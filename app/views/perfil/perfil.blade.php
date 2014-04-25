@extends('layout.layout')
@section('titulo')
Perfil
@stop
@section('head')
@parent
{{ HTML::style('styles/start/jquery-ui-1.10.4.custom.min.css'); }}
{{ HTML::script('scripts/jquery-ui.min.js'); }}
<script  type="text/javascript">
  // setInterval(function(){alert("Pollo")},6000);
  $(document).ready(function(){
    $('#mensaje').dialog({
      autoOpen: false,
      resizable: false,
      modal: true,
    });
    $('#UserMensaje').on('click', function(){
      $('#mensaje').dialog('open');
    });
    $('#enviar').on('click', function(){
       $('#mensaje').dialog('close');
       //location.reload();
    });
    $('#EnviarMsm').on('click', function(){
      var asunto = $('#asunto').val();
      var textarea = $('#textarea').val();
      $.ajax({
        url: '{{URL::to("sub_msm")}}',
        type: 'POST',
        dataType: 'html',
        data: {
          asunto: asunto, textarea: textarea
        },
      });
    });
    $('#textarea').autosize();     
  });
</script>
@stop
@section('edit-content')
<section class="bg-light lter"> 
    <section class="hbox stretch"> <!-- .aside --> 
        <aside> 
          <section class="vbox">
              <section class="panel">
              	<section class="hbox stretch"> 
	              	<aside class="aside-lg bg-light lter b-r"> 
	              		<section class="vbox"> 
	              			<section class="scrollable"> 
	              				<div class="wrapper"> 
	              					<div class="clearfix m-b"> 
	              						<a href="#" class="pull-left thumb m-r"> 
	              							<img src="{{URL::to('')}}/images/avatar.jpg" class="img-circle"> 
	              						</a> 
	      								<div class="clear">  
                        @if(isset($clientes))
                          <div class="h3 m-t-xs m-b-xs">{{$clientes['first_name']}}</div> 
                          <small class="text-muted">
                            <i class="icon-map-marker"></i> London, Paris
                          </small> 
	      								</div> 
	      							</div> 
  	      							<div class="btn-group btn-group-justified m-b"> 
                          @if(Session::get('user')->id != $clientes['id']) 
                          <a class="btn btn-success btn-rounded" data-toggle="button"> 
                            <span class="text"> <i class="icon-eye-open"></i> Follow </span> 
                            <span class="text-active"> <i class="icon-eye-open"></i> Following </span> 
                          </a>
  	      								<a class="btn btn-info btn-rounded" id="UserMensaje"> 
  	      									<i class="icon-comment-alt"></i> Mensaje
  	      								</a>
                          @endif
  	      							</div> 
	      							<div> 
	      								<small class="text-uc text-xs text-muted">about me</small> 
	      								<p>Artist</p> 
	      								<small class="text-uc text-xs text-muted">info</small> 
	      								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat.</p> 
	      								<div class="line"></div> 
	      								<small class="text-uc text-xs text-muted">connection</small> 
	      								<p class="m-t-sm"> 
	      									<a href="#" class="btn btn-rounded btn-twitter btn-icon">
	      										<i class="icon-twitter"></i>
	      									</a> 
	      									<a href="#" class="btn btn-rounded btn-facebook btn-icon">
	      										<i class="icon-facebook"></i>
	      									</a> 
	      									<a href="#" class="btn btn-rounded btn-gplus btn-icon">
	      										<i class="icon-google-plus"></i>
	      									</a> 
	      								</p> 
	      							</div> 
	      						</div> 
	      					</section> 
	      				</section> 
	      			</aside>
              		<aside class="bg-white"> 
              			<section class="vbox">
              				<header class="header bg-light bg-gradient"> 
              					<ul class="nav nav-tabs nav-white"> 
              						<li class="active">
              							<a href="#activity" data-toggle="tab">Actividades Pendientes</a>
              						</li> 
              						<li class="">
              							<a href="#events" data-toggle="tab">Tareas Realizadas</a>
              						</li> 
              						<li class="">
              							<a href="#interaction" data-toggle="tab">Informacion Perfil</a>
              						</li> 
              					</ul> 
              				</header> 
              				<section class="scrollable"> 
              					<div class="tab-content"> 
              						<div class="tab-pane active" id="activity"> 
              							<ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border"> 
              								<li class="list-group-item"> 
              									<a href="#" class="thumb-sm pull-left m-r-sm"> 
              										<img src="/images/avatar_default.jpg" class="img-circle"> 
              									</a> 
              									<a href="#" class="clear">
              										<small class="pull-right">3 minuts ago</small> 
              										<strong class="block">Drew Wllon</strong> 
              										<small>Wellcome and play this web application template ... </small> 
              									</a> 
              								</li> 
              								<li class="list-group-item"> 
              									<a href="#" class="thumb-sm pull-left m-r-sm"> 
              										<img src="/images/avatar.jpg" class="img-circle"> 
              									</a> 
              									<a href="#" class="clear"> 
              										<small class="pull-right">1 hour ago</small> 
              										<strong class="block">Jonathan George</strong> 
              										<small>Morbi nec nunc condimentum...</small> 
              									</a> 
              								</li>
              							</ul> 
              						</div> 
              						<div class="tab-pane" id="events"> 
              							<div class="text-center wrapper"> 
              								<i class="icon-spinner icon-spin icon-large"></i> 
              							</div> 
              						</div>
              						<div class="tab-pane" id="interaction"> 
              							
                            {{Form::open(array('url'=> 'user/'.$clientes['id'],'method'=> 'PUT','files'=> 'true',
                            ))}}
                                <input type="hidden" placeholder="" name="id" value="{{$clientes['id']}}">
                                <div class="tab-pane scrollable list-group active" id="user-settings" class="edit">
                                <div class="list-group-item form-horizontal">
                                  <h4>Personal Information</h4>
                                  <div class="form-group">
                                    <label for="first-name" class="col-md-2 control-label">First Name:</label>
                                    <div class="col-md-10 asterisco"><input id="first-name" class="form-control" value="{{$clientes['first_name']}}" name="firstName">
                                      <!-- @foreach($errors->get('cedula') as $message)
                                        <li class="mensaje">{{ $message }}</li>
                                      @endforeach -->
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="first-name" class="col-md-2 control-label">Last Name:</label>
                                    <div class="col-md-10 asterisco"><input id="last-name" class="form-control" value="{{$clientes['last_name']}}" name="lastName">
                                      <!-- @foreach($errors->get('cedula') as $message)
                                        <li class="mensaje">{{ $message }}</li>
                                      @endforeach -->
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="first-name" class="col-md-2 control-label">Email:</label>
                                    <div class="col-md-10 asterisco"><input id="email" class="form-control" value="{{$clientes['email']}}" name="email">
                                      <!-- @foreach($errors->get('cedula') as $message)
                                        <li class="mensaje">{{ $message }}</li>
                                      @endforeach -->
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="first-name" class="col-md-2 control-label">Cedula:</label>
                                    <div class="col-md-10 asterisco"><input id="cedula" class="form-control" value="{{$clientes['cedula']}}" name="cedula">
                                      <!-- @foreach($errors->get('cedula') as $message)
                                        <li class="mensaje">{{ $message }}</li>
                                      @endforeach -->
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="first-name" class="col-md-2 control-label">Direccion:</label>
                                    <div class="col-md-10 asterisco"><input id="direccion" class="form-control" value="{{$clientes['direccion']}}" name="direccion">
                                      <!-- @foreach($errors->get('cedula') as $message)
                                        <li class="mensaje">{{ $message }}</li>
                                      @endforeach -->
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="first-name" class="col-md-2 control-label">Teleforno:</label>
                                    <div class="col-md-10 asterisco"><input id="telefono" class="form-control" value="{{$clientes['telefono']}}" name="telefono">
                                      <!-- @foreach($errors->get('cedula') as $message)
                                        <li class="mensaje">{{ $message }}</li>
                                      @endforeach -->
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="first-name" class="col-md-2 control-label">Foto:</label>
                                    <div class="col-md-10 asterisco"><input type="file" id="foto" class="form-control" value="Foto" name="foto">
                                      <!-- @foreach($errors->get('cedula') as $message)
                                        <li class="mensaje">{{ $message }}</li>
                                      @endforeach -->
                                    </div>
                                  </div>
                                  <div class="form-group" >
                                    <div class="col-md-10 " style="float: right;"><input id="enviar" type="submit" class="form-control btn-info"  value="Save"></div>
                                  </div>
                                </div>
                              </div>
                            {{Form::close()}}
                          @else
                            Este Usuario no Existe
                          @endif
              						</div>
                            <div class="list-group-item form-horizontal" id="mensaje">
                              <h4>Mensaje Personal</h4>
                              <div class="form-group">
                                <label for="first-name" class="col-md-2 control-label">Asunto:</label>
                                <div class="col-md-10 asterisco"><input id="asunto" class="form-control" placeholder="Asunto" name="asunto">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="first-name" class="col-md-2 control-label">Mensaje:</label>
                                <div class="col-md-10 asterisco"><textarea id="textarea" class="form-control" placeholder="Mensaje" name="mensaje"></textarea>
                                </div>
                              </div>
                              <div class="form-group" >
                                    <div class="col-md-10 " style="float: right;"><input id="EnviarMsm" type="submit" class="form-control btn-success"  value="Enviar"></div>
                                  </div>
                            </div>
              					</div> 
              				</section> 
              			</section>
              		</aside>
	      		    </section>
              </section>
            </section>
        </aside>
    </section>
</section>  
@stop