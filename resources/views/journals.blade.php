@extends('layouts.main')
@section('main')
<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
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
          <h2 class="section-title mb-2">{{ $total->count() }} journal</h2>
        </div>
      </div>
      <form method="post" class="search-jobs-form">
        <div class="row mb-5">
          <div class="col-12 col-sm-6 col-md-6 col-lg-9 mb-4 mb-lg-0">
            <input type="text" class="form-control form-control-lg" placeholder="Journal Name ...">
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search</button>
          </div>
        </div>
      </form>


      <ul class="job-listings mb-5">
        @foreach ($journals as $journal )
        <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
            <a href="/journals/{{ $journal->id }}"></a>
            <div class="job-listing-logo">
              <img src="../images/{{ $journal->img }}" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </div>

            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
              <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                <h2>{{ $journal->title}}</h2>
                <strong>{{ $journal->publisher->name }}</strong><br>
                <strong>JOURNAL ISSN: {{ $journal->issn }} EISSN: {{ $journal->eissn }}</strong>
              </div>
              <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                <span class="icon-room"></span> {{ $journal['website'] }}
              </div>
            </div>
          </li>
        @endforeach
      </ul>

      <div class="row pagination-wrap">
        <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
          <span>Showing 1-5 Of {{ $total->count() }} journals</span>
        </div>
        <div class="col-md-6 text-center text-md-right">
          <div class="ml-auto">
            <div class="d-inline-block">
              {{ $journals->links() }}
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

@endsection