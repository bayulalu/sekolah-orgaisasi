<?php //var_dump(Auth::user()->name); die(); ?>
@extends('layouts.master')

@section('title', 'Event')
@section('conten')

<main id="main">
    <section id="event">
      <div class="container">
      
        @if (session('msg'))
            <div class="alert alert-success" role="alert">
                {{session('msg')}}
            </div>
        @endif
      
      
        <h1 class="text-center"> Event Sekolah</h1>
        
        <div class="row">
          @foreach ($events as $event)
            <div class="col-md-4">
              <div class="card border-dark mb-3" style="max-width: 18rem;">
                  <div class="card-header">{{$event->status}}</div>
                  <div class="card-body text-dark">
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-text">
                      {{-- {!!$event->content!!} --}}
                    
                    </p>
                  
                  @if (Auth::check())
                    <a href="/event/{{$event->slug}}" >Lihat</a> 
                    {{-- ||  <a href="/event-delete/{{$event->slug}}" >Hapus</a> ||  --}}
                    {{-- <a href="/event-delete/{{$event->slug}}" >Update</a>  --}}
                  @endif
                   

                  
                  </div>
              </div>
          </div>
          @endforeach

           

            {{-- <div class="col sm-4">
                <div class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body text-dark">
                      <h5 class="card-title">Dark card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col sm-4">
                <div class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body text-dark">
                      <h5 class="card-title">Dark card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col sm-4">
                <div class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body text-dark">
                      <h5 class="card-title">Dark card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
         --}}

        </div>
        


      </div>
    </section>
</main>
@endsection