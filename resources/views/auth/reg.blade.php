<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Курсы.РУ - Панель администратора</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <style>
        a>img {
            width: 25px;
        }
    </style>
</head>

<body>
    <x-header/>
    <main>
        <div class="container" style="margin-top: 5%;">

            <h1>Зарегистрироваться</h1>

            @if (session("error"))
                {{session("error")}}
            @endif

            <form method="POST" action="/reg_user"> 
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Введите Имя</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('name')}}">
                    @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Введите email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputPassword1" value="{{old('email')}}">
                    @error('email')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Введите пароль</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="{{old('password')}}">
                    @error('password')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Повторите пароль</label>
                    <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1" value="{{old('confirm_password')}}">
                    @error('password')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Поехали</button>
            </form>
        </div>
    </main>
</body>

</html>