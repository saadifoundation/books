@extends('layouts.app')

@section('title', __('سطح').' '.__($level->title))
@section('content')
  <div class="row">
    <div class="col-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('index') }}">
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
          کتاب‌های سطح <span class="badge badge-light">{{$level->books->count() }}</span>
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
                <a class="progress" href="{{route('levels.show', $each_level)}}">
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
              <img src="{{ $book->cover !== NULL ? Storage::url($book->cover) : asset('img/cover.jpg') }}" class="card-img-top">
              <div class="card-body">
                  <p class="card-text">
                      {{ $book->title }}
                      @foreach ($book->levels as $level)
                        <div class="mb-1">
                          <a class="progress" href="{{ route('levels.show', $level) }}">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-level-{{$level->title_abbr}}" role="progressbar" aria-valuenow="{{$level->width}}" 
                            aria-valuemin="0" aria-valuemax="100" style="width: {{$level->width}}%">
                              {{ strtoupper($level->title_abbr) }}
                            </div>
                          </a>
                        </div>
                      @endforeach
                      @foreach ($book->tags as $tag)
                        <a href="{{ route('tags.show', $tag) }}">
                          <span class="badge badge-primary">
                            {{ $tag->title }}
                          </span>
                        </a>
                      @endforeach
                  </p>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  @endif
@endsection