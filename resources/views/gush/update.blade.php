@extends('layouts.master')

@section('Update Eveent', 'Event')
@section('conten')

<main id="main" class="form-event">
    <section id="about">
        <div class="container">
            <h2 class="text-center">Edit Event</h2>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                <form method="post" action="/event-update/{{$event->slug}}" >
                        @csrf
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Judul</label>
                          <input type="text" name="judul" class="form-control"  value="{{old('judul') ? old('judul')  :$event->title}}" >
                          <span id="error"> {{$errors->first('judul')}} </span>
                            
                        </div>
                        
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Konten</label>
                          <textarea class="form-control" name="konten"  id="editor1" rows="5"> {{old('konten') ? old('konten')  :$event->content}}  </textarea>
                          <span id="error"> {{$errors->first('konten')}} </span>

                        
                        </div>

                        

                          <button type="submit" class="btn btn-info submit">Ubah</button>
                      </form>
                </div>
            </div>
           
        </div>
    </section>
</main>

<script>
    CKEDITOR.replace( 'editor1', {
        uiColor: '#9AB8F3',
        // toolbar : [['Bold','Italic','Font','FontSize', 'number'] ] 
    });

    $('#gambar').change(() => {
        console.log('tes');
    })


</script>
@endsection
