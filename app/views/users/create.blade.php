@extends('layouts.master')

@section('content')

     {{Form::open(array('route'  =>'users.store')) }}
    
<div class="form-group">
	 {{Form::label('Name')}}

     {{Form::text('Names',null, array('class' => 'form-control')) }}
</div>

    
<div class="form-group">
      {{Form::label('gender')}}
      <div class="radio">
      <label>{{Form::radio('gender','female','true')}}female</label>
    
 </div>
     <div class="radio">
      <label>{{Form::radio('gender','male')}}male</label>
   
 </div>
</div>
<div class="form-group">
     {{Form::label('phone')}}
    {{Form::text('phone',null, array('class' => 'form-control')) }}
</div>
<div class="form-group">
     {{Form::label('date of birth')}}
     {{Form::selectRange('dob[day]',1,31)}}
     {{Form::selectMonth('dob[month]')}}
     {{Form::selectRange('dob[year]',1900,1996)}}
     
</div>
<div class="form-group">
     {{Form::label('Country')}}
     {{Form::text('country',null, array('class' => 'form-control')) }}
</div>  
     
<div class="form-group">
     {{Form::label('marital_status')}}
     {{Form::select('marital_status' ,$marital_status, null,array('class' => 'form-control')) }}

</div>

     {{Form::submit('Create profile', array('class' => 'btn btn-primary')) }}


     {{Form::close() }}
@stop
 