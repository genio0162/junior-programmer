@extends('layouts.main')
@section('main')
    <!-- HOME -->
    <section class="home-section section-hero overlay bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12 mt-5">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">The Easiest Way To Get Reseach Articles</h1>
              <p>Search within {{ $totalAT->count() }} indexed articles</p>
            </div>
            <form action="/" method="get" class="search-jobs-form">
              <div class="row mb-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-9 mb-4 mb-lg-0">
                  <input type="text" name="search" class="form-control form-control-lg" placeholder="Search Articles" value="{{ request('search') }}">
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <a href="#next" class="scroll-button smoothscroll">
        <span class=" icon-keyboard_arrow_down"></span>
      </a>
    </section>

    <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2 text-white">Research Articles Site Stats</h2>
          </div>
        </div>
        <div class="row pb-0 block__19738 section-counter justify-content-center">

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="{{ $publishers->count() }}">0</strong>
            </div>
            <span class="caption">Publisher</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="{{ $journals->count() }}">0</strong>
            </div>
            <span class="caption">Journals</span>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">{{ $totalA->count() }} Articles</h2>
          </div>
        </div>
@if ($articles->count())
<ul class="mb-5">
  @foreach ( $articles as $article )

  <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
    <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
      <div class="job-listing-position custom-width w-25 mb-3 mb-sm-0">
        <a href="/article/{{ $article->id }}"><h2>{{ $article->title }}</h2></a>
        <a href="/author/{{ $article->user->id }}"><strong>{{ $article->user->name }}</strong></a><br>
        <strong>Jurnal : {{ $article->journal->title }}</strong><br>
        @if ($article->publisher === null )
        <strong>Publisher : - </strong>
          @else
          <strong>Publisher : {{ $article->publisher->name }}</strong>
        @endif
      </div>
      <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
        <span class="icon-download"></span> download original |&nbsp;<span class="icon-note"></span> Full PDF
      </div>
      <div class="job-listing-meta">
        <span class="badge badge-success">Available</span>
      </div>
    </div>
  </li>
  @endforeach
</ul>
<div class="row pagination-wrap">
  <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
    @if ( $totalA->count()  >= 5)
    <span>Showing 1-5 Of {{ $totalA->count() }} Articles</span>
    @else
    <span>Showing {{ $totalA->count() }} Articles</span>
    @endif
  </div>
  <div class="col-md-6 text-center text-md-right">
    <div class="ml-auto">
      <div class="d-inline-block">
        {{ $articles->links() }}
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

