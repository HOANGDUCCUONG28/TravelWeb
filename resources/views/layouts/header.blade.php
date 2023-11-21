<nav class="navbar navbar-expand-lg  bg-danger">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#"><i class="fa-sharp fa-solid fa-feather-pointed"></i></a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{request()->is('/') ? 'active': ''}} " aria-current="page" href="{{ route('ProductList',[],false) }}">Vietnamtravel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{request()->is('about') ? 'active': ''}}" href="{{ route('ProductList',[],false) }}"><i class="fa-solid fa-person-walking-luggage"></i>観光・お勧め</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('ProductList',[],false) }}"><i class="fa-sharp fa-solid fa-plate-wheat"></i>グルメ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('ProductList',[],false) }}"><i class="fa-solid fa-bed"></i>ホテル</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('delCartAll',[],false) }}"><i class="fa-solid fa-cart-plus"></i>かご追加</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('ProductList',[],false) }}"><i class="fa-solid fa-calendar-days"></i>予約確認</a>
        </li>
      </ul>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('ProductList',[],false) }}">ログインはこちら</a>
          </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>