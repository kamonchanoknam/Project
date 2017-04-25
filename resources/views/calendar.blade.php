@extends('layouts.users')

@section('head')
    <link href="{{ url('css/fullcalendar.css') }}" rel='stylesheet' />
    <style>
   
	#calendar {
		max-width: 800px;
	}
	.col-centered{
		float: none;
		margin: 0 auto;
	}
    </style>

    <script src="{{ asset('js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
	
	<!-- FullCalendar -->
	<script src="{{ asset('js/moment.min.js')}}"></script>
	<script src="{{ asset('js/fullcalendar.min.js')}}"></script>
	
	<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			defaultDate: '2017-04-12',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				
				$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd').modal('show');
			},
			eventRender: function(event, element) {
				element.bind('dblclick', function() {
					//$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #title').val(event.title);
					$('#ModalEdit #color').val(event.color);
					//$('#ModalEdit #place').val(event.place);
					$('#ModalEdit').modal('show');
				});
			},
			eventDrop: function(event, delta, revertFunc) { // si changement de position

				edit(event);

			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

				edit(event);

			},
			events: [
			<?php foreach($events as $event): 
			
				$start = explode(" ", $event->Event_start);
				$end = explode(" ", $event->Event_end);
				if($start[1] == '00:00:00'){
					$start = $start[0];
				}else{
					$start = $event->Event_start;
				}
				if($end[1] == '00:00:00'){
					$end = $end[0];
				}else{
					$end = $event->Event_end;
				}
			?>
				{
					
					title: '{{$event->Act_name}} : {{$event->Temp_name}}',
					start: '{{$start}}',
					end: '{{$end}}',
					color: '{{$event->Color}}',
					
				},
			<?php endforeach; ?>
			]
		});
		
		
	});

</script>
@endsection

@section('content')
	
    <h1 align="center" style="color: white">ปฏิทินกิจกรรมงานบุญ</h1>
    <hr width="50%"><br>
    <div class="container" >
        <div class="row">
            <div class="col-lg-5 text-center">
                <div id="calendar" class="col-centered" style="background-color: #708090">
                </div>
            </div>
        </div>
    </div><br>
@endsection




	



