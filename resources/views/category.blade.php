@extends('temp.main')
@section('title','Category')

@section('content')
<div class="container flex-grow-1 my-4">
  <div class="d-flex flex-column gap-4 w-100">
        <div class="w-100 d-flex align-items-center" style="background-color:grey;">
          <h1 class="m-0 p-2 text-white">{{ $namecategory->category }}</h1>
        </div>
        <div class="box-card d-flex flex-row flex-wrap justify-content-start gap-4">
          @foreach($books as $book)
            <div class="card" style="width: 15rem;">
                <img src="{{ asset($book->url) }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $book->title }}</h5>
                  <p class="card-text">by</p>
                  <p class="card-text">{{ $book->author }}</p>
                  <a href="{{ route('detail',$book->id) }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
          @endforeach
        </div>
    </div>
</div>
@endsection