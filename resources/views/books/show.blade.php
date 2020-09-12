@extends('layouts.app')

@section ('title', $book->title)

@section('content')
  <div class="row">
    <div class="col-12">
      <nav aria-label="breadcrumb" class="border-top border-level-a">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">
            کتاب‌های بنیاد سعدی
          </a></li>
          <li class="breadcrumb-item"><a href="{{ route('collection', $book->collection->title_abbr) }}">
            {{ $book->collection->title }}
          </a></li>
          <li class="breadcrumb-item active" aria-current="page">
            {{ $book->title }}
          </li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col-md-4">
      <a href="img/mina1.jpg" target="_blank" download="mina1.jpg" class="cover">
        <img src="{{ Storage::url($book->cover) }}" alt="" class="w-100">
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
            <a href="{{ $book->index_file }}" target="_blank">
              <img src="{{ asset('img/buttons/03_Index.png') }}" alt="" class="w-75">
            </a>
          @endif
          @if($book->sample_file !== NULL)
            <a href="{{ $book->sample_file }}" target="_blank">
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
            <a href="{{ $book->audio_link  }}" target="_blank">
              <img src="{{ asset('img/buttons/07_Audio-Book.png') }}" alt="" class="w-75">
            </a>
          @endif
        </div>
      </div>

    </div>
    <div class="col-md-8">

      @if($book->intro_video !== NULL)
        <div class="video my-3">
          <video src="{{ Storage::url($book->intro_video) }}" width="100%" controls="controls" preload="metadata">
            <source type="video/mp4">
          </video>
          <p class="caption">
            {{ __('ویدئوی معرفی کتاب') }}

            @if($book->teaching_video !== NULL)
              <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                {{ __('ویدئوی روش تدریس') }}
              </button>
            @endif

          </p>
        </div>

        @if($book->teaching_video !== NULL)
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">
                    ویدئوی روش تدریس
                  </h5>
                </div>
                <div class="modal-body">
                  <video src="https://mina.saadifoundation.ir/video/motion.mp4" width="100%" controls="controls" preload="metadata">
                    <source type="video/mp4">
                  </video>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    بازگشت
                  </button>
                </div>
              </div>
            </div>
          </div>
        @endif

      @endif

      @if ( !empty($book->collection->tags->toArray()) )
        <div class="labels mb-3 text-right mb-4">
          @foreach($book->collection->tags as $tag)
            <a class="badge badge-success" href="{{ route('tag', $tag->title_abbr) }}">
              {{ $tag->title }}
            </a>
          @endforeach
        </div>
      @endif

      <div class="badges mb-3 text-right mb-4">
        <a href="#sounds-row" class="btn btn-primary btn-sm mb-2">
          {{ __('فایل‌های صوتی کتاب') }} <span class="badge badge-light">{{ count($book->audio) }}</span>
        </a>
        <a href="#writers-row" class="btn btn-primary btn-sm mb-2">
          {{ __('مؤلفان کتاب') }} <span class="badge badge-light">{{ count($book->users->where('group', 'writing')) }}</span>
        </a>
        <a href="#other-persons-button-row" class="btn btn-primary btn-sm mb-2">
          {{ __('دیگر همکاران کتاب') }} <span class="badge badge-light">{{ count($book->users->whereNotIn('group', 'writing')) }}</span>
        </a>
      </div>
      
      @if($book->intro !== NULL)
        <div class="description font-weight-light mb-4 text-justify">
            {!! nl2br($book->intro) !!}
        </div>
      @endif

      <div class="levels mb-4">
        @foreach ($levels as $each_level)
          <div class="mb-1">
              <a class="progress" href="{{route('level', $each_level)}}">
                  <div class="progress-bar progress-bar-striped progress-bar-animated @if(in_array($each_level->title_abbr, $book_levels_title_abbrs)) bg-level-{{$each_level->title_abbr}} @else bg-secondary @endif" role="progressbar" aria-valuenow="{{$each_level->width}}" 
                  aria-valuemin="0" aria-valuemax="100" style="width: {{$each_level->width}}%">
                      {{ __("$each_level->title") }}: {{ strtoupper($each_level->title_abbr) }}
                  </div>
              </a>
          </div> 
        @endforeach
      </div>

    </div>
  </div>
  @if($book->audio->groupBy('group_name')->sortBy('group_order')->isNotEmpty())
  <div class="row text-center border-top mb-4 border-level-a" id="sounds-row">
    <div class="col-12 mb-4">
      <h2 class="text-center mt-4">
        فایل‌های صوتی
      </h2>
      @if($book->audio_link !== '')
        <a href="{{ $book->audio_link }}">
          دریافت تمام فایل‌های صوتی (zip)
        </a>
      @endif
    </div>
    <div class="col-12">
        <div class="accordion" id="accordionLessons">
          @foreach ($book->audio->groupBy('group_name')->sortBy('group_order') as $audio_group)
          <div class="card">
              <div class="card-header" id="heading{{$loop->index}}">
                <h2 class="mb-0">
                  <button class="btn btn-block text-center" type="button" data-toggle="collapse" data-target="#collapse{{$loop->index}}" aria-controls="collapse{{$loop->index}}">
                    {{ $audio_group["$loop->index"]->group_name }}
                  </button>
                </h2>
              </div>
              <div id="collapse{{$loop->index}}" class="collapse" aria-labelledby="heading{{$loop->index}}" data-parent="#accordionLessons">
                <div class="card-body">
                  @foreach ($audio_group as $audio)
                    <h5 class="mb-3">
                      {{$audio_group["$loop->index"]->title}}
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
          مؤلفان کتاب
        </h2>
      </div>
      @foreach ($book->users->where('role_group', 'writing') as $user)
        <div class="col-6 col-md-3 person">
          <a href="{{ route('users.show', $user->name_en) }}">
            <figure class="figure text-center">
              <img src="@if($user->pic !== NULL) {{Storage::url($user->pic)}} @else {{asset('/img/person.jpg')}} @endif" alt="" class="w-50 rounded figure-img img-fluid">
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
          همکاران دیگر
        </a>
      </div>
    </div>
    <div class="collapse border-top border-level-a" id="other-persons">
      <div class="row text-center d-flex justify-content-center">
        <div class="col-12">
          <h2 class="mb-4 mt-4">
            همکاران دیگر
          </h2>
        </div>
        @foreach ($book->users->whereNotIn('role_group', 'writing') as $user)
          <div class="col-6 col-md-3 person other-person">
            <a href="{{ route('users.show', $user->name_en) }}">
              <figure class="figure text-center">
                <img src="@if($user->pic !== NULL) {{Storage::url($user->pic)}} @else '{{asset('/img/person.jpg')}}' @endif" alt="" class="w-50 rounded figure-img img-fluid">
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
  @if($book->collection->books->whereNotIn('title_abbr', $book->title_abbr)->isNotEmpty())
  <div class="row text-center d-flex justify-content-center border-top mb-4 border-level-a">
    <div class="col-12">
      <h2 class="mb-4 mt-4">
        کتاب‌های مرتبط
      </h2>
    </div>
    @foreach($book->collection->books->whereNotIn('title_abbr', $book->title_abbr) as $book)
      <div class="col-6 col-md-3 mb-2">
        <a href="{{ route('books.show', $book->title_abbr) }}">
          <div class="card book-card">
            <img src="{{ Storage::url($book->cover) }}" class="card-img-top">
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
@endsection
