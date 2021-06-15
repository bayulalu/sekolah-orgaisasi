@extends('layouts.master')

@section('Buat Eveent', 'Event')
@section('conten')

<main id="main" class="form-event">
    <section id="about">
        <div class="container">
        @if (session('msg'))
            <div class="alert alert-success" role="alert">
               Data User Berhasil Di Tambah
            </div>
        @endif
            <div class="row">
                <div class="col-sm-3"></div>
                
                <div class="col-sm-6">
                    <h3 class="text-center">Daftarkan Admin Organisasi</h3>

                    <form method="post" action="{{route('register')}}" >
                        @csrf
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Nama</label>
                          <input type="text" name="name" class="form-control"  >
                          <span id="error"> {{$errors->first('name')}} </span>

                        </div>
                        
                        <div class="form-group">
                            <label for="exampleFormControlInput1">User</label>
                            <input type="text" name="user" class="form-control" >
                          <span id="error"> {{$errors->first('user')}} </span>

                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Password</label>
                            <input type="text" name="password" class="form-control"  >
                            <span id="error"> {{$errors->first('password')}} </span>

                        </div>


                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Organisasi</label>
                            <select class="form-control" name="organisasi" id="exampleFormControlSelect1">
                              <option value="">Pilih</option>
                              <option value="Futsal">Futsal</option>
                              <option value="PMR">PMR</option>
                              <option value="Pramuka">Pramuka</option>
                            </select>
                            <span id="error"> {{$errors->first('organisasi')}} </span>

                          </div>

                       

                          <button type="submit" class="btn btn-info submit">Simpan</button>
                      </form>
                </div>
            </div>
           
        </div>
    </section>
</main>

@endsection
