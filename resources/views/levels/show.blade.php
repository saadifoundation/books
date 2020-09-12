@extends('layouts.app')

@section('title', __('سطح').' '.__($level->title))
@section('content')
  <div class="row">
    <div class="col-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">
            سطوح بنیاد سعدی
          </a></li>
          <li class="breadcrumb-item active" aria-current="page">
            {{__('سطح') }} {{__($level->title)}}
          </li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col-12">
      <div class="badges mb-3 text-right">
        <a href="#books-row" class="btn btn-primary btn-sm mb-3">
          کتاب‌های سطح <span class="badge badge-light">3</span>
        </a>
        <a href="#writers-row" class="btn btn-primary btn-sm mb-3">
          مؤلفان سطح <span class="badge badge-light">5</span>
        </a>
      </div>
      <div class="description text-right font-weight-light">
          <p>
              {{ __($level->intro) }}
          </p>
      </div>
      <div class="levels">
        @foreach ($levels as $each_level)
            <div class="mb-1">
                <a class="progress" href="{{route('level', $each_level)}}">
                    <div class="progress-bar progress-bar-striped progress-bar-animated @if($level->title_abbr == $each_level->title_abbr) bg-level-{{$each_level->title_abbr}} @else bg-secondary @endif" role="progressbar" aria-valuenow="{{$each_level->width}}" 
                    aria-valuemin="0" aria-valuemax="100" style="width: {{$each_level->width}}%">
                        {{ __("$each_level->title") }}: {{ strtoupper($each_level->title_abbr) }}
                    </div>
                </a>
            </div> 
        @endforeach
      </div>
    </div>
  </div>
  <div class="row text-center d-flex justify-content-center border-top mb-4" id="books-row">
    <div class="col-12">
      <h2 class="mb-4 mt-4">
        کتاب‌های سطح
      </h2>
    </div>
    <div class="col-6 col-md-3 mb-2">
      <a href="mina2.html">
        <div class="card book-card">
          <img src="img/mina1.jpg" class="card-img-top">
          <div class="card-body">
            <p class="card-text">
              مینا 1
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-3 mb-2">
      <a href="mina2.html">
        <div class="card book-card">
          <img src="img/mina2.jpg" class="card-img-top">
          <div class="card-body">
            <p class="card-text">
              چارچوب 1
            </p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-3 mb-2">
      <a href="mina2.html">
        <div class="card book-card">
          <img src="img/mina3.jpg" class="card-img-top">
          <div class="card-body">
            <p class="card-text">
              گام اول
            </p>
          </div>
        </div>
      </a>
    </div>
  </div>
  <div class="row text-center d-flex justify-content-center border-top" id="writers-row">
    <div class="col-12">
      <h2 class="mb-4 mt-4">
        مؤلفان سطح
      </h2>
    </div>
    <div class="col-6 col-md-3 person">
      <a href="sahraei-reza.html">
        <figure class="figure text-center">
          <img src="img/persons/sahraei-reza.jpg" alt="" class="w-50 rounded figure-img img-fluid">
          <figcaption class="figure-caption text-center">
            رضامراد صحرایی
            <span class="badge badge-primary">
              مؤلف <span class="badge badge-light">3</span>
            </span>
          </figcaption>
        </figure>
      </a>
    </div>
    <div class="col-6 col-md-3 person">
      <a href="sahraei-reza.html">
        <figure class="figure text-center">
          <img src="img/persons/gharibi-afsaneh.png" alt="" class="w-50 rounded figure-img img-fluid">
          <figcaption class="figure-caption text-center">
            افسانه غریبی
            <span class="badge badge-primary">
              مؤلف <span class="badge badge-light">1</span>
            </span>
          </figcaption>
        </figure>
      </a>
    </div>
    <div class="col-6 col-md-3 person">
      <a href="sahraei-reza.html">
        <figure class="figure text-center">
          <img src="img/persons/marsus-fzeze.jpg" alt="" class="w-50 rounded figure-img img-fluid">
          <figcaption class="figure-caption text-center">
            فائزه مرصوص
            <span class="badge badge-primary">
              مؤلف <span class="badge badge-light">1</span>
            </span>
          </figcaption>
        </figure>
      </a>
    </div>
  </div>
@endsection