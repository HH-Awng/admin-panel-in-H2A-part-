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

        @if(session('success'))
			      <div class="alert alert-primary text-center text-white font-weight-bold">	
					    {{session('success')}}
			      </div>	
		      @endif

          <div class="card-header">
            <h5 class="title">{{__(" Edit Tags")}}</h5>
          </div>
         
          <div class="card-body">
          
            <form action="{{route('tags_update', $tags->id)}}" method="POST" class="row g-3">
              @csrf
              @include('alerts.success')
                <div class="col-md-12 form-group">
                  <label for="Name" class="form-label">Name</label>
                  <input type="text" name="tags" class="form-control" value="{{$tags->tags}}"placeholder="Name...">
                  @include('alerts.feedback', ['field' => 'tags'])
                </div>
                
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-round ">{{__('Upload')}}</button>
                </div>
              </form>
          </div>
      </div>

</div>
@endsection