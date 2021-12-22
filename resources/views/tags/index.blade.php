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
            <h5 class="title">{{__(" Tags")}}</h5>
          </div>
         
          <div class="card-body">
          
            <form action="{{route('tag_post')}}" method="POST" class="row g-3">
              @csrf
              @include('alerts.success')
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

                  <tr class="text-red font-weight-bold">
								<th class="n-sticky">No.</th><th class="n-sticky">Name<th class="text-center n-sticky">Action</th>
							</tr>
                  </thead>
                  <tbody>
                    @foreach($tags as $key=>$tag)
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{$tag->tags}}</td>
                    <td class="text-center"><a href="{{route('tag_delete', $tag->id)}}" class="px-3 btn-sm" title="Delete" onclick="return confirm('Are you sure')"><i class="now-ui-icons ui-1_simple-remove"></i> <a href="#" class="px-3 ml-3 btn-sm"><i class="now-ui-icons ui-2_settings-90"></i></a></td>
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