@extends('layouts.app')

@section('title', $user->name)

@section('content')
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
            <img src="@if($user->pic !== null) {{ Storage::url($user->pic) }} @else {{ asset('/img/person.jpg') }} @endif" alt="" class="w-100">
            </a>
            <div class="buttons mt-3">
            @if ($user->resume !== NULL)
                <a href="{{ Storage::url($user->resume) }}" type="button" class="btn btn-success btn-lg btn-block mb-2 btn-sm">
                    <i class="far fa-file"></i>
                    {{ __('دانلود رزومه') }}
                </a>
            @endif
            @if ($user->linkedin_link !== NULL)
                <a href="{{ $user->linkedin_link }}" target="_blank" class="btn btn-primary mb-2">
                    <i class="fab fa-linkedin"></i>
                </a>
            @endif
            @if ($user->website_link !== NULL)
                <a href="{{ $user->website_link }}" target="_blank" class="btn btn-primary mb-2">
                    <i class="far fa-comment"></i>
                </a>
            @endif
            </div>
        </div>
        @if ($user->intro !== NULL)
            <div class="col-md-8 order-md-2">
                <div class="description text-right font-weight-light">
                    {{ $user->intro }}
                </div>
            </div>
        @endif
    </div>
    @if ($user->books->isNotEmpty())
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
                        <img src="{{ $book->cover !== null ? Storage::url($book->cover) : asset('img/cover.jpg') }}" class="card-img-top">
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
    @endif
@endsection