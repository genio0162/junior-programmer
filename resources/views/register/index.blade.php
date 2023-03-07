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
<div class="col-lg-6 mb-5">
    <h2 class="mb-4">Sign Up To Research Article</h2>
    <form action="/register" method="post" class="p-4 border rounded">
      @csrf
      <div class="row form-group">
        <div class="col-md-12 mb-3 mb-md-0">
          <label class="text-black" for="name">Nama</label>
          <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Full name" value="{{ old('name') }}" required>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-12 mb-3 mb-md-0">
          <label class="text-black"  for="email">Email</label>
          <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" value="{{ old('email') }}" required>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-12 mb-3 mb-md-0">
          <label class="text-black"  for="password">Password</label>
          <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-12">
          <button type="submit" class="btn px-4 btn-primary text-white"> Sign Up </button>
        </div>
      </div>
    </form>
  </div>
</div>
        </div>
    </section>
  @endsection