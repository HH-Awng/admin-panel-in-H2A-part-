@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Show Setting',
'activePage' => 'Show Setting',
'activeNav' => 'showsetting',
])

@section('content')
    <div class="panel-header panel-header-sm">

    </div>

    <div class="content">

        <div class="card">
           
            <div class="card-header">
                <h5 class="title"> <a href="{{route('indexsetting')}}">{{ __('Setting') }}</a></h5>
            </div>

           <!-- start card-body -->
            <div class="card-body">
                <table  class="table table-striped table-bordered table-responsive-lg" cellspacing="0" width="100%">
                    <thead class="text-center">
                        <th>
                            No
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Description
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Logo
                        </th>
                        <th>
                            Cover Photo
                        </th>
                        <th class="col-3">
                            Action
                        </th>
                    </thead>
                    <tbody>
                        @foreach($settings as $key=>$setting)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$setting->title}}</td>
                            <td>{{ Illuminate\Support\Str::of($setting->description )->words(10)}}</td>
                            <td>{{$setting->email}}</td>
                            <td><img src="{{ asset('storage/settingimage/' . $setting->logo) }}" /></td>
                            <td><img src="{{ asset('storage/settingimage/' . $setting->coverphoto) }}" />
                            
                        </td>
                            <td>
                                <a href="{{route('editsetting', $setting->id)}}" class="btn btn-success btn-sm">edit</a>
                                <a href="{{route('deletesetting', $setting->id)}}" class=" btn btn-danger btn-sm" onclick="return confirm('Are your sure delete')">delete</a>
                                
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                    
                </table>
                {{$settings->links() }}
            </div>
            <!-- end card-body -->
            
        </div>
       
      

    </div>

@endsection
