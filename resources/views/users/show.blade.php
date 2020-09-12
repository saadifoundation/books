@extends('layouts.app')

@section('title', $user->name)

@section('content')
    <div class="row">
    <div class="col-12">
        <div class="book-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4 mt-5">
            {{ $user->name }}
        </h1>
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('users.index') }}">
            {{ __('همکاران بنیاد سعدی') }}
            </a></li>
            <li class="breadcrumb-item active" aria-current="page">
                {{ $user->name }}
            </li>
        </ol>
        </nav>
    </div>
    </div>
    <div class="row">
    <div class="col-md-4 text-center">
        <a href="{{ Storage::url($user->pic) }}" target="_blank" download="sahraei-reza.jpg" class="cover">
        <img src="{{ Storage::url($user->pic) }}" alt="" class="w-100">
        </a>
        <div class="buttons mt-3">
        @if ($user->resume !== '')
            <a href="{{ Storage::url($user->resume) }}" type="button" class="btn btn-success btn-lg btn-block mb-2 btn-sm">
                <i class="far fa-file"></i>
                {{ __('دانلود رزومه') }}
            </a>
        @endif
        @if ($user->linkedin_link !== '')
            <a href="{{ $user->linkedin_link }}" target="_blank" class="btn btn-primary mb-2">
                <i class="fab fa-linkedin"></i>
            </a>
        @endif
        @if ($user->website_link !== '')
            <a href="{{ $user->website_link }}" target="_blank" class="btn btn-primary mb-2">
                <i class="far fa-comment"></i>
            </a>
        @endif
        </div>
    </div>
    <div class="col-md-8 order-md-2">
        <div class="badges mb-3 text-right">
        <a href="#sounds-row" class="btn btn-primary btn-sm mb-2">
            تالیف کتاب <span class="badge badge-light">10</span>
        </a>
        <a href="#writers-row" class="btn btn-primary btn-sm mb-2">
            ویراستاری کتاب <span class="badge badge-light">2</span>
        </a>
        </div>
        <div class="description text-right font-weight-light">
            {{ $user->intro }}
        </div>
    </div>
    </div>
    <div class="row mb-4">
    </div>
    <div class="row text-center d-flex justify-content-center border-top mb-4">
    <div class="col-12">
        <h2 class="mb-4 mt-4">
        {{ __('کتاب‌های') }} {{ $user->name }}
        </h2>
    </div>
    @foreach ($user->books as $book)
        <div class="col-6 col-md-3 mb-2">
            <a href="{{ route('books.show', $book) }}">
            <div class="card book-card">
                <img src="{{ Storage::url($book->cover) }}" class="card-img-top">
                <div class="card-body">
                <p class="card-text">
                    {{$book->title}}
                    <span class="badge badge-primary">
                        {{ $book->role_title }}
                    </span>
                </p>
                </div>
            </div>
            </a>
            
        </div>
    @endforeach
    </div>
@endsection