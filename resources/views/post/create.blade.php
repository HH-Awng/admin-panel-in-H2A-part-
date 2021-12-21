@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Posts',
    'activePage' => 'profile',
    'activeNav' => '',
])


@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">{{__(" Add Posts")}}</h5>
                    </div>
                <div class="card-body">
                    <form method="post" action="{{ route('profile.update') }}" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    @include('alerts.success')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input class="form-control" placeholder="{{ __('Title...') }}" type="text" name="title" value="{{ old('title') }}" required autofocus>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="Short Description">Short Desciption</label>
                                <input class="form-control" placeholder="{{ __('Short Description...') }}" type="text" name="short_description" value="{{ old('short_description') }}" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Category</label>
                                <select name="category" class="form-control">
                                    <option value="category">
                                        Category
                                    </option>
                                </select>
                               
                            </div>
                        </div>
                        <div class="col-md-6">
                        
                                <label for= "title">Feature</label>
                                <input class="form-control" type="file" name="feature" value="{{ old('feature') }}" required autofocus>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                                <label for="title">Description</label>
                                <textarea name="description" class="form-control" row="10" col="10" value="{{ old('description') }}" id="summernote" ></textarea>
                               
                            </div>
                        </div>
                       
                    </div>  
                 </div>
            </div>
        </div>
    </div>


  
@endsection

