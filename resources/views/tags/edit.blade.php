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
        
          <div class="card-header">
            <h5 class="title">{{__(" Edit Tags")}}</h5>
          </div>
          <div class="card-body">
          
            <form action="{{route('tags_update', $tags->id)}}" method="POST" class="row g-3">
              @csrf
                <div class="col-md-12 form-group">
                  <label for="Name" class="form-label">Name</label>
                  <input type="text" name="tags" class="form-control" value="{{$tags->tags}}"placeholder="Name...">
                  @include('alerts.feedback', ['field' => 'tags'])
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-round ">{{__('Updated')}}</button>
                </div>
              </form>
          </div>
      </div>
<!-- end card -->
</div>
<!-- end content -->
@endsection