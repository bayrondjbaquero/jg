@extends('layout.layout')
<!DOCTYPE html>
<html lang="en">
@section('titulo')
Programacion
@stop
@section('head')
@parent
        {{ HTML::script('scripts/jquery-ui.min.js'); }}
        {{ HTML::script('scripts/fullcalendar/fullcalendar.min.js'); }}
        {{ HTML::script('scripts/fullcalendar/fullcalendar.js'); }}
        {{ HTML::script('scripts/fullcalendar/CalendarEvents.js'); }}
        <!-- {{ HTML::script('scripts/fullcalendar/gcal.js'); }} -->
    <meta charset="utf-8"> 
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  <!--[if lt IE 9]> <script src="js/ie/respond.min.js" cache="false"></script> <script src="js/ie/html5.js" cache="false"></script> <script src="js/ie/fix.js" cache="false"></script> <![endif]-->
@stop
<body> 
     <!-- .aside -->  <!-- /.aside --> <!-- .vbox --> 
        @section('edit-content')
 <!-- .aside -->  <!-- /.aside --> <!-- .vbox -->
         	<section class="bg-light lter"> 
         		<section class="hbox stretch"> <!-- .aside --> 
         			<aside> 
         				<section class="vbox"> 
         					<section class="scrollable"> 
         						<section class="panel"> 
         							<!-- <header class="panel-heading bg-light header no-borders"> <p>Fullcalendar</p> </header> -->
                               <div class="calendar" id="calendar"> </div> 
         						</section> 
         					</section> 
         				</section>
         			</aside> 
         			<aside class="aside-lg b-l">
         			 <div class="padder"> <h5>Dragable events</h5> <div class="line"></div>
         			  <div id="myEvents" class="pillbox clearfix m-b no-border no-padder"> 
         			  	<ul> 
         			  		<li class="label bg-dark">Item One</li> 
         			  		<li class="label bg-success">Item Two</li> 
         			  		<li class="label bg-warning">Item Three</li> 
         			  		<li class="label bg-danger">Item Four</li> 
         			  		<li class="label bg-info">Item Five</li> 
         			  		<li class="label bg-primary">Item Six</li> 
         			  		<input type="text" placeholder="add an event"> 
                            <input type="text" id="hol">
         			  	</ul> 
         			  </div> 
         			  <div class="line"></div> 
         			  <div class="checkbox"> 
         			  	<label class="checkbox-custom">
         			  		<input type='checkbox' id='drop-remove' /><i class="icon-unchecked"></i> remove after drop</label> 
         			  </div> 
         			</div> 
         		</aside> <!-- /.aside --> 
         	</section> 
         </section>  <!-- /.vbox --> 

 <!-- Bootstrap --> <!-- App --> <!-- fuelux --> <!-- fullcalendar --> 
@stop <!-- /.vbox -->        <!-- Bootstrap --> <!-- Sparkline Chart --> <!-- App --> 
</body>
</html>