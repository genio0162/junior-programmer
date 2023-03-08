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
                                    <input id="search" type="text" name="search" class="form-control input-sm w-50" placeholder="Search ..." value="{{ request('search') }}" autofocus >
                                    <button type="submit" class="btn btn-primary"><span class="fa fa-search"></span>Search</button>
                                </span>
                            </form>
                        </div>
                        <a href="/backboard/publishers/create" class="btn btn-info mt-4 mb-3"><i class="fa fa-plus mr-1"></i>Create New Publisher</a>
                        @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>Congrats!!</strong> {{ session('success') }}
                        </div>
                        @endif
                        @if (session()->has('deleted'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <strong>Done!!</strong> {{ session('deleted') }}
                        </div>
                        @endif
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
                      @php $i = 1; @endphp
                        @foreach ($publishers as $p)
                        @if ($p->id == 1)
                          @continue
                        @endif
                      <tr>
                        <th scope="row"> {{ $i }}  @php $i++; @endphp</th>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->alias }}</td>
                        <td>{{ $p->regency->name }}</td>
                        <td>{{ $p->province->name }}</td>
                        <td>{{ $p->website }}</td>
                        <td>
                            <a href="/backboard/publishers/{{ $p->id }}" class="btn btn-info"><span class="fa fa-eye"></span></a>
                            <a href="/backboard/publishers/{{ $p->id }}/edit" class="btn btn-warning"><span class="fa fa-edit"></span></a>
                            <form action="/backboard/publishers/{{ $p->id }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf
                            <button class="btn btn-danger" onclick="return confirm('You sure to deleted data ?')"><span class="fa fa-close"></span></button>
                          </form>
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