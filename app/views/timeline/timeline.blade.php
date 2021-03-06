@extends('layout.layout')
@section('titulo')
TimeLine
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
              <section class="panel">
               	<section class="hbox stretch"> 
              		<aside> 
              			<section class="vbox"> 
              				<section class="scrollable wrapper">
              					<div class="timeline"> 
              						<article class="timeline-item active"> 
						              	<div class="timeline-caption"> 
							              	<div class="panel bg-success lter no-borders"> 
								              	<div class="panel-body"> 
									              	<span class="timeline-icon"><i class="icon-bell-alt time-icon bg-success"></i>
									              	</span> 
								              		<span class="timeline-date">7:30 am</span> 
								              		<h5> <span>Wake up</span> Me </h5> 
									              	<div class="m-t-sm timeline-action"> 
										              	<span class="h3 pull-left m-r-sm">4:51</span> 
										              	<button class="btn btn-sm btn-white"><i class="icon-pause"></i> Pause</button> 
										              	<button class="btn btn-sm btn-white"><i class="icon-ok"></i> Confirm</button> 
										            </div> 
								              	</div> 
							              	</div> 
						              	</div> 
              						</article> 
              						<article class="timeline-item"> 
						              	<div class="timeline-caption"> 
							              	<div class="panel"> 
							              		<div class="panel-body"> 
								              		<span class="arrow left"></span> 
								              		<span class="timeline-icon"><i class="icon-phone time-icon bg-primary"></i></span> 
								              		<span class="timeline-date">12:25 am</span> 
								              		<h5> <span>Call to</span> Jason Cokde (021-254-3523) </h5> 
							              		</div> 
							              	</div> 
						              	</div> 
              						</article> 
					              	<article class="timeline-item alt"> 
					              		<div class="timeline-caption">
					              	 		<div class="panel"> 
					              	 			<div class="panel-body"> 
					              	 				<span class="arrow right"></span> 
									              	<span class="timeline-icon"><i class="icon-male time-icon bg-success"></i></span> 
									              	<span class="timeline-date">10:00 am</span> 
									              	<h5> <span>Appointment</span> Carmark Sook (.inc company)</h5> 
									              	<p>Morbi nec nunc condimentum, egestas dui nec, </p> 
					              	 			</div> 
					              	 		</div> 
					              	 	</div> 
					              	</article> 
					              	<article class="timeline-item"> 
						              	 <div class="timeline-caption"> 
							              	 <div class="panel"> 
								              	 <div class="panel-body"> 
									              	<span class="arrow left"></span> 
									              	<span class="timeline-icon">
									              	<i class="icon-plane time-icon bg-dark"></i></span> 
									              	<span class="timeline-date">8:00 am</span> <h5> 
								              	 	<span>Fly to</span> Newyork City </h5> 
								              	 	<p>82°, Very hot with some sun</p> 
								              	 </div> 
							              	 </div> 
						              	 </div> 
					              	</article> 
					              	<article class="timeline-item alt"> 
						              	<div class="timeline-caption"> 
							              	<div class="panel"> 
								              	<div class="panel-body"> 
								              	<span class="arrow right"></span> 
								              	<span class="timeline-icon">
								              	<i class="icon-file-text time-icon bg-info"></i></span> 
								              	<span class="timeline-date">9:30 am</span> 
								              	<h5> <span>Meeting</span> Office A - 2 floor </h5> 
								              	<p>Iaculis lorem justo porttitor orci. Vivamus vestibulum tortor augue. Donec elementum mollis velit.</p>
								              	</div> 
							              	</div> 
						              	</div> 
					              	</article> 
					              	<article class="timeline-item"> 
						              	<div class="timeline-caption"> 
							              	<div class="panel"> 
								              	<div class="panel-body"> 
									              	<span class="arrow left"></span> 
									              	<span class="timeline-icon">
									              	<i class="icon-code time-icon bg-dark"></i></span> 
									              	<span class="timeline-date">9:00 am</span> <h5> 
									              	<span>Work on</span> Web application project </h5> 
									              	<p>Iaculis lorem justo porttitor orci. Donec elementum mollis velit.</p> 
								              	</div> 
							              	</div> 
						              	</div> 
					              	</article> 
					              	<div class="timeline-footer">
					              		<a href="#"><i class="icon-plus time-icon inline-block bg-dark"></i></a>
					              	</div> 
              	  				</div>
              	  			</section> 
              	  		</section> 
              	  	</aside>
	              	<aside class="aside-lg bg-light"> 
	              		<div class="wrapper"> 
	              			<h4 class="m-t-none">Timeline</h4> 
			              	<form> 
				              	<div class="form-group"> 
					              	<label>Nombre</label> 
					              	<input type="text" placeholder="Nombre" class="input-sm form-control"> 
				              	</div> 
				              	<div class="form-group"> 
					              	<label>Fecha</label> 
					              	<input type="text" placeholder="Fecha" class="datepicker input-sm form-control"> 
				              	</div> 
				              	<div class="form-group"> 
					              	<label>Tiempo</label> 
					              	<input type="text" placeholder="Hora" class="input-sm form-control"> 
				              	</div> 
				              	<div class="form-group"> 
					              	<label>Tipo</label> 
					              	<div> 
						              	<div class="btn-group"> 
							              	<button data-toggle="dropdown" class="btn btn-sm btn-white dropdown-toggle"> 
								              	<span class="dropdown-label">Seleccione</span> 
								              	<span class="caret"></span> 
							              	</button> 
							              	<ul class="dropdown-menu dropdown-select"> 
							              		<li><a href="#"><input type="radio" name="d-s-r">Web</a></li> 
							              		<li class=""><a href="#"><input type="radio" name="d-s-r">Telefonica</a></li>
							              	</ul> 
						              	</div> 
					              	</div> 
				              	</div> 
				              	<div class="m-t-lg">
				              		<button class="btn btn-sm btn-default">Agregar Evento</button>
				              	</div>
			              	</form> 
	              	 	</div> 
	              	 </aside>
              	</section> 
              </section>
            </section>
        </aside>
    </section>
</section>  
@stop