@extends('temp.main')
@section('title','List Publisher')

@section('content')
<div class="container flex-grow-1 my-4">
  <div class="d-flex flex-column gap-4 w-100">
        <div class="w-100 d-flex align-items-center" style="background-color:grey;">
          <h1 class="m-0 p-2 text-white">Publisher</h1>
        </div>
        <div class="box-card d-flex flex-row flex-wrap justify-content-start gap-4">
          @foreach($publisher as $publishers)
            <div class="card" style="width: 15rem;">
                <img src="{{ asset($publishers->logo )}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $publishers->name }}</h5>
                  <p class="card-text">{{ $publishers->address }}</p>
                  <p class="card-text">{{ $publishers->email }}</p>
                  <a href="{{ route('detailpublisher', $publishers->id) }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
          @endforeach
        </div>
    </div>
</div>
@endsection