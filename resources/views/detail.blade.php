@extends('temp.main')
@section('title','Detail')

@section('content')
<div class="container flex-grow-1 my-4">
  <div class="d-flex flex-column gap-4 w-100">
        <div class="w-100 d-flex align-items-center" style="background-color:grey;">
          <h1 class="m-0 p-2 text-white">Book Detail</h1>
        </div>
        <div class="box-card d-flex flex-row flex-wrap justify-content-center gap-4">
            <div class="card" style="">
                <img src="{{ asset($books->url )}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Title : {{$books->title}} </h5>
                  <p class="card-text">Author : {{$books->author}}</p>
                  <p class="card-text">Publisher : {{$books->name }}</p>
                  <p class="card-text">Year : {{$books->year}}</p>
                  <p class="card-text">Sinopsis : </p>
                  <p>{{$books->sinopsis}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection