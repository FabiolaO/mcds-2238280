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
                <input type="hidden" id="tmodel" value="users">
                <input type="text" id="qsearch" name="qsearch" class="form-search" autocomplete="off" placeholder="Search">
                <br>
                <div class="loader d-none text-center mt-5">
                    <img src="{{ asset('imgs/rings.svg') }}" width="120px" alt="">
                </div>
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
                    <tbody id="content">
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
                                <form action="{{ url('users/'.$user->id) }}" class="d-inline" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="btn btn-sm btn-danger btn-delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>

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
    
