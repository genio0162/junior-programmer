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

      <div class="row">
        <div class="col-lg-8">
          <div class="mb-5">
            <p class=" d-flex align-items-center mb-4 text-primary">Jurnal : '{{ $article->journal->title }}'</p>
            <hr>
            <h2 class="text-center">{{ $article->title }}</h2>
            
            <a class="text-center"  href="/author/{{ $article->user_id }}"><p class="text-center">{{ $article->user->name }}</a>&nbsp;({{ $article->publisher->name }})</p>
            <hr style="margin: 0px;">
            <hr style="margin-top: 1px;">
          </div>
          <div class="mb-5">
            <h3 class="h5 d-flex align-items-center mb-4 text-primary"></span>Abstract</h3>
            <p>{{ $article->abstract }}</p>
            <p style="text-align:right">
                <?php $y   = new DateTime(); //this returns the current date time
                $result = $y->format('Y');?>
                <i>Copyrights © {{ $result }}</i>
            </p>
          </div>
          <hr style="margin: 0px;">
          <hr style="margin-top: 2px;">
        </div>

        <div class="col-lg-4">
          <div class="bg-light p-3 border rounded mb-4">
            <small class="text-primary  mt-3 pl-3 mb-3 "></>Journal Info</small>
            <ul class="list-unstyled pl-3 mb-0">
                <h5 class="text-primary h5 mt-3 pl-3 mb-3 "><a href="/journals/{{ $article->journal->id }}">{{ $article->journal->title }}</a></h5>
              <li class="mb-2"><strong class="text-black">Website:&nbsp;</strong><a href="{{ $article->journal->website }}">{{ $article->journal->website }}</a></li>
              <li class="mb-2"><strong class="text-black">Publisher:</strong>&nbsp;<a href="/publishers/{{ $article->journal->publisher_id }}">{{ $article->journal->publisher->name }}</a></li>
              <li class="mb-2"><strong class="text-black">Subject:</strong>  @foreach ($article->journal->subjects as $s )
                <strong class="icon-tag mr-2">
                  <a href="/subjects/{{ $s->id }}">{{ $s->name }}</a>&nbsp |
                </strong>
                @endforeach</li>
              <li class="mb-2"><strong class="text-black">Description:</strong><p>{{ $article->journal->description }}</p></li>
            </ul>
          </div>

          <div class="bg-light p-3 border rounded">
            <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Article Info</h3>
            <div class="px-3">
                <?php $date = $article->created_at;
                        $result = $date->format('d M Y');
                 ?>
                 <small>Publish Date :</small>
                <p>{{ $result }}</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

@endsection