<!doctype html>
<html lang="fa">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        {{__('سطح') }} {{__($level->title)}}
    </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  </head>
  <body>
    <div class="navbar navbar-expand-sm fixed-top navbar-dark bg-info justify-content-center">
        <h5 class="my-0 ml-md-auto font-weight-normal">
            {{__('سطح') }} {{__($level->title)}}
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
                {{__('سطح') }} {{__($level->title)}}
            </h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">
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
              کتاب‌های سطح <span class="badge badge-light">3</span>
            </a>
            <a href="#writers-row" class="btn btn-primary btn-sm mb-3">
              مؤلفان سطح <span class="badge badge-light">5</span>
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
                    <a class="progress" href="{{route('level', $each_level)}}">
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
      <div class="row text-center d-flex justify-content-center border-top mb-4" id="books-row">
        <div class="col-12">
          <h2 class="mb-4 mt-4">
            کتاب‌های سطح
          </h2>
        </div>
        <div class="col-6 col-md-3 mb-2">
          <a href="mina2.html">
            <div class="card book-card">
              <img src="img/mina1.jpg" class="card-img-top">
              <div class="card-body">
                <p class="card-text">
                  مینا 1
                </p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-3 mb-2">
          <a href="mina2.html">
            <div class="card book-card">
              <img src="img/mina2.jpg" class="card-img-top">
              <div class="card-body">
                <p class="card-text">
                  چارچوب 1
                </p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-3 mb-2">
          <a href="mina2.html">
            <div class="card book-card">
              <img src="img/mina3.jpg" class="card-img-top">
              <div class="card-body">
                <p class="card-text">
                  گام اول
                </p>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="row text-center d-flex justify-content-center border-top" id="writers-row">
        <div class="col-12">
          <h2 class="mb-4 mt-4">
            مؤلفان سطح
          </h2>
        </div>
        <div class="col-6 col-md-3 person">
          <a href="sahraei-reza.html">
            <figure class="figure text-center">
              <img src="img/persons/sahraei-reza.jpg" alt="" class="w-50 rounded figure-img img-fluid">
              <figcaption class="figure-caption text-center">
                رضامراد صحرایی
                <span class="badge badge-primary">
                  مؤلف <span class="badge badge-light">3</span>
                </span>
              </figcaption>
            </figure>
          </a>
        </div>
        <div class="col-6 col-md-3 person">
          <a href="sahraei-reza.html">
            <figure class="figure text-center">
              <img src="img/persons/gharibi-afsaneh.png" alt="" class="w-50 rounded figure-img img-fluid">
              <figcaption class="figure-caption text-center">
                افسانه غریبی
                <span class="badge badge-primary">
                  مؤلف <span class="badge badge-light">1</span>
                </span>
              </figcaption>
            </figure>
          </a>
        </div>
        <div class="col-6 col-md-3 person">
          <a href="sahraei-reza.html">
            <figure class="figure text-center">
              <img src="img/persons/marsus-fzeze.jpg" alt="" class="w-50 rounded figure-img img-fluid">
              <figcaption class="figure-caption text-center">
                فائزه مرصوص
                <span class="badge badge-primary">
                  مؤلف <span class="badge badge-light">1</span>
                </span>
              </figcaption>
            </figure>
          </a>
        </div>
      </div>
    </div>
  
    <footer class="container-fluid pt-4 my-md-4 border-top text-center">
      <div dir="ltr" class="row">
          <div class="col-12 col-md">
              <img class="mb-2" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
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