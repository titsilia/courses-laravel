<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Курсы</title>
    <style>
        .hero{
            height: 75vh;
            width: 100%;
            overflow: hidden;
            background-image: url('storage/image/cover.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 50% 20% ;

        }
    </style> 
</head>
<body>
    <x-header/>
    <main>
        <section id="hero" class="hero d-flex justify-content-center align-items-center text-white ">
            <h1 class="bg-dark p-1 opacity-75">Онлайн курсы - это круто!</h1>
        </section>
    </main>

  <div class="container">
    <h2 class="m-3">Виды курсов</h1>
      <div class="col-sm-6">
        @foreach ($categories as $item)
          <a style="display: block;" class="card-title" href="/courses/{{$item->id}}">{{$item->title}}</a>
        @endforeach
      </div>
  </div>

    <section id="courses">
        <div class="container">
            <h2 class="m-3">Наши курсы</h2>
            <div class="d-flex">
                @foreach ($courses as $item)
                    <div class="card" style="width: 18rem;">
                        <img src="storage/image/{{$item->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->title}}</h5>
                            <p class="card-text">{{$item->description}}</p>
                            <p class="card-text">
                                Продолжительность курса:
                                <b>{{$item->duration}}</b>
                                недель(-и/-я)
                            </p>
                            <p class="card-text">
                                Стоимость:
                                <b>{{$item->cost}}</b>
                                Р
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $courses->withQueryString()->links('pagination::bootstrap-5') }}
        </div>
    </section>

    <!-- @foreach ($errors->all() as $item)
    {{$item}}
    @endforeach -->


    <section id="enroll">
        <div class="container">
            <h2 class="m-3">Оставить заявку</h2>
            <form method="POST" action="/enroll">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Ваш email</label>
                    <input type="email" class="form-control" id="email" name="email">
                    @error('email')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Ваше имя</label>
                    <input type="text" class="form-control" id="name" name="name">
                    @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Выберите курс</label>
                    <select class="form-select" name="course">
                        @foreach ($courses as $item)
                        <!-- <option selected>Список курсов...</option> -->
                        <option value="{{$item->id}}">{{$item->title}}</option>
                        @endforeach
                      </select>
                </div>
                <button type="submit" class="btn btn-primary">Оставить заявку</button>
            </form>
        </div>
    </section>
</body>
</html>