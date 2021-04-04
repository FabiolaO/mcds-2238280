@extends('layouts.app')

@section('title', 'Module Categories')

@section('content')
 <div class="container">
     <div class='row'>
         <div class="col-md-12 offset-md-1">
             <h1><i class="fas fa-categories"></i>Modulo Categories</h1>
             <hr>
             <a href="{{ route('categories.create') }}" class="btn btn-success">
                 <i class="fas fa-plus"></i>Add Categories
                </a>
                <input type="hidden" id="tmodel" value="categories">
                <input type="text" id="qsearch" name="qsearch" class="form-search" autocomplete="off" placeholder="Search">
                <br>
                <div class="loader d-none text-center mt-5">
                    <img src="{{ asset('imgs/rings.svg') }}" width="120px" alt="">
                </div>
                <br>
                <table class="table table-striped table-border">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Description</th>                           
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="content">
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>                            
                            <td><img src="{{ asset($category->image) }}" width="36px" class="img-thumbnail rounded-circle"></td>
                            <td>{{ $category->description }}</td>
                            <td>
                                <a href="{{ url('categories/'.$category->id) }}" class="btn btn-sm btn-larapp">
                                <i class="fas fa-search"></i>
                                </a>
                                <a href="{{ url('categories/'.$category->id.'/edit') }}" class="btn btn-sm btn-larapp">
                                <i class="fas fa-pen"></i>
                                </a>                               
                                <form action="{{ url('categories/'.$category->id) }}" class="d-inline" method="POST">
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
                {{ $categories->links() }}

         </div>

     </div>

 </div>
    
@endsection
    
