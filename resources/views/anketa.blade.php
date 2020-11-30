@extends('layouts.app')

@section('turinys')
    <link href="{{ asset('pay') }}">

    <a style="margin: 0 0 15px 15px;" href="{{URL::previous()}}">
        <svg class="bi bi-chevron-compact-left" width="1.5em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 01.223.67L6.56 8l2.888 5.776a.5.5 0 11-.894.448l-3-6a.5.5 0 010-.448l3-6a.5.5 0 01.67-.223z" clip-rule="evenodd"/>
        </svg>
    </a>
    <div>
        <div class="col-lg-10 offset-lg-1" style="margin-left: 100px;">
            <table id="cart" class="table table-hover table-condensed" >
                <div class="form-group col-sm-7">
                    <div class="container-fuild">
                        <h1 id="antraste">Anketa
                        </h1>
                </div>
                <div class="container-fuild">
                    <div class="form-group col-sm-7">
                    </div>
                    <div class="row" style="color: white">
                        <form id="ived"class="form-horizontal" method="post" action="{{Route('orderInsert')}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group col-lg-10">
                                <h2> 1. Kaip valgote šaltibarščius?</h2>
                                <input type="radio" id="age1" name="age" value="30">
                                <label for="age1">Bulvės ir sriuba atskirai.</label><br>
                                <input type="radio" id="age2" name="age" value="60">
                                <label for="age2">Bulves įmerkiu į sriubą tada valgau.</label><br>
                                <input type="radio" id="age3" name="age" value="100">
                                <label for="age3">Pirma valgau sriubą, tik tada bulves.</label><br>
                            </div>

                            <div class="form-group col-lg-10">
                                <h2> 2. Kuria seka jūs taikote?</h2>
                                <input type="radio" id="age1" name="age" value="30">
                                <label for="age1">Vanduo ➜ dantų pasta ➜ burna.</label><br>
                                <input type="radio" id="age2" name="age" value="60">
                                <label for="age2">Dantų pasta ➜ vanduo ➜burna.</label><br>
                                <input type="radio" id="age3" name="age" value="100">
                                <label for="age3">Dantų pasta ➜ burna.</label><br>
                            </div>

                            <div class="form-group col-lg-10">
                                <h2> 3. Pica su ananasais. Už ar prieš?</h2>
                                <input type="radio" id="age1" name="age" value="30">
                                <label for="age1">Man patinka, valgau.</label><br>
                                <input type="radio" id="age2" name="age" value="60">
                                <label for="age2">Nevalgau, sudegint ją reikia.</label><br>
                            </div>

                            <div class="form-group col-lg-10">
                                <h2> 4. Kaip naudojate kaukę?</h2>
                                <input type="radio" id="age1" name="age" value="30">
                                <label for="age1">Ant smakro, saugau barzdą.</label><br>
                                <input type="radio" id="age2" name="age" value="60">
                                <label for="age2">Taisyklingai, kai visi normalūs žmonės.</label><br>
                                <input type="radio" id="age3" name="age" value="100">
                                <label for="age3">Dengiu tik burną, nes dažnai pamirštu dantis išsivalyti.</label><br>
                            </div>

                            <div class="form-group col-lg-10">
                                <h2> 4. Kaip naudojate kaukę?</h2>
                                <input type="radio" id="age1" name="age" value="30">
                                <label for="age1">Ant smakro, saugau barzdą.</label><br>
                                <input type="radio" id="age2" name="age" value="60">
                                <label for="age2">Taisyklingai, kai visi normalūs žmonės.</label><br>
                                <input type="radio" id="age3" name="age" value="100">
                                <label for="age3">Dengiu tik burną, nes dažnai pamirštu dantis išsivalyti.</label><br>
                            </div>

                            <div class="form-group col-lg-10">
                                <h2> 5. Ar esi užlipęs gyvūnui ant uodegos ir neatsiprašęs? </h2>
                                <input type="radio" id="age1" name="age" value="30">
                                <label for="age1">Taip, gailiuosi iki šiol.</label><br>
                                <input type="radio" id="age2" name="age" value="60">
                                <label for="age2">Ne, visada atsiprašau ir pabučiuoju.</label><br>
                                <input type="radio" id="age3" name="age" value="100">
                                <label for="age3">Neauginu augintinio su uodega.</label><br>
                            </div>
                            <div class="form-group col-sm-7">

                                <script>
                                    var child;
                                    var bu = document.getElementById("mygtukas2");
                                    function myPay() {
                                        child = window.open("pirmas", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=250,left=500,width=450, height=150");

                                    }
                                </script>
                                <style>
                                     #mygtukas2
                                    {
                                        background-color: #D00000;
                                        margin-top: 10px;
                                        text-align: center;
                                        text-decoration: none;
                                        font-size: 16px;
                                        color: white;
                                        cursor: pointer;
                                    }
                                    .myg{
                                        text-align: end;
                                    }
                                </style>
                                <div class="myg">

                                    <button type="submit"class="btn" id="mygtukas2" disabled>Užbaigti anketą</button>
                                </div>
                            </div>


                        </form>

                    </div>

                </div>
            </table>
        </div>
    </div>



@endsection
