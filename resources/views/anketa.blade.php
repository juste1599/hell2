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
                                <input type="radio" id="age12" name="age2" value="30">
                                <label for="age12">Vanduo ➜ dantų pasta ➜ burna.</label><br>
                                <input type="radio" id="age22" name="age2" value="60">
                                <label for="age22">Dantų pasta ➜ vanduo ➜burna.</label><br>
                                <input type="radio" id="age32" name="age2" value="100">
                                <label for="age32">Dantų pasta ➜ burna.</label><br>
                            </div>

                            <div class="form-group col-lg-10">
                                <h2> 3. Pica su ananasais. Už ar prieš?</h2>
                                <input type="radio" id="age13" name="age3" value="30">
                                <label for="age13">Man patinka, valgau.</label><br>
                                <input type="radio" id="age23" name="age3" value="60">
                                <label for="age23">Nevalgau, sudegint ją reikia.</label><br>
                            </div>

                            <div class="form-group col-lg-10">
                                <h2> 4. Kaip naudojate kaukę?</h2>
                                <input type="radio" id="age14" name="age4" value="30">
                                <label for="age14">Ant smakro, saugau barzdą.</label><br>
                                <input type="radio" id="age24" name="age4" value="60">
                                <label for="age24">Taisyklingai, kai visi normalūs žmonės.</label><br>
                                <input type="radio" id="age34" name="age4" value="100">
                                <label for="age34">Dengiu tik burną, nes dažnai pamirštu dantis išsivalyti.</label><br>
                            </div>

                            <div class="form-group col-lg-10">
                                <h2> 5. Kaip naudojate kaukę?</h2>
                                <input type="radio" id="age15" name="age5" value="30">
                                <label for="age15">Ant smakro, saugau barzdą.</label><br>
                                <input type="radio" id="age25" name="age5" value="60">
                                <label for="age25">Taisyklingai, kai visi normalūs žmonės.</label><br>
                                <input type="radio" id="age35" name="age5" value="100">
                                <label for="age35">Dengiu tik burną, nes dažnai pamirštu dantis išsivalyti.</label><br>
                            </div>

                            <div class="form-group col-lg-10">
                                <h2> 6. Ar esi užlipęs gyvūnui ant uodegos ir neatsiprašęs? </h2>
                                <input type="radio" id="age16" name="age6" value="30">
                                <label for="age12">Taip, gailiuosi iki šiol.</label><br>
                                <input type="radio" id="age26" name="age6" value="60">
                                <label for="age22">Ne, visada atsiprašau ir pabučiuoju.</label><br>
                                <input type="radio" id="age36" name="age6" value="100">
                                <label for="age36">Neauginu augintinio su uodega.</label><br>
                            </div>

                            <div class="form-group col-lg-10">
                                <h2> 7. Ar viska darai paskutinę dieną? </h2>
                                <input type="radio" id="age17" name="age7" value="30">
                                <label for="age1">Ne, dirbu pavyzdingai.</label><br>
                                <input type="radio" id="age27" name="age7" value="60">
                                <label for="age27">Taip, nu taip gaunasi.</label><br>
                            </div>

                            <div class="form-group col-lg-10">
                                <h2> 8. Ar per karantiną ėjai į viešą renginį/susibūrimą?  </h2>
                                <input type="radio" id="age18" name="age8" value="30">
                                <label for="age18">Taip, negaliu išbūti namuose.</label><br>
                                <input type="radio" id="age2" name="age8" value="60">
                                <label for="age28">Ne, neinu gaudyti virusų, mane aprūpina internetas.</label><br>
                                <input type="radio" id="age38" name="age"8 value="100">
                                <label for="age38">Taip, reikėjo apsipirkti.</label><br>
                            </div>

                            <div class="form-group col-lg-10">
                                <h2> 9. Ar mėgsti viršyti greitį?  </h2>
                                <input type="radio" id="age19" name="age9" value="30">
                                <label for="age19">Taip, biškį.</label><br>
                                <input type="radio" id="age29" name="age9" value="60">
                                <label for="age29">Ne, vairuoju pavyzdingai.</label><br>
                                <input type="radio" id="age39" name="age9" value="100">
                                <label for="age39">Ne, mama neleidžia.</label><br>
                                <input type="radio" id="age49" name="age9" value="100">
                                <label for="age49">Taip, reikia vis sistemą "pravalyti".</label><br>
                            </div>

                            <div class="form-group col-lg-10">
                                <h2> 10. Ar eini per perėja kai yra raudona?  </h2>
                                <input type="radio" id="age110" name="age10" value="30">
                                <label for="age110">Taip, tik kai skubu.</label><br>
                                <input type="radio" id="age210" name="age10" value="60">
                                <label for="age2">Taip, visada kai nėra automobilių.</label><br>
                                <input type="radio" id="age310" name="age10" value="100">
                                <label for="age310">Ne, gyvenimas nepabėgs.</label><br>
                            </div>

                            <div class="form-group col-lg-10">
                                <h2> 11. Ar važiavote policijos mašina?  </h2>
                                <input type="radio" id="age111" name="age11" value="30">
                                <label for="age111">Taip, buvo smagu.</label><br>
                                <input type="radio" id="age211" name="age11" value="60">
                                <label for="age211">Taip, turėjote matyti "Faruose".</label><br>
                                <input type="radio" id="age311" name="age11" value="100">
                                <label for="age311">Ne, vairuoju pats.</label><br>
                            </div>

                            <div class="form-group col-lg-10">
                                <h2> 12. Žalgiris ar Rytas?  </h2>
                                <input type="radio" id="age112" name="age12" value="30">
                                <label for="age112">Kai būnu Kaune Žalgiris, bijau užsitraukti rūstybę.</label><br>
                                <input type="radio" id="age212" name="age12" value="60">
                                <label for="age212">Žalgiris.</label><br>
                                <input type="radio" id="age312" name="age12" value="100">
                                <label for="age312">Rytas.</label><br>
                                <input type="radio" id="age412" name="age12" value="100">
                                <label for="age412">Šiaip buvau už Šarą, o ne pačią komandą.</label><br>
                            </div>

                            <div class="form-group col-lg-10">
                                <h2> 13. Ar dažnai prisijungete į paskaitą ir nueinate miegoti?  </h2>
                                <input type="radio" id="age113" name="age13" value="30">
                                <label for="age113">Taip, sunku rytais būna.</label><br>
                                <input type="radio" id="age213" name="age13" value="60">
                                <label for="age213">Ne, nes prižadina virdulys.</label><br>
                                <input type="radio" id="age313" name="age13" value="100">
                                <label for="age313">Ne, žiūriu, veltui laiko neleidžiu</label><br>
                                <input type="radio" id="age413" name="age13" value="100">
                                <label for="age413">Taip, bet nemiegu o dirbu.</label><br>
                            </div>
                            <div class="form-group col-lg-10">
                                <h2> 14. Ar dažnai prisijungete į paskaitą ir nueinate miegoti?  </h2>
                                <input type="radio" id="age114" name="age14" value="30">
                                <label for="age114">Taip, sunku rytais būna.</label><br>
                                <input type="radio" id="age214" name="age14" value="60">
                                <label for="age214">Ne, nes prižadina virdulys.</label><br>
                                <input type="radio" id="age314" name="age14" value="100">
                                <label for="age314">Ne, žiūriu, veltui laiko neleidžiu</label><br>
                                <input type="radio" id="age414" name="age14" value="100">
                                <label for="age414">Taip, bet nemiegu o dirbu.</label><br>
                            </div>


                            <div class="form-group col-sm-7">

                                <script>


                                function myRatas() {
                                    var ratas = Math.floor((Math.random() * 9) + 1);

                            //  alert(ratas);
                                switch (ratas) {
                                    case "1":
                                            window.open("pirmasRatas", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=250,left=500,width=450, height=150");
                                        break;
                                    case "2":
                                            window.open("antrasRatas", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=250,left=500,width=450, height=150");

                                        break;
                                    case "3":

                                            window.open("treciasRatas", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=250,left=500,width=450, height=150");

                                        break;
                                    case "4":

                                            window.open("ketvirtasRatas", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=250,left=500,width=450, height=150");

                                        break;
                                    case "5":

                                            window.open("penktasRatas", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=250,left=500,width=450, height=150");

                                        break;
                                    case "6":

                                            window.open("sestasRatas", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=250,left=500,width=450, height=150");

                                        break;
                                    case "7":

                                            window.open("septintasRatas", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=250,left=500,width=450, height=150");

                                        break;
                                    case "8":

                                            window.open("astuntasRatas", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=250,left=500,width=450, height=150");

                                        break;
                                    case "9":

                                            window.open("devintasRatas", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=250,left=500,width=450, height=150");
                                        break;

                                }

                                }

                                 {{--   var child;
                                    var bu = document.getElementById("mygtukas2");
                                    function myPay() {
                                        child = window.open("pirmasRatas", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=250,left=500,width=450, height=150");
                                    }--}}
                                </script>

                                <style>
                                     #mygtukas1
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
                                    <button type="button"class="btn" id="mygtukas1" onclick="myRatas()">Užbaigti anketą</button>
                                </div>
                            </div>


                        </form>

                    </div>

                </div>
            </table>
        </div>
    </div>



@endsection
