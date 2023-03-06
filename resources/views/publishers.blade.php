@extends('layouts.main')
@section('main')
<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
    <div class="container mt-5">
      <div class="row mt-5">
        <div class="col-md-7 mt-5">
          <h1 class="text-white font-weight-bold">{{ $title }}</h1>
          <div class="custom-breadcrumbs">
            <a href="/">Home</a> <span class="mx-2 slash">/</span>
            <span class="text-white"><strong>{{ $title }}</strong></span>
          </div>
        </div>
      </div>
    </div>
  </section>
<section class="site-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-7 text-center">
          <h2 class="section-title mb-2">{{ $total->count() }} Publisher</h2>
        </div>
      </div>
      <form action="/publishers" method="get" class="search-jobs-form">
        <div class="row mb-5">
          <div class="col-12 col-sm-6 col-md-6 col-lg-9 mb-4 mb-lg-0">
            <input type="text" name="search" class="form-control form-control-lg" placeholder="Publisher Name ..." value="{{ request('search') }}">
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search</button>
          </div>
        </div>
      </form>

      @if ($publishers->count())
      <ul class="mb-5">
        @foreach ($publishers as $publisher )
        <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
          <a href="publishers/{{ $publisher->id }}"></a>
          <div class="job-listing-logo">
            <a href="publishers/{{ $publisher->id }}"><img src="images/{{ $publisher->img }}" class="img-fluid"></a>
          </div>
          <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
            <div class="job-listing-position custom-width w-25 mb-3 mb-sm-0">
              <a href="publishers/{{ $publisher->id }}"><h2>{{ $publisher->name}}</h2></a>
              <strong>{{ $publisher->alias }}</strong>
            </div>
            <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
              <span class="icon-link">&nbsp;</span><a href="http://{{ $publisher->website }}">{{ $publisher->website }}</a>
            </div>
            <div class="job-listing-meta">
              <span> {{ $publisher->journals->count() }} Journal</span>
            </div>
          </div>
        </li>
        @endforeach
      </ul>

      <div class="row pagination-wrap">
        <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
          @if ( $total->count()  >= 5)
          <span>Showing 1-5 Of {{ $total->count() }} Journals</span>
          @else
          <span>Showing {{ $total->count() }} Journals</span>
          @endif
        </div>
        <div class="col-md-6 text-center text-md-right">
          <div class="ml-auto">
            <div class="d-inline-block">
              {{ $publishers->links() }}
            </div>
          </div>
        </div>
      </div>
      @else
      <p class="text-center"> No Articles Found.</p>
      @endif
    </div>
  </section>

@endsection