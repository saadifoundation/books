@extends('layouts.app')

@section('title', $collection->title)

@section('content')
    <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('books.index') }}">
                کتاب‌های بنیاد سعدی
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
          <div class="labels mb-3 text-right">
            <a class="badge badge-success" href="label-reading.html">
              خواندن
            </a>
          </div>
          <div class="badges mb-3 text-right">
            <a href="#books-row" class="btn btn-primary btn-sm mb-3">
              کتاب‌های مجموعه <span class="badge badge-light">4</span>
            </a>
            <a href="#writers-row" class="btn btn-primary btn-sm mb-3">
              مؤلفان مجموعه <span class="badge badge-light">5</span>
            </a>
            <a href="#other-persons-button-row" class="btn btn-primary btn-sm mb-3">
             دیگر همکاران مجموعه <span class="badge badge-light">16</span>
            </a>
            <a href="#researches-row" class="btn btn-primary btn-sm mb-3">
              پژوهش‌های مرتبط با مجموعه <span class="badge badge-light">2</span>
            </a>
            <a href="#news-row" class="btn btn-primary btn-sm mb-3">
              اخبار مرتبط با مجموعه <span class="badge badge-light">2</span>
            </a>
          </div>
          <div class="description text-right font-weight-light">
              {!! $collection->intro !!}
          </div>
          <div class="levels">
            <div class="mb-1">
              <a class="progress" href="elementary-level.html">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" aria-valuenow="20" 
                aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                نوآموز: N
                </div>
              </a>
            </div>
            <div class="mb-1">
              <a class="progress" href="elementary-level.html">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-level-a" role="progressbar" aria-valuenow="35" 
                aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                مقدماتی: A
                </div>
              </a>
            </div>
            <div class="mb-1">
              <a class="progress" href="elementary-level.html">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-level-b1" role="progressbar" aria-valuenow="50" 
                aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                پیش میانی: B1
                </div>
              </a>
            </div>
            <div class="mb-1">
              <a class="progress" href="elementary-level.html">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-level-b2" role="progressbar" aria-valuenow="60" 
                aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                میانی: B2
                </div>
              </a>
            </div>
            <div class="mb-1">
              <a class="progress" href="elementary-level.html">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-level-b3" role="progressbar" aria-valuenow="75" 
                aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                فوق میانی: B3
                </div>
              </a>
            </div>
            <div class="mb-1">
              <a class="progress" href="elementary-level.html">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" aria-valuenow="90" 
                aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                پیشرفته: C1
                </div>
              </a>
            </div>
            <div class="mb-1">
              <a class="progress" href="elementary-level.html">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" aria-valuenow="100" 
                aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                ماهر: C2
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row text-center d-flex justify-content-center border-top mb-4" id="books-row">
        <div class="col-12">
          <h2 class="mb-4 mt-4">
            کتاب‌های مجموعه
          </h2>
        </div>
        <div class="col-6 col-md-3 mb-2">
          <a href="mina2.html">
            <div class="card book-card">
              <img src="img/mina1.jpg" class="card-img-top">
              <div class="card-body">
                <div class="mb-1">
                  <a class="progress" href="#">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-level-b1" role="progressbar" aria-valuenow="50" 
                    aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                    پیش میانی: B1
                    </div>
                  </a>
                </div>
                <div class="mb-1">
                  <a class="progress" href="#">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-level-a" role="progressbar" aria-valuenow="35" 
                    aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                    مقدماتی: A
                    </div>
                  </a>
                </div>
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
                <div class="mb-1">
                  <a class="progress" href="#">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-level-b2" role="progressbar" aria-valuenow="60" 
                    aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    میانی: B2
                    </div>
                  </a>
                </div>
                <div class="mb-1">
                  <a class="progress" href="#">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-level-b1" role="progressbar" aria-valuenow="50" 
                    aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                    پیش میانی: B1
                    </div>
                  </a>
                </div>
                <p class="card-text">
                  مینا 2
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
                <div class="mb-1">
                  <a class="progress" href="#">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-level-b3" role="progressbar" aria-valuenow="75" 
                    aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                    فوق میانی: B3
                    </div>
                  </a>
                </div>
                <div class="mb-1">
                  <a class="progress" href="#">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-level-b2" role="progressbar" aria-valuenow="60" 
                    aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    میانی: B2
                    </div>
                  </a>
                </div>
                <p class="card-text">
                  مینا 3
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
                <div class="mb-1">
                  <a class="progress" href="#">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-level-c1" role="progressbar" aria-valuenow="90" 
                    aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                    پیشرفته: C1
                    </div>
                  </a>
                </div>
                <p class="card-text">
                  مینا 4
                </p>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="row text-center d-flex justify-content-center border-top" id="writers-row">
        <div class="col-12">
          <h2 class="mb-4 mt-4">
            مؤلفان مجموعه
          </h2>
        </div>
        <div class="col-6 col-md-3 person">
          <a href="sahraei-reza.html">
            <figure class="figure text-center">
              <img src="img/persons/sahraei-reza.jpg" alt="" class="w-50 rounded figure-img img-fluid">
              <figcaption class="figure-caption text-center">
                رضامراد صحرایی
                <span class="badge badge-primary">
                  مؤلف
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
                  مؤلف
                </span>
              </figcaption>
            </figure>
          </a>
        </div>
        <div class="col-6 col-md-3 person">
          <a href="sahraei-reza.html">
            <figure class="figure text-center">
              <img src="img/persons/sample.png" alt="" class="w-50 rounded figure-img img-fluid">
              <figcaption class="figure-caption text-center">
                داود ملک‌لو
                <span class="badge badge-primary">
                  مؤلف
                </span>
              </figcaption>
            </figure>
          </a>
        </div>
        <div class="col-6 col-md-3 person">
          <a href="sahraei-reza.html">
            <figure class="figure text-center">
              <img src="img/persons/sample.png" alt="" class="w-50 rounded figure-img img-fluid">
              <figcaption class="figure-caption text-center">
                سمانه صادقی
                <span class="badge badge-primary">
                  مؤلف
                </span>
              </figcaption>
            </figure>
          </a>
        </div>
        <div class="col-6 col-md-3 person">
          <a href="sahraei-reza.html">
            <figure class="figure text-center">
              <img src="img/persons/shahbaz-monire.jpg" alt="" class="w-50 rounded figure-img img-fluid">
              <figcaption class="figure-caption text-center">
                منیره شهباز
                <span class="badge badge-primary">
                  مؤلف
                </span>
              </figcaption>
            </figure>
          </a>
        </div>
        <div class="col-6 col-md-3 person">
          <a href="sahraei-reza.html">
            <figure class="figure text-center">
              <img src="img/persons/soltani-maryam.jpg" alt="" class="w-50 rounded figure-img img-fluid">
              <figcaption class="figure-caption text-center">
                مریم سلطانی
                <span class="badge badge-primary">
                  مؤلف
                </span>
              </figcaption>
            </figure>
          </a>
        </div>
      </div>
      <div class="row text-center mb-4" id="other-persons-button-row">
        <div class="col-12">
          <a class="btn btn-primary" id="load-more" data-toggle="collapse" href="#other-persons" role="button" aria-expanded="false" aria-controls="other-persons">
            همکاران دیگر مجموعه
          </a>
        </div>
      </div>
      <div class="collapse border-top" id="other-persons">
        <div class="row text-center d-flex justify-content-center">
          <div class="col-12">
            <h2 class="mb-4 mt-4">
              همکاران دیگر مجموعه
            </h2>
          </div>
          <div class="col-6 col-md-3 person other-person">
            <a href="sahraei-reza.html">
              <figure class="figure text-center">
                <img src="img/persons/sample.png" alt="" class="w-50 rounded figure-img img-fluid">
                <figcaption class="figure-caption text-center">
                  هوشیار ظاهریانی
                  <span class="badge badge-primary">
                    گرافیک
                  </span>
                </figcaption>
              </figure>
            </a>
          </div>
          <div class="col-6 col-md-3 person other-person">
            <a href="sahraei-reza.html">
              <figure class="figure text-center">
                <img src="img/persons/sample.png" alt="" class="w-50 rounded figure-img img-fluid">
                <figcaption class="figure-caption text-center">
                  بهرام ارجمندنیا
                  <span class="badge badge-primary">
                    تصویرساز
                  </span>
                </figcaption>
              </figure>
            </a>
          </div>
          <div class="col-6 col-md-3 person other-person">
            <a href="sahraei-reza.html">
              <figure class="figure text-center">
                <img src="img/persons/sample.png" alt="" class="w-50 rounded figure-img img-fluid">
                <figcaption class="figure-caption text-center">
                  امیرخالقی
                  <span class="badge badge-primary">
                    تصویرساز
                  </span>
                </figcaption>
              </figure>
            </a>
          </div>
          <div class="col-6 col-md-3 person other-person">
            <a href="sahraei-reza.html">
              <figure class="figure text-center">
                <img src="img/persons/sample.png" alt="" class="w-50 rounded figure-img img-fluid">
                <figcaption class="figure-caption text-center">
                  طراوت نیکی
                  <span class="badge badge-primary">
                    تصویرساز
                  </span>
                </figcaption>
              </figure>
            </a>
          </div>
          <div class="col-6 col-md-3 person other-person">
            <a href="sahraei-reza.html">
              <figure class="figure text-center">
                <img src="img/persons/sample.png" alt="" class="w-50 rounded figure-img img-fluid">
                <figcaption class="figure-caption text-center">
                  علی گنجوی
                  <span class="badge badge-primary">
                    تصویرساز
                  </span>
                </figcaption>
              </figure>
            </a>
          </div>
          <div class="col-6 col-md-3 person other-person">
            <a href="sahraei-reza.html">
              <figure class="figure text-center">
                <img src="img/persons/sample.png" alt="" class="w-50 rounded figure-img img-fluid">
                <figcaption class="figure-caption text-center">
                  سحر آزادمهر
                  <span class="badge badge-primary">
                    تصویرساز
                  </span>
                </figcaption>
              </figure>
            </a>
          </div>
          <div class="col-6 col-md-3 person other-person">
            <a href="sahraei-reza.html">
              <figure class="figure text-center">
                <img src="img/persons/sample.png" alt="" class="w-50 rounded figure-img img-fluid">
                <figcaption class="figure-caption text-center">
                  ملیکاسادات رضایی
                  <span class="badge badge-primary">
                    تصویرساز
                  </span>
                </figcaption>
              </figure>
            </a>
          </div>
          <div class="col-6 col-md-3 person other-person">
            <a href="sahraei-reza.html">
              <figure class="figure text-center">
                <img src="img/persons/sample.png" alt="" class="w-50 rounded figure-img img-fluid">
                <figcaption class="figure-caption text-center">
                  عطیه بزرگی‌زاده
                  <span class="badge badge-primary">
                    ناظر تولید
                  </span>
                </figcaption>
              </figure>
            </a>
          </div>
          <div class="col-6 col-md-3 person other-person">
            <a href="sahraei-reza.html">
              <figure class="figure text-center">
                <img src="img/persons/sample.png" alt="" class="w-50 rounded figure-img img-fluid">
                <figcaption class="figure-caption text-center">
                  کانون زبان ایران
                  <span class="badge badge-primary">
                    ناشر
                  </span>
                </figcaption>
              </figure>
            </a>
          </div>
        </div>
    </div>
@endsection