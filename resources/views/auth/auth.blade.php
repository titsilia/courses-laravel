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
            @if (session("error"))
                {{session("error")}}
            @endif
            <h1>Войти</h1>

            <form method="POST" action="/auth_user">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Введите email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputPassword1" value="{{old('email')}}">
                </div>
                @error("email")
                <div class="alert alert-damger" role="alert">
                {{$message}}
                </div>
                @enderror
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Введите пароль</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="{{old('password')}}">
                </div>
                <button type="submit" class="btn btn-primary">Поехали</button>
            </form>
        </div>
    </main>
</body>

</html>