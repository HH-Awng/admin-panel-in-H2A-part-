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
          @if(session('success'))
			      <div class="alert alert-primary text-center text-white font-weight-bold">	
					    {{session('success')}}
			      </div>	
		      @endif

          <div class="card-header">
            <h5 class="title">{{__(" Category")}}</h5>
          </div>

          <div class="card-body">
            <form class="row g-3" action="{{route('category.store')}}" method="POST">
              @csrf
                <div class="col-md-6 form-group">
                  <label for="Name" class="form-label">Name</label>
                  <input type="text" name="name" class="form-control"  id="name" placeholder="Name...">
                  @error('name')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-md-6 form-group">
                  <label for="Slug" class="form-label">Slug</label>
                  <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug...">
                  @error('slug')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-round ">{{__('Save')}}</button>
                </div>
              </form>
          </div>
      </div>
      {{-- Category Table --}}
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> Category Table</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      Name
                    </th>
                    <th>
                      Slug
                    </th>
                    <th>
                      Created Date
                    </th>
                    <th class="text-right">
                      Action
                    </th>
                  </thead>
                  <tbody>
                    @foreach($categories as $category)
                    <tr>
                      <td>
                    {{$category->name}}
                      </td>

                      <td>
                        {{$category->slug}}
                      </td>

                      <td>
                        {{\Carbon\Carbon::parse($category->created_at)->format('d-m-Y')}}
                      </td>
                      <td class="text-right">
                    
                    <form action="{{url('category/'.$category->id )}}" method="POST">
                      @csrf @method('DELETE')
                      <a href="{{route('category.edit', $category->id)}}">
                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
                      </a>
                      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')">Delete</button>
                    </form>
                      </td> 
                    </tr>
                    @endforeach
                    
                    
                    
                   
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        
        </div>
      
  </div>
@endsection