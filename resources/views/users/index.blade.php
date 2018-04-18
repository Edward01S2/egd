@extends ('layout')

@section ('content')

<div class="col-md-12">
    <div class="d-flex align-items-center mb-2">
        <h1 class="mr-auto">User Administration</h1>
        <a href="{{ route('roles.index') }}" class="btn btn-outline-secondary mr-2">Roles</a>
        <a href="{{ route('permissions.index') }}" class="btn btn-outline-secondary">Permissions</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr class="d-flex">
                    <th class="col-3">Name</th>
                    <th class="col-4">Email</th>
                    <th class="col-2">User Roles</th>
                    <th class="col-3">Operations</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr class="d-flex">

                    <td class="col-3">{{ $user->name }}</td>
                    <td class="col-4">{{ $user->email }}</td>
                    <td class="col-2">{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                    <td class="col-3">
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info float-left mr-2">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>
    
    </div>
    


@endsection