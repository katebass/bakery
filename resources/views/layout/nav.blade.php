<div class="navigation">
  <div class="container">
    <nav class="nav ">
      <a class="nav-link" href="{{ route('home') }}">На главную</a>
      <a class="nav-link" href=""><i class="fas fa-shopping-cart"></i>Категории выпечки</a>
      <a class="nav-link nav-right" href=""><i class="fa fa-shopping-cart"></i> Касса</a>

      @auth
        <a class="nav-link" href="">Создать раздел </a>
        <a class="nav-link" href="">Tasks</a>
        <a class="nav-link" href="">Solutions</a>
        <a class="nav-link ml-auto" href="#">Hello, {{ Auth::user()->name }}!</a>
        <a class="nav-link ml-auto" href="">Logout</a>
      @endauth
    </nav>
  </div>
</div>