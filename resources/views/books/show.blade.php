@extends('layouts.app')

@section ('title', $book->title)

@section('description', $book->intro !== null ? substr(strip_tags($book->intro), 0, 400)."..." : $book->title)
@section('image', $book->cover !== null ? asset(Storage::url($book->cover)) : asset('img/saadifoundation-logo.png'))

@section('content')
  <div class="row">
    <div class="col-12">
      <nav aria-label="breadcrumb" class="border-top border-level-a">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ route('books.index') }}">
              {{ __('کتاب‌های بنیاد سعدی') }}
            </a>
          </li>
          @if($book->collection !== NULL)
            <li class="breadcrumb-item">
              <a href="{{ route('collections.show', $book->collection) }}">
                {{ $book->collection->title }}
              </a>
            </li>
          @endif
          <li class="breadcrumb-item active" aria-current="page">
            {{ $book->title }}
          </li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col-md-4">
      <a href="{{ $book->cover !== null ? Storage::url($book->cover) : asset('img/cover.jpg') }}" target="_blank" download="{{$book->title_abbr}}.jpg" class="cover container-image-with-badge">
          <img src="{{ $book->cover !== null ? Storage::url($book->cover) : asset('img/cover.jpg') }}" alt="{{ $book->title }}" class="w-100 rounded">
          <span class="badge badge-{{ $book->status->bootstrap_color }} book-status-badge">{{ $book->status->title }}</span>
      </a>

      <div class="border-md-1 text-center">
        <div class="buttons mt-3">
          @if($book->elearning_link !== NULL)
            <a href="{{ $book->elearning_link }}" target="_blank">
              <img src="{{ asset('img/buttons/01_elearning.png') }}" alt="" class="w-75">
            </a>
          @endif
          @if($book->bibliography_link !== NULL)
            <a href="{{ $book->bibliography_link }}" target="_blank">
              <img src="{{ asset('img/buttons/02_Bibliography.png') }}" alt="" class="w-75">
            </a>
          @endif
          @if($book->index_file !== NULL)
            <a href="{{ Storage::url($book->index_file) }}" target="_blank">
              <img src="{{ asset('img/buttons/03_Index.png') }}" alt="" class="w-75">
            </a>
          @endif
          @if($book->sample_file !== NULL)
            <a href="{{ Storage::url($book->sample_file) }}" target="_blank">
              <img src="{{ asset('img/buttons/04_Sample.png') }}" alt="" class="w-75">
            </a>
          @endif
          @if($book->buying_link !== NULL)
            <a href="{{ $book->buying_link }}" target="_blank">
              <img src="{{ asset('img/buttons/05_Buy-Book.png') }}" alt="" class="w-75">
            </a>
          @endif
          @if($book->ebuying_link !== NULL)
            <a href="{{ $book->ebuying_link }}" target="_blank">
              <img src="{{ asset('img/buttons/06_Buy-eBook.png') }}" alt="" class="w-75">
            </a>
          @endif
          @if($book->audio_link !== NULL)
            <a href="{{ Storage::url($book->audio_link) }}" target="_blank">
              <img src="{{ asset('img/buttons/07_Audio-Book.png') }}" alt="" class="w-75">
            </a>

          @endif
          @if($book->teaching_intro_video !== NULL || $book->teaching_detailed_video !== NULL)
            <a href="#" data-toggle="modal" data-target="#teaching-videos-modal">
              <img src="{{ asset('img/buttons/08_Teaching-Videos.png') }}" alt="" class="w-75">
            </a>
            <div class="modal fade" id="teaching-videos-modal" tabindex="-1" role="dialog" aria-labelledby="teaching-videos-modal-label" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="teaching-videos-modal=label">
                      {{ __('ویدئوهای روش تدریس') }}
                    </h5>
                  </div>
                  <div class="modal-body">
                    <div id="accordion">
                      @if ($book->teaching_intro_video !== NULL)
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                              <button class="btn btn-block text-center" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                {{ __('ویدئوی روش تدریس') }} - {{ __('قسمت اول') }}
                              </button>
                            </h5>
                          </div>
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                              <div class="h_iframe-aparat_embed_frame">
                                <span style="display: block;padding-top: 57%">
                                </span>
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/{{$book->teaching_intro_video}}/vt/frame" allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                              </div>
                            </div>
                          </div>
                        </div>
                      @endif
                      @if ($book->teaching_detailed_video !== NULL)
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                              <button class="btn btn-block text-center" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              {{ __('ویدئوی روش تدریس') }} - {{ __('قسمت دوم') }}
                              </button>
                            </h5>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                              <div class="h_iframe-aparat_embed_frame">
                                <span style="display: block;padding-top: 57%">
                                </span>
                                <iframe src="https://www.aparat.com/video/video/embed/videohash/{{$book->teaching_detailed_video}}/vt/frame" allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                </iframe>
                              </div>
                            </div>
                          </div>
                        </div>
                      @endif
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                      {{ __('بازگشت') }}
                    </button>
                  </div>
                </div>
              </div>
            </div>
          @endif
        </div>
      </div>

    </div>
    <div class="col-md-8">

      @if($book->intro_video !== NULL)
        <div class="video my-3">
          <div class="h_iframe-aparat_embed_frame">
            <span style="display: block;padding-top: 57%">
            </span>
            <iframe src="https://www.aparat.com/video/video/embed/videohash/{{$book->intro_video}}/vt/frame" allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
            </iframe>
          </div>
          <p class="caption">
            {{ __('ویدئوی معرفی کتاب') }}
          </p>
        </div>
      @endif

      @if ( $book->tags->isNotEmpty() )
        <div class="labels mb-3 text-right mb-4">
          @foreach($book->tags as $tag)
            <a class="badge badge-info" href="{{ route('tags.show', $tag) }}">
              {{ $tag->title }}
            </a>
          @endforeach
        </div>
      @endif

      <div class="badges mb-3 text-right mb-4">
        @if($book->audio->isNotEmpty())
          <a href="#sounds-row" class="btn btn-primary btn-sm mb-2">
            {{ __('فایل‌های صوتی کتاب') }} <span class="badge badge-light">{{ $book->audio->count() }}</span>
          </a>
        @endif
        @if($book->users->where('role_group', 'writing')->isNotEmpty())
          <a href="#writers-row" class="btn btn-primary btn-sm mb-2">
            {{ __('مؤلفان کتاب') }} <span class="badge badge-light">{{ $book->users->where('role_group', 'writing')->count() }}</span>
          </a>
        @endif
        @if($book->users->whereNotIn('role_group', 'writing')->isNotEmpty())
          <a href="#other-persons-button-row" class="btn btn-primary btn-sm mb-2">
            {{ __('دیگر همکاران کتاب') }} <span class="badge badge-light">{{ $book->users->whereNotIn('role_group', 'writing')->count() }}</span>
          </a>
        @endif
      </div>
      
      @if($book->intro !== NULL)
        <div class="description font-weight-light mb-4 text-justify">
            {!! nl2br($book->intro) !!}
        </div>
      @endif

      @if ($book->levels->isNotEmpty())
        <div class="levels mb-4">
          @foreach ($levels as $level)
            <div class="mb-1">
                <a class="progress" href="{{route('levels.show', $level)}}">
                    <div class="progress-bar progress-bar-striped progress-bar-animated @if($book->levels->pluck('title_abbr')->contains($level->title_abbr)) bg-level-{{$level->title_abbr}} @else bg-secondary @endif" role="progressbar" aria-valuenow="{{$level->width}}" 
                    aria-valuemin="0" aria-valuemax="100" style="width: {{$level->width}}%">
                        {{ __("$level->title") }}: {{ strtoupper($level->title_abbr) }}
                    </div>
                </a>
            </div> 
          @endforeach
        </div>
      @endif

    </div>
  </div>
  @if($book->audio->isNotEmpty())
  <div class="row text-center border-top mb-4 border-level-a" id="sounds-row">
    <div class="col-12 mb-4">
      <h2 class="text-center mt-4">
        {{ __('فایل‌های صوتی') }}
      </h2>
      @if($book->audio_link !== NULL)
        <a href="{{ Storage::url($book->audio_link) }}">
          {{ __('دریافت تمام فایل‌های صوتی (zip)') }}
        </a>
      @endif
    </div>
    <div class="col-12">
        <div class="accordion" id="accordionLessons">
          @foreach ($book->audio->sortBy('group_order')->sortBy('order')->groupBy('group_name') as $audio_group)
            <div class="card">
              <div class="card-header" id="heading{{$loop->index}}">
                <h2 class="mb-0">
                  <button class="btn btn-block text-center" type="button" data-toggle="collapse" data-target="#collapse{{$loop->index}}" aria-controls="collapse{{$loop->index}}">
                    {{ $audio_group[0]->group_name }}
                  </button>
                </h2>
              </div>
              <div id="collapse{{$loop->index}}" class="collapse" aria-labelledby="heading{{$loop->index}}" data-parent="#accordionLessons">
                <div class="card-body">
                  @foreach ($audio_group as $audio)
                    <h5 class="mb-3">
                      {{$audio_group[$loop->index]->title}}
                    </h5>
                    <div class="row">
                        <div class="col-sm-10 mb-2">
                            <audio controls="" preload="none">
                                <source src='{{ Storage::url($audio_group["$loop->index"]->file) }}' type="audio/mpeg">
                                {{ __('مرورگر شما این فایل را پشتیبانی نمی‌کند.') }}
                            </audio>
                        </div>
                        <div class="col-sm-2">
                            <a href='{{ Storage::url($audio_group["$loop->index"]->file) }}' target="_blank" type="button" class="btn btn-info btn-block mt-2">
                                {{ __('دانلود') }}
                            </a>
                        </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          @endforeach
        </div>
    </div>
  </div>
  @endif
  @if ($book->users->where('role_group', 'writing')->isNotEmpty())
    <div class="row text-center d-flex justify-content-center border-top border-level-a" id="writers-row">
      <div class="col-12">
        <h2 class="mb-4 mt-4">
          {{ __('مؤلفان کتاب') }}
        </h2>
      </div>
      @foreach ($book->users->where('role_group', 'writing') as $user)
        <div class="col-6 col-md-3 person">
          <a href="{{ route('users.show', $user->name_en) }}">
            <figure class="figure text-center">
              <img src="{{ $user->pic !== NULL ? Storage::url($user->pic) : asset('/img/person.png') }}" alt="{{ $user->name }}" class="w-50 rounded figure-img img-fluid">
              <figcaption class="figure-caption text-center">
                {{ $user->name }}
                <span class="badge badge-primary">
                  {{ $user->role_title }}
                </span>
              </figcaption>
            </figure>
          </a>
        </div>
      @endforeach
    </div>
  @endif
  @if ($book->users->whereNotIn('role_group', 'writing')->isNotEmpty())
    <div class="row text-center mb-4" id="other-persons-button-row">
      <div class="col-12">
        <a class="btn btn-primary" id="load-more" data-toggle="collapse" href="#other-persons" role="button" aria-expanded="false" aria-controls="other-persons">
          {{ __('همکاران دیگر') }}
        </a>
      </div>
    </div>
    <div class="collapse border-top border-level-a" id="other-persons">
      <div class="row text-center d-flex justify-content-center">
        <div class="col-12">
          <h2 class="mb-4 mt-4">
            {{ __('همکاران دیگر') }}
          </h2>
        </div>
        @foreach ($book->users->whereNotIn('role_group', 'writing') as $user)
          <div class="col-6 col-md-3 person other-person">
            <a href="{{ route('users.show', $user->name_en) }}">
              <figure class="figure text-center">
                <img src="{{ $user->pic !== NULL ? Storage::url($user->pic) : asset('/img/person.jpg') }}" alt="" class="w-50 rounded figure-img img-fluid">
                <figcaption class="figure-caption text-center">
                  {{ $user->name }}
                  <span class="badge badge-primary">
                    {{ $user->role_title }}
                  </span>
                </figcaption>
              </figure>
            </a>
          </div>
        @endforeach
      </div>
    </div>
  @endif
  @if($book->collection !== null)
    @if($book->collection->books->whereNotIn('title_abbr', $book->title_abbr)->isNotEmpty())
      <div class="row text-center d-flex justify-content-center border-top mb-4 border-level-a">
        <div class="col-12">
          <h2 class="mb-4 mt-4">
            {{ __('کتاب‌های مرتبط') }}
          </h2>
        </div>
        @foreach($book->collection->books->whereNotIn('title_abbr', $book->title_abbr) as $book)
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
    @endif
  @endif
@endsection
