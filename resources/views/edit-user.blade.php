@extends('master')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Editing the account of "{{ $user->name }}"</h1>
        </div>
    
        <table class="table">
            <h2>User Roles</h2>
            <thead>
                <tr>
                    <th>Role</th>
                    <th>Use has this Role?</th>
                    <th>Toggle</th>
                </tr>
            </thead>
            <tbody>
                @foreach( \Spatie\Permission\Models\Role::all() as $role )
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td>{{ $user->hasRole( $role ) ? 'Yes' : 'No' }}</td>
                        <td>
                            <form action="/home/modify-accounts/{{ $user->id }}/roles" method="post">
                                {!! csrf_field() !!}
                                <input type="hidden" name="role" value="{{ $role->name }}">
                                @if( $user->hasRole( $role ) )
                                    <button class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-minus"></span>
                                        Remove
                                    </button>
                                @else
                                    <button class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-plus"></span>
                                        Add
                                    </button>
                                @endif
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <table class="table">
            <h2>User Permissions</h2>
            <thead>
                <tr>
                    <th>Permission</th>
                    <th>Use has this Permission?</th>
                    <th>Toggle</th>
                </tr>
            </thead>
            <tbody>
                @foreach( \Spatie\Permission\Models\Permission::all() as $permission )
                    <tr>

                        <td>{{ $permission->name }}</td>
                        <td>{{ $user->can( $permission->name ) ? 'Yes' : 'No' }}</td>
                        <td>
                            <form action="/home/modify-accounts/{{ $user->id }}/permissions" method="post">
                                {!! csrf_field() !!}
                                <input type="hidden" name="permission" value="{{ $permission->name }}">
                                @if( $user->can( $permission->name ) )
                                    <button class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-minus"></span>
                                        Remove
                                    </button>
                                @else
                                    <button class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-plus"></span>
                                        Add
                                    </button>
                                @endif
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection