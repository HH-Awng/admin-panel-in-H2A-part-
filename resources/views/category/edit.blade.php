@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Category',
'activePage' => 'category',
'activeNav' => '',
])

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h5 class="title">{{ __(' Edit Category') }}</h5>
            </div>
            {{-- Edit Category Form --}}
            <div class="card-body">
                <form class="row g-3" action="{{ route('category.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-4 form-group">
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $category->name ?? old('name') }}"
                            id="name">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="Slug" class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control" id="slug"
                            value="{{ $category->slug ?? old('slug') }}" id="name">
                        @error('slug')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="Order" class="form-label">Order</label>
                        <input type="text" name="order" class="form-control" id="order"
                            value="{{ $category->order ?? old('order') }}" id="order">
                        @error('order')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-round ">{{ __('Update') }}</button>
                    </div>
                </form>
            </div>
            {{-- End Edit Category Form --}}
        </div>
    </div>
@endsection
