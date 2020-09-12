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
  @if ($level->books->isNotEmpty())
    <div class="row text-center d-flex justify-content-center border-top mb-4" id="books-row">
      <div class="col-12">
        <h2 class="mb-4 mt-4">
          {{ __('کتاب‌های سطح') }}
        </h2>
      </div>
      @foreach ($level->books as $book)
        <div class="col-6 col-md-3 mb-2">
          <a href="{{ route('books.show', $book->title_abbr) }}">
            <div class="card book-card">
              <img src="@if($book->cover !== NULL) {{ Storage::url($book->cover) }} @else {{ asset('img/cover.jpg') }} @endif" class="card-img-top">
              <div class="card-body">
                <p class="card-text">
                  {{$book->title}}
                </p>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  @endif
  <div class="row text-center d-flex justify-content-center border-top" id="writers-row">
    <div class="col-12">
      <h2 class="mb-4 mt-4">
        {{ __('مؤلفان سطح') }}
      </h2>
    </div>
    @foreach($level->books as $book)
      @foreach($book->users->where('group', 'writing') as $user)
        <div class="col-6 col-md-3 person">
          <a href=" {{ route('users.show', $user->name_en) }} ">
            <figure class="figure text-center">
              <img src="{{ Storage::url($user->pic) }}" alt="" class="w-50 rounded figure-img img-fluid">
              <figcaption class="figure-caption text-center">
                {{ $user->name }}
                <span class="badge badge-primary">
                  {{ __('مؤلف') }} <span class="badge badge-light">{{ count($user->books) }}</span>
                </span>
              </figcaption>
            </figure>
          </a>
        </div>
      @endforeach
    @endforeach
  </div>
@endsection