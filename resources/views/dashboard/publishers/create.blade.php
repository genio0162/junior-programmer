@extends('dashboard.layouts.main')
@section('main')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Add New Publisher</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form  action="/backboard/publishers" method="post" enctype="multipart/form-data" novalidate>
                            @csrf
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Name<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control @error('name') is-invalid @enderror" placeholder="ex. Universitas Jember" type="text" data-validate-length-range="6" data-validate-words="2" name="name" required="required" value="{{ old('name') }}" />
                                    @error('name')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Alias<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control @error('alias') is-invalid @enderror" placeholder="ex. UM, ITS, UI ..." type="text" name="alias" data-validate-length-range="5,15"  value="{{ old('alias') }}"/>
                                    @error('alias')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Website<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control @error('website') is-invalid @enderror" name="website" required="required" type="text" value="{{ old('website') }}" placeholder="https://www.example.com"/>
                                    @error('website')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align ">Province<span class="required">*</span></label>
                                <div class="ccol-md-6 col-sm-6">
                                    <select name="province_id" class="select2_single form-control @error('province_id') is-invalid @enderror" tabindex="-1">
                                        <option></option>
                                        @foreach ($provinces as $province )
                                        @if (old('province_id') == $province->id)
                                        <option value="{{ $province->id }}" selected>{{ $province->name }}</option>
                                        @else
                                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @error('province_id')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align ">Regency/City<span class="required">*</span></label>
                                <div class="ccol-md-6 col-sm-6">
                                    <select  name="regency_id" class="select2_single form-control @error('regency_id') is-invalid @enderror" tabindex="-1">
                                        <option></option>
                                        @foreach ($regencies as $regency )
                                        @if (old('regency_id') == $regency->id)
                                        <option value="{{ $regency->id }}" selected>{{ $regency->name }}</option>
                                        @else
                                        <option value="{{ $regency->id }}">{{ $regency->name }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @error('regency_id')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Image <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <div class="input-group mb-3">
                                        <img class="img-preview img-fluid">
                                        <input type="file" name="img" class="form-control  @error('img') is-invalid @enderror" id="img" onchange="previewImage()">
                                        @error('img')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                    @enderror
                                      </div>
                                </div>
                            </div>
                            {{-- <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Abstract<span class="required">*</span></label>
                                <div class="col-md-6 ">
                                    <textarea class="col-lg-12" required="required" rows="10"  name="abstract">{{ old('abstract') }}
                                    </textarea>
                                </div>
                                    @error('abstract')
                                    <p class="text-danger"> {{ $message }}</p>
                                   @enderror --}}
                            </div>
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <button type='submit' class="btn btn-primary">Create Publisher</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection