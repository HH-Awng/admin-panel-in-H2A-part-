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
            <h5 class="title">{{__(" Category")}}</h5>
          </div>
          <div class="card-body">
            <form class="row g-3">
                <div class="col-md-6 form-group">
                  <label for="Name" class="form-label">Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Name...">
                </div>
                <div class="col-md-6 form-group">
                  <label for="Slug" class="form-label">Slug</label>
                  <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug...">
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
                    <tr>
                      <td>
                        Dakota Rice
                      </td>
                      <td>
                        Niger
                      </td>
                      <td>
                        Oud-Turnhout
                      </td>
                      <td class="text-right">
                        $36,738
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Minerva Hooper
                      </td>
                      <td>
                        Curaçao
                      </td>
                      <td>
                        Sinaai-Waas
                      </td>
                      <td class="text-right">
                        $23,789
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Sage Rodriguez
                      </td>
                      <td>
                        Netherlands
                      </td>
                      <td>
                        Baileux
                      </td>
                      <td class="text-right">
                        $56,142
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Philip Chaney
                      </td>
                      <td>
                        Korea, South
                      </td>
                      <td>
                        Overland Park
                      </td>
                      <td class="text-right">
                        $38,735
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Doris Greene
                      </td>
                      <td>
                        Malawi
                      </td>
                      <td>
                        Feldkirchen in Kärnten
                      </td>
                      <td class="text-right">
                        $63,542
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Mason Porter
                      </td>
                      <td>
                        Chile
                      </td>
                      <td>
                        Gloucester
                      </td>
                      <td class="text-right">
                        $78,615
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Jon Porter
                      </td>
                      <td>
                        Portugal
                      </td>
                      <td>
                        Gloucester
                      </td>
                      <td class="text-right">
                        $98,615
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