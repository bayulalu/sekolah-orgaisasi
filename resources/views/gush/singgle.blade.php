@extends('layouts.master')

@section('title', 'Home')

@section('conten')
<main id="main">
    <section id="event">

    <!--==========================
      About Us Section
    ============================-->
      <div class="container">
        @if (session('msg'))
            <div class="alert alert-success" role="alert">
             Data Berhasil Diubah 
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
            <h2 class="3"> {{$event->title}} </h2>
            <p>  {{substr($event->created_at, 0, 10) }} || Organisasi : {{$event->status}}</p>
            @if(Auth::id() == $event->user_id)
              <a href="/event-update/{{$event->slug}}"> <button type="button" class="btn btn-info">Edit</button>  </a>
              <a href="/event-delete/{{$event->slug}}"><button type="button" class="btn btn-danger">Hapus</button></a>
            @endif
            <hr>
            @if($event->image) 
              <img src="{{ asset('storage/'.$event->image ) }}" class="img-fluid rounded mx-auto d-block img-thumbnail" alt="Responsive image">
            @endif  
            <p>
              {!!$event->content!!}
            </p>
        </div>
        </div>
      </div>
    </section>

</main>


@endsection