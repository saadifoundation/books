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
            <span class="badge badge-light">{{ $tag->collections->count() }}</span>
            کتاب با برچسب
            <span class="badge badge-success">
                {{$tag->title}}
            </span>
            در بنیاد سعدی تهیه شده است.
          </div>
        </div>
        @foreach ($tag->collections as $collection)
            <div class="col-6 col-md-3 mb-2">
            <a href="mina2.html">
                <div class="card book-card">
                <img src="img/mina1.jpg" class="card-img-top">
                <div class="card-body">
                    <p class="card-text">
                    {{$collection->title}}
                    </p>
                </div>
                </div>
            </a>
            </div>
        @endforeach

    </div>
@endsection
