@extends('layouts.app')

@section('title', $collection->title)

@section('description', $collection->intro !== null ? substr(strip_tags($collection->intro), 0, 400)."..." : $collection->title)
@section('image', $collection->books->first()->cover !== null ? asset(Storage::url($collection->books->first()->cover)) : asset('img/saadifoundation-logo.png'))

@section('content')
    <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('books.index') }}">
                {{ __('کتاب‌های بنیاد سعدی') }}
              </a></li>
              <li class="breadcrumb-item active" aria-current="page">
                {{ $collection->title }}
              </li>
            </ol>
          </nav>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-12">
          <div class="badges mb-3 text-right">
            <a href="#books-row" class="btn btn-primary btn-sm mb-3">
              {{ __('کتاب‌های مجموعه') }} <span class="badge badge-light">{{ $collection->books->count() }}</span>
            </a>
          </div>
          <div class="description text-justify font-weight-light mb-3">
              {!! $collection->intro !!}
          </div>
        </div>
      </div>
      <div class="row text-center d-flex justify-content-center border-top mb-4" id="books-row">
        <div class="col-12">
          <h2 class="mb-4 mt-4">
            {{ __('کتاب‌های مجموعه') }}
          </h2>
        </div>
        @foreach ($collection->books as $book)
          <div class="col-6 col-md-3 mb-2">
            <a href="{{ route('books.show', $book) }}">
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
                              <span class="badge badge-info">
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
@endsection