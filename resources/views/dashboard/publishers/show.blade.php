@extends('dashboard.layouts.main')
@section('main')

<div class="container">

</div>
</div>

<div class="right_col" role="main">
<div class="row">
    <div class="col-md-12 col-sm-12  ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Publisher</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row align-items-center mb-5">
                <div class="col-lg-8 mb-4 mb-lg-0">
                  <div class="d-flex align-items-center">
                    <div class="border p-2 d-inline-block mr-3 rounded">
                      <img src="../../images/{{ $publisher->img }}" alt="Image">
                    </div>
                    <div>
                      <h2>{{ $publisher->name }}</h2>
                      <div>
                        <span class="ml-0 mr-2 mb-2"><span class="fa fa-home mr-2"></span>{{ $publisher->alias }}</span>
                        <span class="m-2"><span class="fa fa-map mr-2"></span>{{ $publisher->city .', '. $publisher->province }}</span>
                        <span class="m-2"><span class="fa fa-link mr-2"></span><span class="text-primary"><a href="http://{{ $publisher->website }}">{{ $publisher->website }}</a></span></span>
                      </div><br>
                      <h5>{{ $publisher->journals->count() }} Journal Published</h5>
                      <div class="mt-5">
                        <span><a href="">Edit</a></span> |
                        <span><a href="">Delete</a></span>
                      </div>
                      <div class="mt-3">
                      <a href="/backboard/publishers"> Back to publishers</a>
                    </div>
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