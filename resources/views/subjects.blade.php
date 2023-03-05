@extends('layouts.main')
@section('main')
<section class="section-hero overlay inner-page bg-image" style="background-image: url('../images/hero_1.jpg');" id="home-section">
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
    <section class="site-section services-section bg-light block__62849" id="next-section">
        <div class="container">

          <div class="row">
            @foreach ($subjects as $subject )
            <div class="col-12 col-md-12 col-lg-2 mb-4 mb-lg-5">
              <a href="service-single.html" class="block__16443 text-center d-block">
                <span class="custom-icon mx-auto"><span class="icon-tag d-block"></span></span>
                <h3>{{ $subject->name }}</h3>
              </a>
            </div>
            @endforeach
          </div>

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


          <ul class="mb-5">
            @foreach ($journals as $journal )
            <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
              <a href="journals/{{ $journal['id'] }}"></a>
              <div class="job-listing-logo">
                <img src="../images/{{ $journal["img"] }}" alt="Free Website Template by Free-Template.co" class="img-fluid">
              </div>

              <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                  <h2>{{ $journal->title}}</h2>
                  <strong>{{ $journal->publisher->name }}</strong><br>
                <strong>JOURNAL ISSN: {{ $journal->issn }} EISSN: {{ $journal->eissn }}</strong><br>
                @foreach ($journal->subjects as $s )
                <strong class="icon-tag mr-2">
                  <a href="/subjects/{{ $s->id }}">{{ $s->name }}</a>&nbsp; |
                </strong>
                 @endforeach
                </div>
                <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                  <span class="icon-link"><a href="http://{{ $journal->webiste }}">{{ $journal->website }}</a></span>
                </div>
                <div class="job-listing-meta">
                  <span> 1 Journal</span>
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
                  {{ $journals->links() }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        </div>
      </section>


  @endsection