@extends('dashboard.layouts.main')
@section('main')
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Data Publishers</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                          <div class="card-box table-responsive">
                            <div>
                            <form method="get" action="/backboard/publishers">
                              <span>
                                    <input id="search" type="text" name="search" class="form-control input-sm w-50" placeholder="Search ..." autofocus >
                                    <button type="submit" class="btn btn-primary"><span class="fa fa-search"></span>Search</button>
                                </span>
                            </form>
                        </div>
                        <a href="/backboard/publishers/create" class="btn btn-info mt-4 mb-3"><i class="fa fa-plus mr-1"></i>Create New Publisher</a>
                  <table class="table" style="width:100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Alias</th>
                        <th>City</th>
                        <th>Province</th>
                        <th>Website</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                        @foreach ($publishers as $p )
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->alias }}</td>
                        <td>{{ $p->city }}</td>
                        <td>{{ $p->province }}</td>
                        <td>{{ $p->website }}</td>
                        <td>
                            <a href="/backboard/publishers/{{ $p->id }}" class="btn btn-info"><span class="fa fa-eye"></span></a>
                            <a href="/backboard" class="btn btn-warning"><span class="fa fa-edit"></span></a>
                            <a href="/backboard" class="btn btn-danger"><span class="fa fa-close"></span></a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $publishers->links() }}
                </div>
                </div>
            </div>
          </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection