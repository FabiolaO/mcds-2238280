@extends('layouts.app')

@section('title', 'Module Users')

@section('content')
 <div class="container">
     <div class='row'>
         <div class="col-md-12 offset-md-1">
             <h1><i class="fas fa-users"></i>Modulo Users</h1>
             <hr>
             <a href="{{ route('users.create') }}" class="btn btn-success">
                 <i class="fas fa-plus"></i>Add Users
                </a>
                <br>
                <table class="table table-striped table-border">
                    <thead>
                        <tr>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Photo</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->fullname }}</td>
                            <td>{{ $user->email }}</td>
                            <td><img src="{{ asset($user->photo) }}" width="36px" class="img-thumbnail rounded-circle"></td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <a href="{{ url('users/'.$user->id) }}" class="btn btn-sm btn-larapp">
                                <i class="fas fa-search"></i>
                                </a>
                                <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-sm btn-larapp">
                                <i class="fas fa-pen"></i>
                                </a>
                                <a href="" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i>
                                </a>

                            </td>

                        </tr>
                            
                        @endforeach
                    </tbody>

                </table>
                {{ $users->links() }}

         </div>

     </div>

 </div>
    
@endsection
    
