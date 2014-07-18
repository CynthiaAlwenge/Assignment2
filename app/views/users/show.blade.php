@extends('layouts.master')

@section('content')

	<!-- <p>{{ link_to_route('users.create', 'Add new user') }}</p> -->

@if ($users->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>name</th>
        
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                      
			          <td>{{ $user->names }}</td>
                  
                </tr>
            @endforeach
              
        </tbody>
      
    </table>
@else
    There are no users
@endif
@stop