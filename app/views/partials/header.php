<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dave</title>
<link href="/public/css/app.css" rel="stylesheet">
<link rel="stylesheet" href="/public/plugins/fullcalendar/fullcalendar.min.css">
<link rel="stylesheet" href="/public/plugins/fullcalendar/fullcalendar.print.css" media="print">
<link rel="stylesheet" href="/public/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="/public/plugins/datatables/dataTables.bootstrap.css">
<link href='/public/fullcalendar.min.css' rel='stylesheet' />
<link href='/public/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='/public/lib/moment.min.js'></script>
<script src='/public/lib/jquery.min.js'></script>
<script src='/public/lib/jquery-ui.min.js'></script>
<script src='/public/fullcalendar.min.js'></script>
<script>
   $(document).ready(function() {


    /* initialize the external events
    -----------------------------------------------------------------*/

    $('#external-events .fc-event').each(function() {

      // store data so the calendar knows to render an event upon drop
      $(this).data('event', {
        title: $.trim($(this).text()), // use the element's text as the event title
        stick: true // maintain when user navigates (see docs on the renderEvent method)
      });

      // make the event draggable using jQuery UI
      $(this).draggable({
        zIndex: 999,
        revert: true,      // will cause the event to go back to its
        revertDuration: 0  //  original position after the drag
      });

    });


    /* initialize the calendar
    -----------------------------------------------------------------*/

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar
      drop: function() {
        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove();
        }
      }
    });


  });

</script>
<style>


  #wrap {
    width: 1100px;
    margin: 0 auto;
  }
    
  #external-events {
    float: left;
    width: 150px;
    padding: 0 10px;
    border: 2px solid #ccc;
    background: #eee;
    text-align: left;
  }
    
  #external-events h4 {
    font-size: 16px;
    margin-top: 0;
    padding-top: 1em;
  }
    
  #external-events .fc-event {
    margin: 10px 0;
    cursor: pointer;
  }
    
  #external-events p {
    margin: 1.5em 0;
    font-size: 11px;
    color: #EEE8AA;
  }
    
  #external-events p input {
    margin: 0;
    vertical-align: middle;
  }

  #calendar {
    float: right;
    width: 800px;
  }

</style>
    
</head>
<body>
