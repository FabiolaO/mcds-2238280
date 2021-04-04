@extends('layouts.app')

@section('title', 'Add Category')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('home') }}"><i class="fas fa-clipboard-list"></i> Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ url('categories') }}"><i class="fas fa-users"></i> Module Categories</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-user-plus"></i> Add Category</li>
                </ol>
                </nav>
            <div class="card">
                <div class="card-header text-uppercase text-center">
                    <h5>
                        <i class="fa fa-category-plus"></i> 
                        Add Category
                    </h5>
                </div>

                {{-- <div class="row mt-4">
                    <div class="col-md-8 offset-md-2">
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              @foreach ($errors->all() as $message)
                                    <li>{{ $message }}</li>
                            @endforeach
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        @endif
                    </div>
                </div> --}}

                <div class="card-body">
                    <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="@lang('name')" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>                     

                        <div class="form-group">
                                <div class="text-center my-3">
                                    <img src="{{ asset('imgs/no-category.png') }}" width="120px" id="preview" class="img-thumbnail rounded-circle">
                                </div>
                                <button type="button" class="btn btn-block btn-secondary btn-upload"> 
                                    <i class="fas fa-upload"></i>
                                    Upload Image 
                                </button>
                                <input id="image" type="file" class="form-control d-none @error('image') is-invalid @enderror" name="image" accept="image/*">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>  

                
                        <div class="form-group">
                            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" placeholder="@lang('description')">

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                        
                        <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block text-uppercase">
                                    <i class="fas fa-save"></i> 
                                    Add
                                </button>
                                <a href="{{ route('categories.index') }}" class="btn btn-block btn-secondary text-uppercase">
                                    <i class="fas fa-arrow-left"></i> 
                                    Cancel
                                </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 