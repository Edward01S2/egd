@extends ('layout')

@section ('content')

<div class='col-md-6 offset-3'>

    <h1>Edit {{$permission->name}}</h1>
    <br>
    {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with permission data --}}

    <div class="form-group">
        {{ Form::label('name', 'Permission Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>
    <br>
    
    {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}
    <a href="/permissions" class="btn btn-link">Back</a>


    {{ Form::close() }}

</div>

@endsection