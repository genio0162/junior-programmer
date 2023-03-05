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
  </section>


  <section class="site-section">
    <div class="container">
      <div class="row align-items-center mb-5">
        <div class="col-lg-8 mb-4 mb-lg-0">
          <div class="d-flex align-items-center">
            <div class="border p-2 d-inline-block mr-3 rounded">
              <img src="../images/{{ $journal->img }}" alt="Image">
            </div>
            <div>
              <h2>{{ $journal->title }}</h2>
              <div>
                <span class="m-2"><span class="icon-room mr-2"></span> Published By, {{$journal->publisher->name}}</span><br>
                <span class="m-2"><span class="icon-note mr-2"></span> ISSN: {{ $journal->issn }} </span>
                <span class="m-2"><span class="icon-note mr-2"></span>  EISSN: {{ $journal->eissn }} </span><br>
                <span class="m-2"><span class="icon-tag mr-2"></span>
                @foreach ($journal->subjects as $s )
                <a href="/subjects/{{ $s->id }}"> {{ $s->name }} </a>|
                @endforeach
            </span>
                <span class="m-2"><span class="icon-link mr-2"></span><span class="text-primary"><a href="http://{{ $journal->website }}">{{ $journal->website }}</a></span></span>
              </div><br>
              <p>{{ $journal->abstract }}</p>
            </div>
          </div>
        </div>
      </div>
      <section class="site-section">
        <div class="container">
          <form method="post" class="search-jobs-form">
            <div class="row mb-5">
              <div class="col-12 col-sm-6 col-md-6 col-lg-9 mb-4 mb-lg-0">
                <input type="text" class="form-control form-control-lg" placeholder="Journal Name, ISSN, EISSN ...">
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search</button>
              </div>
            </div>
          </form>


          <ul class="mb-5">
            @foreach ( $articles as $article )
            <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
              <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                <div class="job-listing-position custom-width w-25 mb-3 mb-sm-0">
                  <a href="/article/{{ $article->id }}"><h2>{{ $article->title }}</h2></a>
                  <a href="/author/{{ $article->user->id }}"><strong>{{ $article->user->name }}</strong></a><br>
                  <strong>Jurnal : {{ $article->journal->title }}</strong><br>
                  <strong>Publisher : {{ $article->publisher->name }}</strong>
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
              @if ( $total->count() >= 5)
              <span>Showing 1-5 Of {{ $total->count() }} Articles</span>
              @else
              <span>Showing {{ $total->count() }} Articles</span>
              @endif
            </div>
            <div class="col-md-6 text-center text-md-right">
              <div class="ml-auto">
                <div class="d-inline-block">
                  {{ $articles  ->links() }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </section>
@endsection