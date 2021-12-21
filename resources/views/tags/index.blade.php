@extends('layouts.app', [
  'namePage' => 'Tags',
  'class' => 'sidebar-mini',
  'activePage' => 'Tags',
])

@section('content')
<div class="panel-header panel-header-sm">
  </div>
  <div class="content">
        <div class="card">
          <div class="card-header">
            <h5 class="title">{{__(" Tags")}}</h5>
          </div>
          <div class="card-body">
            <form action="{{route('tag_post')}}" method="POST" class="row g-3">
              @csrf
                <div class="col-md-12 form-group">
                  <label for="Name" class="form-label">Name</label>
                  <input type="text" name="tags" class="form-control" id="name" placeholder="Name...">
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
              <h4 class="card-title"> Tags Table</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      Name
                    </th>
                    
                   
                    <th class="text-left">
                      Action
                    </th>
                  </thead>
                  <tbody>
                  <tr>
                    <td>laravel</td>
                    <td>
                      <button>delete</button>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        
        </div>
      
  </div>
@endsection