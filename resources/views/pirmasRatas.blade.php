@extends('layouts.app')

@section('turinys')
    <h1 id="antraste" >Jūs priklausote pirmam ratui</h1>
    <hr>
    <div class="col-lg-10 offset-lg-1">
        <div  class="container-fluid" id="laisko_krastai">
            <div >
                <img src="{{asset('images/1r.gif')}}" />
            </div>
            <p> <strong>Pramogos pragare</strong> - naujausia pramogų sritis šių dienų pandemijos kamuojamai visuomeniai
            </p>
            <p> Naudodamiesi mūsų sistema galite išsiaiškinti kokios yra jūsų didžiausios baimės ir su tinkamu pasiruošimu perlipti per savo galimybių ribas.
            </p>
            <br>
            <p>Mūsų siūlomi iššūkiai leis jums save išstumti iš komforto zonos ir suprasti, kad nėra plano B!
                Siūlomos paslaugos bei iššūkiai yra įvairūs bei pritaikomi kiekvienai amžiaus grupei ir visus privers save išbandyti bei tūrėti puikų laiką,
                o pragaro tematika paaštrins visų pojūčius. </p>
            <p>Mūsų anketa atrinks tinkamiausias  pramogas pagal jūsų sugedimo lygį (ir amžių).</p>
            <br>
            <p>
                {{-- <a style="display: contents" class="fa fa-envelope" href ="{{asset('email')}}"></a>--}}
            </p>

        </div>
    </div>
@endsection
