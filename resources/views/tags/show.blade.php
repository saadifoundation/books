@extends('layouts.app')

@section('title', __('برچسب').' '.__($tag->title))

@section('content')
    <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('index') }}">
                {{ __('صفحۀ اصلی') }}
              </a></li>
              <li class="breadcrumb-item active" aria-current="page">
                {{ __('برچسب') }} {{ __($tag->title) }}
              </li>
            </ol>
          </nav>
        </div>
    </div>
    <div class="row text-center d-flex justify-content-center border-top mb-4" id="books-row">
        <div class="col-12">
          <h2 class="mb-4 mt-4">
            {{ __('کتاب‌های') }} {{$tag->title}}
          </h2>
          <div class="alert alert-primary" role="alert">
            تاکنون
            <span class="badge badge-light">{{ $tag->books->count() }}</span>
            کتاب با برچسب
            <span class="badge badge-success">
                {{$tag->title}}
            </span>
            در بنیاد سعدی تهیه شده است.
          </div>
        </div>
        @foreach ($tag->books as $book)
            <div class="col-6 col-md-3 mb-2">
            <a href="{{ route('books.show', $book) }}">
                <div class="card book-card">
                <img src="{{ $book->cover !== null ? Storage::url($book->cover) : asset('img/cover.jpg') }}" class="card-img-top" alt="{{$book->title}}">
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
@endsection
