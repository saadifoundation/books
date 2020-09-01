<!doctype html>
<html lang="fa">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        مینا 1
    </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  </head>
  <body>
    <div class="navbar navbar-expand-sm fixed-top navbar-dark bg-info justify-content-center">
        <h5 class="my-0 ml-md-auto font-weight-normal">
            مینا 1
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
              مینا 1
            </h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb" class="border-top border-level-a">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">
                کتاب‌های بنیاد سعدی
              </a></li>
              <li class="breadcrumb-item"><a href="mina-series.html">
                مجموعۀ مینا
              </a></li>
              <li class="breadcrumb-item active" aria-current="page">
                مینا 1
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <a href="img/mina1.jpg" target="_blank" download="mina1.jpg" class="cover">
            <img src="{{ Storage::url($book->cover) }}" alt="" class="w-100">
          </a>
        </div>
        <div class="col-md-8">
          <div class="video my-3">
            <video src="https://mina.saadifoundation.ir/video/motion.mp4" width="100%" controls="controls" preload="metadata">
              <source type="video/mp4">
            </video>
            <p class="caption">
              ویدئوی معرفی کتاب
              <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                ویدئوی روش تدریس
              </button>
            </p>
          </div>

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
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-md-8 order-md-2">
          <div class="labels mb-3 text-right">
            <a class="badge badge-success" href="label-reading.html">
              خواندن
            </a>
            <a class="badge badge-success" href="label-reading.html">
              شنیدن
            </a>
            <a class="badge badge-success" href="label-reading.html">
              نوشتن
            </a>
            <a class="badge badge-success" href="label-reading.html">
              صحبت کردن
            </a>
            <a class="badge badge-success" href="label-reading.html">
              تلفظ
            </a>
            <a class="badge badge-secondary" href="label-reading.html">
              واژه
            </a>
          </div>
          <div class="badges mb-3 text-right">
            <a href="#sounds-row" class="btn btn-primary btn-sm mb-2">
              فایل‌های صوتی کتاب <span class="badge badge-light">42</span>
            </a>
            <a href="#writers-row" class="btn btn-primary btn-sm mb-2">
              مؤلفان کتاب <span class="badge badge-light">5</span>
            </a>
            <a href="#other-persons-button-row" class="btn btn-primary btn-sm mb-2">
             دیگر همکاران کتاب <span class="badge badge-light">16</span>
            </a>
          </div>
          <div class="description text-right font-weight-light">
              <p>
                  اگر می‌خواهید زبانِ فارسیِ معیار را به شیوه‌ای لذّت‌بخش فرابگیرید، مینا بهترین انتخاب است. طرّاحیِ جذّاب مینا و محتوای کاربردی و حساب‌شده آن، به شما کمک می‌کند واژه‌ها، کارکردها و ساخت‌های دستوریِ مهّمِ زبانِ فارسی را، به‌سادگی و به‌سرعت، بیاموزید. درس‌های مینا، به گونه‌ای طرّاحی شده‌اند که هم فارسیِ گفتاری را به شما می‌آموزند و هم فارسیِ نوشتاری را. با مینا می‌توانید خیلی زود، به زبانِ فارسی صحبت کنید و بنویسید.
              </p>
              <p>
                  مجموعه مینا در چارچوب الگوهای نوینِ آموزشِ زبانِ دوّم/خارجی تدوین شده‌است. در این مجموعه، همه مهارت‌ها و مؤلفه‌های زبان فارسی مورد توّجه بوده‌اند. مینا در زبان و ادبیات فارسی به معنای مرغِ سخنگو است؛ یعنی با خواندنِ مینا شما می‌توانید در آسمانِ آبیِ زبانِ فارسی پروازی شوق‌انگیز داشته‌باشید!
              </p>
              <p>
                  مینا یک مجموعه 4 جلدی است و هر جلد آن هشت درس دارد. درس‌های مینا ساختارِ مشابهی دارند و هم‌زمان همه مهارت‌های زبانی را مورد توجّه قرار داده‌اند. محتوای هر درس، شامل دو ‌مکالمه کاربردی، دو کارکرد ارتباطی، دو ساختِ دستوریِ مرتبط و دامنه حساب‌شده‌ای از واژه‌های مهم است. به‌علاوه، در هر درس، بخشی به مهارتِ خواندن اختصاص یافته و در همه تمرین‌ها به مهارتِ نوشتن نیز توجّه‌شده‌است. مینا، به نقشِ بازی و تکلیف‌های خلّاق توجّه داشته و صفحه پایانیِ همه درس را به این گونه فعّالیت‌ها اختصاص‌داده‌است.
              </p>
              <p>
                  مینا مجموعه‌ای است چند‌رسانه‌ای، که امکان می‌دهد حجم قابل‌توجّهی از گفتارِ روزمره فارسی‌زبانان را در بافت‌ها و موقعیت‌های گوناگون بشنوید.
              </p>
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
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" aria-valuenow="50" 
                aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                پیش میانی: B1
                </div>
              </a>
            </div>
            <div class="mb-1">
              <a class="progress" href="elementary-level.html">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" aria-valuenow="60" 
                aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                میانی: B2
                </div>
              </a>
            </div>
            <div class="mb-1">
              <a class="progress" href="elementary-level.html">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" aria-valuenow="75" 
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
        <div class="col-md-4 order-md-1 text-center">
          <div class="buttons mt-3">
            <a href="https://mina.saadifoundation.ir" target="_blank">
              <img src="img/buttons/01_elearning2.png" alt="" class="w-75">
            </a>  
            <a href="http://opac.nlai.ir/opac-prod/bibliographic/5759815" target="_blank">
              <img src="img/buttons/02_Bibliography2.png" alt="" class="w-75">
            </a>
            <a href="contents/mina1.pdf" target="_blank">
              <img src="img/buttons/03_Index2.png" alt="" class="w-75">
            </a>
            <a href="contents/mina1.pdf" target="_blank" class="mb-2">
              <img src="img/buttons/04_Sample2.png" alt="" class="w-75">
            </a>
            <a href="https://www.ketabcity.com/BookView.aspx?bookid=2308464" target="_blank">
              <img src="img/buttons/05_Buy-Book2.png" alt="" class="w-75">
            </a>
            <a href="https://taaghche.com/book/56277" target="_blank">
              <img src="img/buttons/06_Buy-eBook2.png" alt="" class="w-75">
            </a>
            <a href="sounds/mina1/mina1.zip" target="_blank">
              <img src="img/buttons/07_Audio-Book2.png" alt="" class="w-75">
            </a>
          </div>
        </div>
      </div>
      <div class="row text-center border-top mb-4 border-level-a" id="sounds-row">
        <div class="col-12 mb-4">
          <h2 class="text-center mt-4">
            فایل‌های صوتی
          </h2>
          <a href="sounds/mina1/mina1.zip">
            دریافت تمام فایل‌های صوتی (zip)
          </a>
        </div>
        <div class="col-12">
            <div class="accordion" id="accordionLessons">
                <div class="card">
                  <div class="card-header" id="heading0">
                    <h2 class="mb-0">
                      <button class="btn text-center collapsed" type="button" data-toggle="collapse" data-target="#collapse0" aria-expanded="false" aria-controls="collapse0">
                        مقدمه
                      </button>
                    </h2>
                  </div>
                  <div id="collapse0" class="collapse show" aria-labelledby="heading0" data-parent="#accordionLessons">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-10 mb-2">
                                <audio controls preload="none">
                                    <source src="sounds/mina1/TRACK0.mp3" type="audio/mpeg">
                                    مرورگر شما این فایل را پشتیبانی نمی‌کند.
                                </audio>
                            </div>
                            <div class="col-sm-2">
                                <a href="sounds/mina1/TRACK0.mp3" target="_blank" type="button" class="btn btn-info btn-block mt-2" download="TRACK0.mp3">
                                    دانلود
                                  </a>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="heading1">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                        درس 1
                      </button>
                    </h2>
                  </div>
                  <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionLessons">
                    <div class="card-body">
                        <h5 class="mb-3">
                            بخش الف، تمرین 1
                        </h5>
                        <div class="row">
                            <div class="col-sm-10 mb-2">
                                <audio controls preload="none">
                                    <source src="sounds/mina1/TRACK01.mp3" type="audio/mpeg">
                                    مرورگر شما این فایل را پشتیبانی نمی‌کند.
                                </audio>
                            </div>
                            <div class="col-sm-2">
                                <a href="sounds/mina1/TRACK01.mp3" target="_blank" type="button" class="btn btn-info btn-block mt-2" download="TRACK01.mp3">
                                    دانلود
                                  </a>
                            </div>
                        </div>
                        <h5 class="mb-3">
                            بخش الف، تمرین 2
                        </h5>
                        <div class="row">
                            <div class="col-sm-10 mb-2">
                                <audio controls preload="none">
                                    <source src="sounds/mina1/TRACK02.mp3" type="audio/mpeg">
                                    مرورگر شما این فایل را پشتیبانی نمی‌کند.
                                </audio>
                            </div>
                            <div class="col-sm-2">
                                <a href="sounds/mina1/TRACK02.mp3" target="_blank" type="button" class="btn btn-info btn-block mt-2" download="TRACK02.mp3">
                                    دانلود
                                  </a>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="heading2">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        درس 2
                      </button>
                    </h2>
                  </div>
                  <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionLessons">
                    <div class="card-body">
                      فایل‌های صوتی درس 2
                    </div>
                  </div>
                </div>
                <div class="card">
                    <div class="card-header" id="heading3">
                      <h2 class="mb-0">
                        <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                          درس 3
                        </button>
                      </h2>
                    </div>
                    <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionLessons">
                      <div class="card-body">
                        فایل‌های صوتی درس 3
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="heading4">
                      <h2 class="mb-0">
                        <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                          درس 4
                        </button>
                      </h2>
                    </div>
                    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionLessons">
                      <div class="card-body">
                        فایل‌های صوتی درس 4
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="heading5">
                      <h2 class="mb-0">
                        <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                          درس 5
                        </button>
                      </h2>
                    </div>
                    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionLessons">
                      <div class="card-body">
                        فایل‌های صوتی درس 5
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="heading6">
                      <h2 class="mb-0">
                        <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                          درس 6
                        </button>
                      </h2>
                    </div>
                    <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionLessons">
                      <div class="card-body">
                        فایل‌های صوتی درس 6
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="heading7">
                      <h2 class="mb-0">
                        <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                          درس 7
                        </button>
                      </h2>
                    </div>
                    <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionLessons">
                      <div class="card-body">
                        فایل‌های صوتی درس 7
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="heading8">
                      <h2 class="mb-0">
                        <button class="btn btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                          درس 8
                        </button>
                      </h2>
                    </div>
                    <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionLessons">
                      <div class="card-body">
                        فایل‌های صوتی درس 8
                      </div>
                    </div>
                  </div>
              </div>
        </div>
      </div>
      <div class="row text-center d-flex justify-content-center border-top border-level-a" id="writers-row">
        <div class="col-12">
          <h2 class="mb-4 mt-4">
            مؤلفان کتاب
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
      <div class="row text-center d-flex justify-content-center border-top mb-4 border-level-a">
        <div class="col-12">
          <h2 class="mb-4 mt-4">
            کتاب‌های مرتبط
          </h2>
        </div>
        <div class="col-6 col-md-3 mb-2">
          <a href="mina2.html">
            <div class="card book-card">
              <img src="img/mina2.jpg" class="card-img-top">
              <div class="card-body">
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
              <img src="img/mina1.jpg" class="card-img-top">
              <div class="card-body">
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
              <p class="card-text">
                مینا 4
              </p>
            </div>
          </div>
         </a>
        </div>
      </div>
    </div>
  
    <footer class="container-fluid pt-4 my-md-4 border-top text-center border-level-a">
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
