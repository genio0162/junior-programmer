@extends('layouts.main')
@section('main')
<section class="section-hero overlay inner-page bg-image" style="background-image: url('../images/hero_1.jpg');" id="home-section">
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
      <div class="row align-items-center mb-5">
        <div class="col-lg-8 mb-4 mb-lg-0">
          <div class="d-flex align-items-center">
            <div class="border p-2 d-inline-block mr-3 rounded">
              <img src="../images/{{ $publisher->img }}" alt="Image">
            </div>
            <div>
              <h2>{{ $publisher->name }}</h2>
              <div>
                <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span>{{ $publisher->alias }}</span>
                <span class="m-2"><span class="icon-room mr-2"></span>{{ $publisher->regency_name .', '. $publisher->province_name }}</span>
                <span class="m-2"><span class="icon-link mr-2"></span><span class="text-primary"><a href="{{ $publisher->website }}">{{ $publisher->website }}</a></span></span>
              </div><br>
              <h5>{{ $publisher->journals->count() }} Journal Published</h5>
            </div>
          </div>
        </div>
      </div>
      <section class="site-section">
        <div class="container">
          <form action="/publishers/{{ $publisher->id }}" method="get" class="search-jobs-form">
            <div class="row mb-5">
              <div class="col-12 col-sm-6 col-md-6 col-lg-9 mb-4 mb-lg-0">
                <input type="text" name="journal" class="form-control form-control-lg" placeholder="Journal Name, ISSN, EISSN ..." value="{{ request('journal') }}">
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search</button>
              </div>
            </div>
          </form>
          @if ($journals->count())

          <ul class="mb-5">
            @foreach ($journals as $journal )
            @if ($journal->id == 1)
                          @continue
                        @endif
            <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                <a href="/journals/{{ $journal->id }}"></a>
                <div class="job-listing-logo">
                  <img src="../images/{{ $journal->img }}" class="img-fluid">
                </div>

                <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                  <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                    <a href="/journals/{{ $journal->id }}"><h2>{{ $journal->title}}</h2></a>
                    <strong>{{ $journal->publisher->name }}</strong><br>
                    <strong>JOURNAL ISSN: {{ $journal->issn }} EISSN: {{ $journal->eissn }}</strong><br>
                    @foreach ($journal->subjects as $s )
                    <strong class="icon-tag mr-2">
                      <a href="/subjects/{{ $s->id }}">{{ $s->name }}</a>&nbsp |
                    </strong>
                    @endforeach
                  </div>
                  <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                    <span class="icon-link"><a href="{{ $journal->webiste }}"> {{ $journal->website }}</a></span>
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
          @else
<p class="text-center"> No Articles Found.</p>
@endif
        </div>
      </section>
    </div>
  </section>
@endsection