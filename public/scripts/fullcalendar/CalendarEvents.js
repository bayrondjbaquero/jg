$(document).ready(function() {

    // page is now ready, initialize the calendar...
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    var addDragEvent = function ($this) {
        var eventObject = {
            title: $.trim('<a href="www.goole.com">'+ $this.text() +'</a>'),
            className: $this.attr('class').replace('label', ''),
            color: $this.css('background-color')
        };
        $this.data('eventObject', eventObject);
        $this.draggable({
            zIndex: 999,
            revert: true,
            revertDuration: 0
        });
    };
    $('.calendar').each(function () {
        $(this).fullCalendar({
            header: {
                left: 'prev,next',
                center: 'title',
                right: 'today,month,agendaWeek,agendaDay'
            },
            editable: true,
            selectable: true,
            droppable: true,
            events: "/calendar",
            eventDrop: function(event, delta) {
		        var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
		        var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
		            $.ajax({
	                    url: '/programacion/'+ event.id,
		                type: 'PUT',
		                dataType: 'html',
		                data: {id: event.id, title: event.title,
		                user_id: event.user_id, reporte_id: event.reporte_id, cliente_id: event.cliente_id,
		                color: event.color,
		                start:  start, 
		                end: end},
		            })
		            .done(function(data) {
		                console.log(data);
		            })
		            .fail(function() {
		                console.log("error");
		        });                 
        	},
        	eventResize: function(event) {
		        var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
		        var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
		            $.ajax({
	                    url: '/programacion/'+ event.id,
		                type: 'PUT',
		                dataType: 'html',
		                data: {id: event.id, title: event.title,
		                user_id: event.user_id, reporte_id: event.reporte_id, cliente_id: event.cliente_id,
		                color: event.color,
		                start:  start, 
		                end: end},
		            })
		            .done(function(data) {
		                console.log(data);
		            })
		            .fail(function() {
		                console.log("error");
		        });                 
        	},
        	eventClick: function(event) {
		        alert(event.title);                
        	},
        	dayClick: function(event) {
		                        
        	}
        });
        
    });
    $('#myEvents').on('change', function (e, item) {
        addDragEvent($(item));
    });
    $('#myEvents li').each(function () {
        addDragEvent($(this));
    });

});

 