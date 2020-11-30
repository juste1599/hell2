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
                        <h1 id="antraste" style="margin-left: 300px;">Anketa</h1>
                </div>
                <div class="container-fuild">
                    <div class="form-group col-sm-7">
                    </div>
                    <div class="row" style="color: white">
                        <form class="form-horizontal" >

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

                            <div class="form-group col-lg-10">
                                <h2> 6. Ar viska darai paskutinę dieną? </h2>
                                <input type="radio" id="age1" name="age" value="30">
                                <label for="age1">Ne, dirbu pavyzdingai.</label><br>
                                <input type="radio" id="age2" name="age" value="60">
                                <label for="age2">Taip, nu taip gaunasi.</label><br>
                            </div>

                            <div class="form-group col-lg-10">
                                <h2> 7. Ar per karantiną ėjai į viešą renginį/susibūrimą?  </h2>
                                <input type="radio" id="age1" name="age" value="30">
                                <label for="age1">Taip, negaliu išbūti namuose.</label><br>
                                <input type="radio" id="age2" name="age" value="60">
                                <label for="age2">Ne, neinu gaudyti virusų, mane aprūpina internetas.</label><br>
                                <input type="radio" id="age3" name="age" value="100">
                                <label for="age3">Taip, reikėjo apsipirkti.</label><br>
                            </div>

                            <div class="form-group col-lg-10">
                                <h2> 8. Ar mėgsti viršyti greitį?  </h2>
                                <input type="radio" id="age1" name="age" value="30">
                                <label for="age1">Taip, biškį.</label><br>
                                <input type="radio" id="age2" name="age" value="60">
                                <label for="age2">Ne, vairuoju pavyzdingai.</label><br>
                                <input type="radio" id="age3" name="age" value="100">
                                <label for="age3">Ne, mama neleidžia.</label><br>
                                <input type="radio" id="age4" name="age" value="100">
                                <label for="age4">Taip, reikia vis sistemą "pravalyti".</label><br>
                            </div>

                            <div class="form-group col-lg-10">
                                <h2> 9. Ar eini per perėja kai yra raudona?  </h2>
                                <input type="radio" id="age1" name="age" value="30">
                                <label for="age1">Taip, tik kai skubu.</label><br>
                                <input type="radio" id="age2" name="age" value="60">
                                <label for="age2">Taip, visada kai nėra automobilių.</label><br>
                                <input type="radio" id="age3" name="age" value="100">
                                <label for="age3">Ne, gyvenimas nepabėgs.</label><br>
                            </div>

                            <div class="form-group col-lg-10">
                                <h2> 10. Ar važiavote policijos mašina?  </h2>
                                <input type="radio" id="age1" name="age" value="30">
                                <label for="age1">Taip, buvo smagu.</label><br>
                                <input type="radio" id="age2" name="age" value="60">
                                <label for="age2">Taip, turėjote matyti "Faruose".</label><br>
                                <input type="radio" id="age3" name="age" value="100">
                                <label for="age3">Ne, vairuoju pats.</label><br>
                            </div>

                            <div class="form-group col-lg-10">
                                <h2> 11. Žalgiris ar Rytas?  </h2>
                                <input type="radio" id="age1" name="age" value="30">
                                <label for="age1">Kai būnu Kaune Žalgiris, bijau užsitraukti rūstybę.</label><br>
                                <input type="radio" id="age2" name="age" value="60">
                                <label for="age2">Žalgiris.</label><br>
                                <input type="radio" id="age3" name="age" value="100">
                                <label for="age3">Rytas.</label><br>
                                <input type="radio" id="age4" name="age" value="100">
                                <label for="age4">Šiaip buvau už Šarą, o ne pačią komandą.</label><br>
                            </div>

                            <div class="form-group col-lg-10">
                                <h2> 12. Ar dažnai prisijungete į paskaitą ir nueinate miegoti?  </h2>
                                <input type="radio" id="age1" name="age" value="30">
                                <label for="age1">Taip, sunku rytais būna.</label><br>
                                <input type="radio" id="age2" name="age" value="60">
                                <label for="age2">Ne, nes prižadina virdulys.</label><br>
                                <input type="radio" id="age3" name="age" value="100">
                                <label for="age3">Ne, žiūriu, veltui laiko neleidžiu</label><br>
                                <input type="radio" id="age4" name="age" value="100">
                                <label for="age4">Taip, bet nemiegu o dirbu.</label><br>
                            </div>
                            <div class="form-group col-lg-10">
                                <h2> 13. Ar dažnai prisijungete į paskaitą ir nueinate miegoti?  </h2>
                                <input type="radio" id="age1" name="age" value="30">
                                <label for="age1">Taip, sunku rytais būna.</label><br>
                                <input type="radio" id="age2" name="age" value="60">
                                <label for="age2">Ne, nes prižadina virdulys.</label><br>
                                <input type="radio" id="age3" name="age" value="100">
                                <label for="age3">Ne, žiūriu, veltui laiko neleidžiu</label><br>
                                <input type="radio" id="age4" name="age" value="100">
                                <label for="age4">Taip, bet nemiegu o dirbu.</label><br>
                            </div>


                            <div class="form-group col-sm-7">
                                <script>
                                        <?php
                                $ratas = rand(1,9);

                                switch ($ratas) {
                                    case "1":

                                        function myPay() {
                                            window.open("pirmasRatas", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=250,left=500,width=450, height=150");
                                        }
                                        break;
                                    case "2":
                                        function myPay() {
                                            window.open("antrasRatas", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=250,left=500,width=450, height=150");
                                        }
                                        break;
                                    case "3":
                                        function myPay() {
                                            window.open("treciasRatas", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=250,left=500,width=450, height=150");
                                        }
                                        break;
                                    case "4":
                                        function myPay() {
                                            window.open("ketvirtasRatas", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=250,left=500,width=450, height=150");
                                        }
                                        break;
                                    case "5":
                                        function myPay() {
                                            window.open("penktasRatas", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=250,left=500,width=450, height=150");
                                        }
                                        break;
                                    case "6":
                                        function myPay() {
                                            window.open("sestasRatas", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=250,left=500,width=450, height=150");
                                        }
                                        break;
                                    case "7":
                                        function myPay() {
                                            window.open("septintasRatas", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=250,left=500,width=450, height=150");
                                        }
                                        break;
                                    case "8":
                                        function myPay() {
                                            window.open("astuntasRatas", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=250,left=500,width=450, height=150");
                                        }
                                        break;
                                    case "9":
                                        function myPay() {
                                            window.open("devintasRatas", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=250,left=500,width=450, height=150");
                                        }
                                        break;

                                }
                                ?>

                                    var child;
                                    var bu = document.getElementById("mygtukas2");
                                    function myPay() {
                                        child = window.open("pirmasRatas", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=250,left=500,width=450, height=150");
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
                                    <button type=""class="btn" id="mygtukas2">Užbaigti anketą</button>
                                </div>
                            </div>


                        </form>

                    </div>

                </div>
            </table>
        </div>
    </div>



@endsection
