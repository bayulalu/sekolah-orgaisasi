@extends('layouts.master')

@section('Buat Eveent', 'Event')
@section('conten')

<main id="main" class="form-event">
    <section id="about">
        <div class="container">

        @if (session('msg'))
            <div class="alert alert-success" role="alert">
                Data Berhasil Ditambah 
            </div>
        @endif

            <h2 class="text-center">Buat Event</h2>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <form method="post" action="{{route('create-event')}}" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Judul</label>
                          <input type="text" name="judul" class="form-control" value="{{old('judul')}}" >
                          <span id="error"> {{$errors->first('judul')}} </span>
                        
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Konten</label>
                          <textarea class="form-control" name="konten"  id="editor1" rows="5"> {{old('konten')}} </textarea>
                          <span id="error"> {{$errors->first('konten')}} </span>
                        
                        </div>

                        <div class="form-group">
                            <label for="gambar">Foto Jika Ada</label>
                            <input type="file" class="form-control-file" name="gambar" id="gambar" >
                          <span id="error"> {{$errors->first('gambar')}} </span>
                            
                        </div>

                          <button type="submit" class="btn btn-info submit">Simpan</button>
                      </form>
                </div>
            </div>
           
        </div>
    </section>
</main>

<script>
    CKEDITOR.replace( 'editor1', {
        uiColor: '#9AB8F3'
    });

    $('#gambar').change(() => {
        console.log('tes');
    })


</script>
@endsection
