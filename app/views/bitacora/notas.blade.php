@extends('layout.layout')
<!DOCTYPE html>
<html lang="en">
@section('titulo')
Bitacora
@stop
@section('head')
@parent
    <meta charset="utf-8"> 
    <title>Web Application | todo</title> 
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  <!--[if lt IE 9]> <script src="js/ie/respond.min.js" cache="false"></script> <script src="js/ie/html5.js" cache="false"></script> <script src="js/ie/fix.js" cache="false"></script> <![endif]-->
@stop
<body> 
     <!-- .aside -->  <!-- /.aside --> <!-- .vbox --> 
        @section('edit-content')
	        <section class="hbox stretch" id="noteapp"> 
	        <aside> <section class="vbox"> 
	        <header class="header bg-light lter bg-gradient b-b">
	         <button class="btn btn-success pull-right btn-sm" id="new-note"><i class="icon-plus"></i> NEW</button>  
	        </header> 
	        <section class="bg-light lter"> <section class="hbox stretch">
	         <!-- .aside --> 
	         <aside> <section class="vbox b-b"> 
	         <section class="paper" id="note-detail"> 
	         <!-- note detail --> 
	         <script type="text/template" id="note-template"> 
	         <textarea type="text" class="form-control scrollable" placeholder="Type your note here"><%- desc %></textarea> 
	         </script> <!-- note detail --> </section> 
	         </section> 
	        </aside> <!-- /.aside --> </section> 
	        </section> </section> </aside> 
	        <!-- .aside --> 
	        <aside class="aside-lg bg-light lter b-l"> <section class="vbox"> 
	        <header class="header bg-light lter bg-gradient clearfix b-b"> 
	        <div class="input-group m-t-sm"> 
	        <span class="input-group-addon input-sm"><i class="icon-search"></i>
	        </span> <input type="text" class="form-control input-sm" id="search-note" placeholder="search"> 
	        </div> 
	        </header> 
	        <section class="scrollable"> <div class="wrapper">
	         <!-- note list --> 
	         <ul id="note-list" class="list-group"></ul>
	          <!-- templates --> 
	          <script type="text/template" id="item-template"> 
	        <div class="view" id="note-<%- id %>"> 
	        <button class="destroy close hover-action">&times;</button>
	         <div class="note-name"> <strong> <%- (name && name.length) ? name : 'New note' %> </strong> 
	         </div> <div class="note-desc"> <%- desc.replace(name,'').length ? desc.replace(name,'') : 'empty note' %> </div> 
	         <span class="text-xs text-muted"><%- moment(date).format('MMM Do, h:mm a') %>
	         </span> 
	        </div> 
	        </script> <!-- / template --> <!-- note list --> </div> </section> </section> 
	        </aside> <!-- /.aside --> 
	        </section>  <!-- /.vbox -->
        @stop
</body></html>