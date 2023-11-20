<div>
    <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">Курсы.Ру</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Курсы</a>
                            </li>
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="/auth">Вход</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/reg">Регистрация</a>
                                </li>
                            @endguest
                            @auth
                            <li class="nav-item">
                                <a class="nav-link" href="/admin">Панель администратора</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/exit">Выход</a>
                            </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>
    </header>
</div>