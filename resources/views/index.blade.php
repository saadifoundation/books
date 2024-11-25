@extends('layouts.app')

@section('title', 'کتاب‌های آموزشی بنیاد سعدی')

@section('description', __("در این صفحه می‌توانید کتاب‌های آموزشی بنیاد سعدی را ببینید. کتاب‌هایی که با هدف آموزش زبان فارسی به غیرفارسی‌زبانان تالیف شده‌اند."))
@section('image', asset('img/saadifoundation-logo.png'))

@section('content')
  <div class="container">
    <div class="row mb-4 text-center">
      <div class="col-12">
        <div class="description font-weight-light">
            <p>
              بنیاد سعدی با هدف آموزش زبان فارسی به غیرفارسی‌زبانان تأسیس شده است و تاکنون در این زمینه
              {{ $books->count() }}
              کتاب تالیف کرده یا در دست تألیف دارد.
            </p>
        </div>
        <div class="badges mb-3">
          <a href="#levels-row" class="btn btn-success btn-sm mb-3">
              {{ __('سطوح') }} <span class="badge text-bg-light">{{ $levels->count() }}</span>
          </a>
          <a href="#books-row" class="btn btn-primary btn-sm mb-3">
            {{ __('کتاب‌ها') }} <span class="badge text-bg-light">{{ $books->count() }}</span>
          </a>
          <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm mb-3">
            {{ __('همکاران') }} <span class="badge text-bg-light">{{ $users->count() }}</span>
          </a>
        </div>
      </div>
    </div>
    @if($levels->isNotEmpty())
      <div class="row text-center border-top mb-3" id="levels-row">
        <div class="col-12">
            <h2 class="mb-4 mt-4">
              {{ __('سطوح استاندارد مرجع بنیاد سعدی') }}
            </h2>
            <p>
                کتاب‌های بنیاد سعدی در 7 سطح مختلف تألیف و منتشر می‌شوند. این سطح‌بندی بر اساس
                <a href="{{ route('books.show', 'persianstandard') }}" target="_blank">
                    استاندارد مرجع آموزش زبان فارسی
                </a>
                است.
            </p>
        </div>
        <div class="col-12">
            <div class="levels">
                @foreach ($levels as $level)
                    <div class="mb-1">
                        <a class="progress" href="{{route('levels.show', $level)}}">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-level-{{$level->title_abbr}}" role="progressbar" aria-valuenow="{{$level->width}}" 
                            aria-valuemin="0" aria-valuemax="100" style="width: {{$level->width}}%">
                                {{ __("$level->title") }}: {{ strtoupper($level->title_abbr) }}
                            </div>
                        </a>
                    </div> 
                @endforeach
            </div>
        </div>
      </div>
    @endif
    @if($books->isNotEmpty() && $levels->isNotEmpty())
      <div class="row text-center">
        <div class="col-12">
            <h2 class="mb-4 mt-4">
              {{ __('جدول کتاب‌های بنیاد سعدی') }}
            </h2>
        </div>
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">
                                {{ __('سطح') }} / {{  __('برچسب') }}
                            </th>
                            <th scope="col">
                                {{ __('کتاب‌ها') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($levels as $level)
                          <tr>
                            <th scope="row">
                              <div class="mb-1">
                                <a class="progress" href="{{route('levels.show', $level)}}">
                                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-level-{{$level->title_abbr}}" role="progressbar" aria-valuenow="{{$level->width}}" 
                                  aria-valuemin="0" aria-valuemax="100" style="width: {{$level->width}}%">
                                  {{ strtoupper($level->title_abbr)}}
                                  </div>
                                </a>
                                <p>
                                  {{ __($level->title) }}
                                </p>
                              </div>
                            </th>
                            <td>
                              @foreach ($level->books as $book)
                                <a href="{{ route('books.show', $book->title_abbr) }}" class="cover">
                                  <img src="{{ $book->cover !== null ? Storage::url($book->cover) : asset('img/cover.jpg') }}" alt="{{ $book->title }}" title="{{ $book->title }}" class="w-10 mb-3">
                                </a>
                              @endforeach
                            </td>
                          </tr>
                        @endforeach
                        @foreach ($other_books_tags as $other_tag)
                          <tr>
                            <th scope="row">
                              <a href="{{ route('tags.show', $other_tag) }}" class="badge text-bg-info">
                                {{$other_tag->title}}
                              </a>
                            </th>
                            <td>
                              @foreach ($other_tag->books as $book)
                                <a href="{{ route('books.show', $book->title_abbr) }}" class="cover">
                                  <img src="{{ $book->cover !== null ? Storage::url($book->cover) : asset('img/cover.jpg') }}" alt="{{ $book->title }}" title="{{ $book->title }}" class="w-10 mb-3">
                                </a>
                              @endforeach
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    @endif
    @if($books->isNotEmpty())
      <div class="row text-center d-flex justify-content-center border-top mb-4" id="books-row">
        <div class="col-12">
          <h2 class="mb-4 mt-4">
              {{ __('بعضی از کتاب‌های بنیاد سعدی') }}
          </h2>
        </div>
        @foreach ($books->random(3) as $book)
          <div class="col-6 col-md-3 mb-2">
            <a href="{{route('books.show', $book->title_abbr)}}">
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
                            <span class="badge text-bg-info">
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
        <div class="col-12">
            <a class="btn btn-primary btn-block" href="{{ route('books.index') }}">
                {{ __('همۀ کتاب‌ها') }}
              </a>
        </div>
      </div>
    @endif
@endsection