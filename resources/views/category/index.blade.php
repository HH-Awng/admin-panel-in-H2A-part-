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
            {{-- Success Message --}}
            @include('alerts.custom_success')
            {{-- End Success Message --}}

            <div class="card-header">
                <h5 class="title">{{ __(' Category') }}</h5>
            </div>

            {{-- Create Category Form --}}
            <div class="card-body">
                <form class="row g-3" action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="col-md-4 form-group">
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}"
                            placeholder="Name...">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="Slug" class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control" id="slug" value="{{ old('slug') }}"
                            placeholder="Slug...">
                        @error('slug')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="Order" class="form-label">Order</label>
                        <input type="text" name="order" class="form-control" id="order" value="{{ old('order') }}"
                            placeholder="Order...">
                        @error('order')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-round ">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>
            {{-- End Create Category Form --}}
        </div>
        {{-- Category Display Table --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Category Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <a href="" class="btn btn-danger btn-sm" id="deleteAllSelectedRecord">Delete Select All</a>
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        <input type="checkbox" id="checkAll">
                                    </th>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Slug
                                    </th>
                                    <th>
                                        Order
                                    </th>
                                    <th>
                                        Created Date
                                    </th>
                                    <th class="text-right">
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $key => $category)
                                        <tr id="category_id{{ $category->id }}">
                                            <td>
                                                <input type="checkbox" name="ids" value="{{ $category->id }}">
                                            </td>
                                            <td>
                                                {{ ++$key }}
                                            </td>
                                            <td>
                                                {{ $category->name }}
                                            </td>

                                            <td>
                                                {{ $category->slug }}
                                            </td>

                                            <td>
                                                {{ $category->order }}
                                            </td>

                                            <td>
                                                {{ \Carbon\Carbon::parse($category->created_at)->format('d-m-Y') }}
                                            </td>
                                            <td class="text-right">


                                                <a href="{{ route('category.edit', $category->id) }}">
                                                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                                </a>
                                                <a class="btn btn-danger btn-sm del_btn" data-toggle="modal"
                                                    href="#exampleModalCenter"
                                                    data-value="{{ $category->id }}">Delete</a>

                                            </td>
                                        </tr>
                                        <!-- Category Delete Modal -->
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <p class="modal-title" id="exampleModalLongTitle">Delete post?
                                                        </p>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to permanently remove this category?
                                                        <form action="{{ route('category.destroy', $category) }}"
                                                            method="POST" id="post_form">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="hidden" id="del_row" name="id">
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-secondary"
                                                                    data-dismiss="modal">Cancel</button>
                                                                <button type="submit" id="del8j98okkli99"
                                                                    class="btn btn-primary btn-sm">Confirm</button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        {{-- End Category Delete Modal --}}
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- Pagination --}}
                            <div class="d-flex ">
                                {!! $categories->links() !!}
                            </div>
                            {{-- End Pagination --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
