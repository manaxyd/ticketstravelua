@auth
    <li><span>Добро пожаловать, {{ $auth->name }}</span></li>
    <li><a href="/my/account">Аккаунт</a></li>
    <li><a href="/logout">Выйти</a></li>
@endauth
@guest
    <li><a href="/login">Войти</a></li>
@endguest