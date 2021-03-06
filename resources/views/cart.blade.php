@extends('layouts.app')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

@section('turinys')

    <div class="container" id="cart_sonas">
        <div class="col-lg-10 offset-lg-1">
            <table id="cart" class="table table-hover table-condensed" >
                <thead>
                <tr style="border-bottom: 0px; color: white">
                    <th style="width:45%;border-bottom: 10px;">Pramoga</th>
                    <th style="width:10%;border-bottom: 10px;">Kaina</th>
                    <th style="width:15%;border-bottom: 10px;">Kiekis</th>
                    <th style="width:22%;border-bottom: 10px;"class="text-center">Suma</th>
                    <th style="width:10%;border-bottom: 10px;"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach($result as $resul)
                        <td data-th="Product">
{{--                            <div class="row">--}}
                                <div class="col-sm-8">
                                    <h4 style="padding-left: 15px" id="countas"> &nbsp {{$resul->pavadinimas}} </h4>
                                </div>
{{--                            </div>--}}
                        </td>
                        <td data-th="Price" id="lyg">{{$resul->kaina}} €</td>
                        <td data-th="Quantity" id="lyg" style="color: black">

                            <form method="POST" action="{{ Route('updatePreke',$resul->id_Tarpine) }}" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" name="minus" value="-" class="minus">
                                <label style="color: white">{{$resul->kiekis}} </label>
                                <input type="submit" name="plus" value="+" class="plus">
                            </form>
                        </td>
                        <td data-th="Subtotal" class="text-center" id="lyg">{{$resul->kiekis*$resul->kaina}} €</td>
                        <td id="lyg"> <a class="actions" onclick="return confirm('Ar tikrai norite pašalinti iš krepšelio?')"
                                href="{{route('deletePreke', $resul->id_Tarpine)}}" >
                                <button class="btn btn-sm"><i class="glyphicon glyphicon-trash" style="color: red"></i></button>
                            </a>
                        </td>

                </tr>
                @endforeach
                </tbody>
                <tfoot>

                <tr>
                    <td colspan="3" class="hidden-xs"></td>
                    @foreach($result as $resul)


                        <td class="hidden-xs text-center"><strong>{{$resul->kr_kaina}} €</strong>
                            @break
                        </td> @endforeach
                    <td>
                        <a href="{{ asset('/order') }}" class="btn btn-block" style="background-color: #D00000; color: white">Užsisakyti</a>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>




@endsection
