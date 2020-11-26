@extends('layouts.app')

@section('turinys')
    <h1 id="antraste" >Mano paskyra</h1>
    <hr>
    <br>

                <div class="col-lg-10 offset-lg-1">
                    <form class="form" method="POST" action="{{ Route('confirmEditAcc',  Auth::user()->id)}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                         <div  class="container-fluid" id="laisko_krastai">
                             <h4>Naudotojo informacija</h4>
                             <hr>
                             <div class="form-group row">
                                 <label for="email" class="col-lg-2 control-label">Jūsų el. paštas:</label>
                                 <div class="col-lg-6">
                                     <input  id="email" class="form-control" type="email"  name="email" value="{{$user->email}}" required>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label for="name" class="col-lg-2 control-label">Vardas:</label>
                                 <div class="col-lg-6">
                                     <input id="name" class="form-control" type="text" name="name" value="{{$user->name}}" required>
                                 </div>
                             </div>
                             <br>
                             <h4>Pakeisti slaptažodį</h4>
                             <hr>
                             <div class="form-group row">
                                 <label for="password" class="col-lg-2 control-label">Naujas slaptažodis</label>
                                 <div class="col-lg-6">
                                     <input id="password" type="password" class="form-control" name="password"  min="8">
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label for="password-confirm" class="col-lg-2 control-label">Pakartokite slaptažodį</label>
                                 <div class="col-lg-6">
                                     <input id="password-confirm" type="password" class="form-control" name="password_confirmation" min="8" >
                                 </div>

                             </div>

                        <br>
                             <div class="col-lg-8 ">

                        <button class="btn" id="mygtukas" type="submit"><a style="color: white" >Išsaugoti</a></button>
                             </div>

                    </div>
                    </form>
                </div>

@endsection
