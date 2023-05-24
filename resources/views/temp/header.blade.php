<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex flex-column p-lg-0 py-2">
    <div class="w-100 bg-warning p-4 d-lg-block d-none" style="text-align: center;font-size:20px;">Giant Book Supplier</div>
    <div class="container">
      <a class="navbar-brand d-lg-none" href="#">Giant Book Supplier</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-lg-auto ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach($categories as $category)
              <li><a class="dropdown-item" href="{{ route('category',$category->id) }}">{{$category->category}}</a></li>
                @endforeach
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('listpublisher' )}}">Publisher</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('contact') }}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  