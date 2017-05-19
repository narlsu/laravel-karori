@extends('master');

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Modify User Accounts</h1>
        </div>
    
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th>Roles</th>
                    <th>Permissions</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $allUsers as $user ) 
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @forelse( $user->roles->pluck('name') as $role )
                                {{ $role }}@if(!$loop->last),@endif
                            @empty
                                None
                            @endforelse
                        </td>
                        <td>
                            @forelse( $user->permissions->pluck('name') as $permission )
                                {{ $permission }}@if(!$loop->last),@endif
                            @empty
                                None
                            @endforelse
                        </td>
                        <td>
                            <a href="/home/modify-accounts/{{ $user->id }}/edit">
                                <span class="glyphicon glyphicon-edit"></span>
                                Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection