<!doctype html>
<html lang="fa">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        کتاب‌های بنیاد سعدی
    </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">

  </head>
  <body>
    <div class="navbar navbar-expand-sm fixed-top navbar-dark bg-info justify-content-center">
        <h5 class="my-0 ml-md-auto font-weight-normal">
            کتاب‌های بنیاد سعدی
        </h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="books.html">
                فهرست کتاب‌ها
            </a>
            <a class="p-2 text-dark" href="index.html">
                درباره
            </a>
            <a class="p-2 text-dark" href="index.html">
                تماس با ما
            </a>
        </nav>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="book-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4 mt-5">
                کتاب‌های آموزشی بنیاد سعدی
            </h1>
          </div>
        </div>
      </div>
      <div class="row mb-4 text-center">
        <div class="col-12">
          <div class="description font-weight-light">
              <p>
                بنیاد سعدی با هدف آموزش زبان فارسی به غیرفارسی‌زبانان تأسیس شده است و تاکنون در این زمینه
                <span class="badge">45</span>
                کتاب تالیف کرده است.
              </p>
          </div>
          <div class="badges mb-3">
            <a href="#levels-row" class="btn btn-success btn-sm mb-3">
                سطوح <span class="badge badge-light">7</span>
            </a>
            <a href="#books-row" class="btn btn-primary btn-sm mb-3">
              کتاب‌ها <span class="badge badge-light">{{ count($books) }}</span>
            </a>
            <a href="persons.html" class="btn btn-primary btn-sm mb-3">
              مؤلفان <span class="badge badge-light">40</span>
            </a>
            <a href="persons.html" class="btn btn-primary btn-sm mb-3">
                همکاران دیگر <span class="badge badge-light">65</span>
            </a>
          </div>
        </div>
      </div>
      <div class="row text-center border-top mb-3" id="levels-row">
        <div class="col-12">
            <h2 class="mb-4 mt-4">
             سطوح استاندارد مرجع بنیاد سعدی
            </h2>
            <p>
                کتاب‌های بنیاد سعدی در 7 سطح مختلف تألیف و منتشر می‌شوند. این سطح‌بندی بر اساس
                <a href="mina2.html">
                    استاندارد مرجع آموزش زبان فارسی
                </a>
                است.
            </p>
        </div>
        <div class="col-12">
            <div class="levels">
                @foreach ($levels as $level)
                    <div class="mb-1">
                        <a class="progress" href="{{route('level', $level)}}">
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
                                {{ __('سطح') }}
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
                                        <a class="progress" href="{{route('level', $level)}}">
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
                                    <a href="{{ route('books.show', $book->title_abbr) }}">
                                      <img src="{{ Storage::url($book->cover) }}" alt="{{ $book->title }}" class="w-25">
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
      <div class="row text-center d-flex justify-content-center border-top mb-4" id="books-row">
        <div class="col-12">
          <h2 class="mb-4 mt-4">
             بعضی از کتاب‌های بنیاد سعدی
          </h2>
        </div>
        @foreach ($books as $book)
          @if ($loop->index < 3)
            <div class="col-6 col-md-3 mb-2">
              <a href="{{route('books.show', $book->title_abbr)}}">
                <div class="card book-card">
                  <img src="{{ Storage::url($book->cover) }}" class="card-img-top">
                  <div class="card-body">
                    <p class="card-text">
                      {{ $book->title }}
                      @foreach ($book->levels as $level)
                        <span class="badge badge-primary">
                          {{ $level->title }}
                        </span>
                      @endforeach
                    </p>
                  </div>
                </div>
              </a>
            </div>
          @endif
        @endforeach
        <div class="col-12">
            <a class="btn btn-primary btn-block" href="books.html">
                همۀ کتاب‌ها
              </a>
        </div>
      </div>
    </div>
  
    <footer class="container-fluid pt-4 my-md-4 border-top text-center mb-3">
      <div dir="ltr" class="row">
          <div class="col-12 col-md">
              <img class="mb-2" src="{{ asset('/img/saadifoundation-logo.png') }}" alt="" width="24" height="24">
              <small class="d-block mb-3 text-muted">&copy; 2020 Saadi Foundation</small>
          </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</body>
</html>