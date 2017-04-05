
@foreach($user1 as $user)

{!!   Form::model($user, array('url' => 'adtemppro/'.$user->Staff_id, 'method' => 'put','class'=>'form-horizontal')); !!}

    {{-- Staff id --}}
    <div class="form-group">
      {!! Form::label('id','หมายเลขบัตรประชาชน :',array('class'=>'col-md-4 control-label')); !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col-md-6">
          <div class="input-group">
           <div class="input-group-addon">
            <i class="fa fa-id-card"></i>
           </div>
              {!! Form::text('Staff_id',null,array('class' => 'form-control input-md','readonly'=>'true')); !!}
          </div>
        </div>
    </div>

    {{-- Name --}}
    <div class="form-group">
      {!! Form::label('fname','ชื่อ :',array('class'=>'col-md-4 control-label')); !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col-md-6">
          <div class="input-group">
           <div class="input-group-addon">
            <i class="fa fa-user-circle"></i>
           </div>
              {!! Form::text('Name',null,array('class' => 'form-control input-md')); !!}
          </div>
        </div>
    </div>

    {{-- Surname --}}
     <div class="form-group">
      {!! Form::label('lname','นามสกุล :',array('class'=>'col-md-4 control-label')); !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col-md-6">
          <div class="input-group">
           <div class="input-group-addon">
            <i class="fa fa-user-circle-o"></i>
           </div>
              {!! Form::text('Surname',null,array('class' => 'form-control input-md')); !!}
          </div>
        </div>
    </div>

    {{-- username --}}
     <div class="form-group">
      {!! Form::label('username','ชื่อผู้ใช้ :',array('class'=>'col-md-4 control-label')); !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col-md-6">
          <div class="input-group">
           <div class="input-group-addon">
            <i class="fa fa-users"></i>
           </div>
              {!! Form::text('Username',null,array('class' => 'form-control input-md')); !!}
          </div>
        </div>
    </div>

     {{-- password --}}
     <div class="form-group">
      {!! Form::label('password','รหัสผ่าน :',array('class'=>'col-md-4 control-label')); !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col-md-6">
          <div class="input-group">
           <div class="input-group-addon">
            <i class="  fa fa-key"></i>
           </div>
              {!! Form::text('Password',null,array('class' => 'form-control input-md')); !!}
          </div>
        </div>
    </div>

    {{-- address --}}
    <div class="form-group">
      {!! Form::label('address','ที่อยู่ :',array('class'=>'col-md-4 control-label')); !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col-md-6">
          <div class="input-group">
           <div class="input-group-addon">
            <i class="fa fa-home"></i>
           </div>
              {!! Form::text('Address',null,array('class' => 'form-control input-md')); !!}
          </div>
        </div>
    </div>

    {{-- Phone --}}
    <div class="form-group">
      {!! Form::label('phone','หมายเลขโทรศัพท์ :',array('class'=>'col-md-4 control-label')); !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col-md-6">
          <div class="input-group">
           <div class="input-group-addon">
            <i class="fa fa-phone"></i>
           </div>
              {!! Form::text('Phone',null,array('class' => 'form-control input-md')); !!}
          </div>
        </div>
    </div>

    {{-- email --}}
    <div class="form-group">
      {!! Form::label('email','อีเมล :',array('class'=>'col-md-4 control-label')); !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col-md-6">
          <div class="input-group">
           <div class="input-group-addon">
            <i class="fa fa-envelope-o"></i>
           </div>
              {!! Form::text('Email',null,array('class' => 'form-control input-md')); !!}
          </div>
        </div>
    </div>

    {{-- status --}}
    <div class="form-group">
      {!! Form::label('status','สถานะผู้ดูแล :',array('class'=>'col-md-4 control-label')); !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col-md-6">
          <div class="input-group">
           <div class="input-group-addon">
            <i class="fa fa-clock-o"></i>
           </div>
              {!! Form::text('Status',null,array('class' => 'form-control input-md','readonly'=>'true')); !!}
          </div>
        </div>
    </div>

    {{-- type --}}
    <div class="form-group">
      {!! Form::label('type','ประเภทผู้ดูแล :',array('class'=>'col-md-4 control-label')); !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col-md-6">
          <div class="input-group">
           <div class="input-group-addon">
            <i class="fa fa-street-view"></i>
           </div>
              {!! Form::text('Type',null,array('class' => 'form-control input-md','readonly'=>'true')); !!}
          </div>
        </div>
    </div>

    {{--submit button --}}
    <div class="form-group">
    <label class="col-md-4 control-label" ></label> 
    <div class="col-md-4" align="center">
      {!! Form::submit('บันทึก',array('class' => 'btn btn-default')); !!}
    </div>
    </div>

 
                          
                          
    {!! Form::close(); !!}
@endforeach