@extends('layouts.app', [
  'namePage' => 'Tags',
  'class' => 'sidebar-mini',
  'activePage' => 'tags',
])

@section('content')
<div class="panel-header panel-header-sm">
  </div>
  <!-- start content -->
  <div class="content">
    <!-- start card -->
        <div class="card">
        <!-- start section -->
       @include("alerts.custom_success")
          <!-- end section -->
          <div class="card-header">
            <h5 class="title">{{__(" Tags")}}</h5>
          </div>
  
          <div class="card-body">
            <form action="{{route('tag_post')}}" method="POST" class="row g-3">
              @csrf
                <div class="col-md-12 form-group">
                  <label for="Name" class="form-label">Name</label>
                  <input type="text" name="tags" class="form-control" value="{{old('tags')}}" placeholder="Name...">
               @include('alerts.feedback', ['field' => 'tags'])
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-round ">{{__('Save')}}</button>
                </div>
              </form>
          </div>
      </div>

      {{-- tags Table --}}
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

                  <tr class="text-red font-weight-bold">
								<th>No.</th><th>Name<th class="text-right">Action</th>
							</tr>
                  </thead>
                  <tbody>
                    @foreach($tags as $key=>$tag)
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{$tag->tags}}</td>
                    <td class="text-right">
<a href="{{route('tags_edit', $tag->id)}}">
    <button type="button" class="btn btn-primary btn-sm">Edit</button>
</a>
<a class="btn btn-danger btn-sm" href="{{route('tag_delete', $tag->id)}}">Delete</a>
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
      <!-- end card -->
  </div>
@endsection