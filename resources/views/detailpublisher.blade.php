@extends('temp.main')
@section('title','Detail Publisher')

@section('content')
<div class="container flex-grow-1 my-4">
  <div class="d-flex flex-column gap-4 w-100">
        <div class="w-100 d-flex align-items-start flex-column" style="background-color:grey;">
          <h3 class="m-0 p-2 text-white">{{ $publisherdetail->name }}</h3>
          <h3 class="m-0 p-2 text-white">Address - {{ $publisherdetail->address }}</h3>
          <h3 class="m-0 p-2 text-white">Phone {{ $publisherdetail->phone }}</h3>
          <h3 class="m-0 p-2 text-white">Email {{ $publisherdetail->email }}</h3>
        </div>
        <div class="box-card d-flex flex-row flex-wrap justify-content-start gap-4">
          @if($books == "nodata")
            <h1>No Buku Publish Yet</h1>
          @else
          @foreach($books as $book)
            <div class="card" style="width: 15rem;">
                <img src="{{ asset($book->url ) }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $book->title }}</h5>
                  <p class="card-text">by</p>
                  <p class="card-text">{{ $book->author }}</p>
                  <a href="{{ route('detail',$book->id) }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
          @endforeach
          @endif
        </div>
    </div>
</div>
@endsection