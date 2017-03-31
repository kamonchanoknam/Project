<?php
session_start();
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}

// $name = $row['Name'];
?>
@extends('layouts.admintemp')

@section('head')
<link href="{{ asset('css/fullcalendar.css') }}" rel='stylesheet' />

{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> --}}
  {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}

  <style>
   
  #calendar {
    max-width: 800px;
  }
  .col-centered{
    float: none;
    margin: 0 auto;
  }
    </style>

@endsection

@section('content')
    <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">ข้อมูลวัด</h1>
                    
                    <table class="table table-inverse">
                      
                      <tbody>
                        <tr>
                          <th>ชื่อกิจกรรม</th>
                          <th>ชื่อวัด</th>
                          <th>วันเวลาเริ่มกิจกรรม</th>
                          <th>วันเวลาสิ้นสุดกิจกรรม</th>
                          <th>สี</th>

                        </tr>
                        <tr>
                          <th>ที่อยู่วัด</th>
                          <td></td>
                        </tr>
                                                               
                  
                          <td>
                            {{-- <a href="{{ url('/adindexshow/'.$templeuser[0]->Temp_id.'/edit')}}"> --}}
                            <button type="button" class="btn btn-default">
                              <span class="fa fa-edit "></span> แก้ไขข้อมูล
                            </button>{{-- </a> --}}

                            {{-- <a href="#"><span class=" glyphicon glyphicon-edit"></span></a> --}}
                          
                          </td> 
                          <td>
                          {{-- <a href="{{ url('/adindexshow/'.$templeuser[0]->Temp_id.'/addpicture')}}"> --}}
                            <button type="button" class="btn btn-default">
                              <span class="fa fa-cloud-upload "></span> เพิ่มรูปภาพ
                            </button>{{-- </a> --}}
                            
                            {{-- <a href="#"><span class=" glyphicon glyphicon-edit"></span></a> --}}
                          
                          </td> 
                        </tr>
                      </tbody>
                    </table>
                </div>
                <!--End Page Header -->

                
            </div>
        </div>
  
    <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">ข้อมูลปฏิทินกิจกรรม</h1>
                </div>
            </div>
            <div class="row" >
            <div class="col-lg-10 text-center">
                <div id="calendar" class="col-centered" style="background-color: #BEBEBE">
                </div>
            </div>
        </div><br><br>

        {{-- <input type="submit" name="add" value="เพิ่มกิจกรรม"> --}}
        
       {{--  <button >เพิ่มกิจกรรม</button>
        <button >แก้ไขกิจกรรม</button> --}}
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">เพิ่มกิจกรรม</button>
         <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#neweventModal">เพิ่มกิจกรรมใหม่</button>

         {{-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">แก้ไขกิจกรรม</button> --}}

          <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
               {{--  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">เพิ่มกิจกรรม</h4>
                </div> --}}
                {{-- <div class="modal-body">
                  
                  วันเลาที่เริ่มกิจกรรม :<input type="text" name="start">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div> --}}
        {{-- <form class="form-horizontal" method="POST" action="addEvent.php"> --}}
        {!! Form::open(['url'=>'adcalen','class'=>'form-horizontal']) !!}
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">เพิ่มกิจกรรม</h4>
        </div>
        <div class="modal-body">
        
          <div class="form-group">
          <label for="nameevent" class="col-sm-2 control-label">ชื่อกิจกรรม</label>
          <div class="col-sm-10">
            
           {{--  <input type="select" name="title" class="form-control" id="title" placeholder="Title"> --}}
            <select name="nameevent" class="form-control">
                @foreach($activity as $act)
                <option value="{{$act->Act_id}}">{{$act->Act_name}}</option>
                @endforeach
            </select>
           
          </div>
          </div>
          <div class="form-group">
          <label for="placeevent" class="col-sm-2 control-label">สถานที่จัดกิจกรรม</label>
          <div class="col-sm-10">
            {{-- <input type="select" name="place" class="form-control" id="place" placeholder="Title"> --}}
            <select name="placeevent" class="form-control">
                @foreach($temple as $temp)
                <option value="{{$temp->Temp_id}}">{{$temp->Temp_name}}</option>
                @endforeach
            </select>
          </div>
          </div>
          <div class="form-group">
          <label for="color" class="col-sm-2 control-label">สีเน้นกิจกรรม</label>
          <div class="col-sm-10">
            <select name="color" class="form-control" id="color">
              <option value="">Choose</option>
              <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
              <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
              <option style="color:#008000;" value="#008000">&#9724; Green</option>             
              <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
              <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
              <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
              <option style="color:#000;" value="#000">&#9724; Black</option>
              
            </select>
          </div>
          </div>
          <div class="form-group">

          <label for="start" class="col-sm-2 control-label">วันที่เริ่มกิจกรรม</label>
          <div class="col-sm-10">
            <input type="datetime-local" name="start" class="form-control" id="start" >
          </div>
          </div>
          <div class="form-group">
          <label for="end" class="col-sm-2 control-label">วันที่สิ้นสุดกิจกรรม</label>
          <div class="col-sm-10">
            <input type="datetime-local" name="end" class="form-control" id="end" >
          </div>
          </div>
        
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
       
        {{!! Form::close() !!}}
      </div>
              
            </div>
          </div>
      </div>

      {{-- Modal Add new event --}}
      <div class="modal fade" id="neweventModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
               {{--  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">เพิ่มกิจกรรม</h4>
                </div> --}}
                {{-- <div class="modal-body">
                  
                  วันเลาที่เริ่มกิจกรรม :<input type="text" name="start">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div> --}}
        {{-- <form class="form-horizontal" method="POST" action="addEvent.php"> --}}
        {!! Form::open(['url'=>'adcalen','class'=>'form-horizontal']) !!}
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">เพิ่มกิจกรรมใหม่</h4>
        </div>
        <div class="modal-body">
        
          <div class="form-group">
          <label for="nameevent" class="col-sm-2 control-label">ชื่อกิจกรรม</label>
          <div class="col-sm-10">
            
            <input type="text" name="actname" class="form-control" placeholder="ชื่อกิจกรรม">
            {{-- <select name="nameevent" class="form-control">
                @foreach($activity as $act)
                <option value="{{$act->Act_id}}">{{$act->Act_name}}</option>
                @endforeach
            </select> --}}
           
          </div>
          </div>
          <div class="form-group">
          <label for="placeevent" class="col-sm-2 control-label">รายละเอียดยกิจกรรม</label>
          <div class="col-sm-10">
            <textarea name="detail" class="form-control" placeholder="รายละเอียดยกิจกรรม"></textarea>
            
          </div>
          </div>
        
        
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
       
        {!! Form::close() !!}
      </div>
              
            </div>
          </div>
      </div>


    <!-- Modal Edit Event-->
    <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
      
      {!! Form::open(['url'=>'adcalen/.','class'=>'form-horizontal']) !!}
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">แก้ไขกิจกรรม</h4>
        </div>
        <div class="modal-body">
        
          <div class="form-group">
          <label for="title" class="col-sm-2 control-label">ชื่อกิจกรรม</label>
          <div class="col-sm-10">
            {{-- <input type="text" name="title" class="form-control" id="title" placeholder="Title"> --}}
            <select name="nameact" class="form-control">
                @foreach($activity as $act)
                <option value="{{$act->Act_id}}">{{$act->Act_name}}</option>
                @endforeach
            </select>
          </div>
          </div>
          <div class="form-group">
          <label for="color" class="col-sm-2 control-label">สี</label>
          <div class="col-sm-10">
            <select name="color" class="form-control" id="color">
              <option value="">Choose</option>
              <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
              <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
              <option style="color:#008000;" value="#008000">&#9724; Green</option>             
              <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
              <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
              <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
              <option style="color:#000;" value="#000">&#9724; Black</option>
              
            </select>
          </div>
          </div>
            <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
              <label class="text-danger"><input type="checkbox"  name="delete"> Delete event</label>
              </div>
            </div>
          </div>
          
          <input type="hidden" name="id" class="form-control" id="id">
        
        
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      {!! Form::close() !!}
      </div>
      </div>
    </div>
        
  

@endsection

@section('footer')
  
 
  <script>

  $(document).ready(function() {
    
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,basicDay'
      },
      defaultDate: '2017-03-01',
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

    /* ย้ายกิจกรรม */
    function edit(event){
      start = event.start.format('YYYY-MM-DD HH:mm:ss');
      if(event.end){
        end = event.end.format('YYYY-MM-DD HH:mm:ss');
      }else{
        end = start;
      }
      
      id =  event.id;
      
      Event = [];
      Event[0] = id;
      Event[1] = start;
      Event[2] = end;
      
      $.ajax({
       url: 'editEventDate.php',
       type: "POST",
       data: {Event:Event},
       success: function(rep) {
          if(rep == 'OK'){
            alert('Saved');
          }else{
            alert('Could not be saved. try again.'); 
          }
        }
      });
    }
    
    
  });

</script>
@endsection






