@extends('layouts.app')
@section('turinys')

@if($cate!='null')

       <h1 id="antraste">{{$cate->pavadinimas}}</h1>
      <hr>
     {{--  @foreach($allcategories as $category)--}}

               {{--<div style = "height:200px; width: 500px; " >--}}
{{--if( cate->id ==fk_kate)--}}
                 {{--  @foreach($items as $item)
@if($category->nuotraukospav == $item->id_preke)
--}}
                       <div style = "max-width: 100%;height: auto;" >
                         {{--  <img src="{{ asset('/images') . '/' . $category->nuotraukospav . '.jpg'}}"width="1000" height="300">

                           @endif
                           @endforeach  --}} {{-- </div>--}}
                       @if($cate->id_kateg==1)

                               <img id="img2" src="{{ asset('/images/1.jpg')}}"width="1324" height="300"/><br>
                        @elseif($cate->id_kateg==2)
                           <img id = "img2" src="{{ asset('/images/2.jpg')}}"width="1324" height="300"/><br>
                           @elseif($cate->id_kateg==3)
                               <img id = "img2" src="{{ asset('/images/3.jpg')}}"width="1324" height="300"/><br>
                           @elseif($cate->id_kateg==4)
                               <img id = "img2" src="{{ asset('/images/4.jpg')}}"width="1324" height="300"/><br>
                           @elseif($cate->id_kateg==5)
                               <img id = "img2" src="{{ asset('/images/5.jpg')}}"width="1324" height="300"/><br>
                           @elseif($cate->id_kateg==6)
                               <img id = "img2" src="{{ asset('/images/6.jpg')}}"width="1324" height="300"/><br>
                           @elseif($cate->id_kateg==7)
                               <img id = "img2" src="{{ asset('/images/7.jpg')}}"width="1324" height="300"/><br>
                           @elseif($cate->id_kateg==8)
                               <img id = "img2" src="{{ asset('/images/888.jpg')}}"width="1324" height="300"/><br>
                           @elseif($cate->id_kateg==9)
                               <img id = "img2" src="{{ asset('/images/9.jpg')}}"width="1324" height="300"/><br>
                           @endif
                          {{-- <h1>{{$cate->id_kateg}}</h1>--}}
                           <br>

                       </div>
   {{--        </div>--}}

    {{--   @endforeach--}}

           <form method="POST" action="{{Route('sort', $cate->id_kateg)}}" >
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <span class="input-field">
        <label style="padding-left: 15px; color: white">Rikiuoti pagal</label>
        <select name="orderBy" id="orderBy"  class="form-control" style="width: fit-content; display:inherit">
            <option value="">naujausi viršuje</option>
            <option value="asc">pigiausi viršuje</option>
            <option value="desc">brangiausi viršuje</option>
        </select>
<button type="submit" class="btn" id="mygtukas" style="display: inherit; margin-top: 0px;">Rikiuoti</button>
    </span>
<br>
               <br>
           </form>


    @else
    <h1 id="antraste">Visos pramogos</h1>
    <hr>

        <form method="POST" action="{{Route('sort1')}}" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <span class="input-field">
        <label style="padding-left: 15px ; color: white">Rikiuoti pagal </label>
        <select name="orderBy" id="orderBy"  class="form-control" style="width: fit-content; display:inherit">
            <option value="">naujausi viršuje</option>
            <option value="asc">pigiausi viršuje</option>
            <option value="desc">brangiausi viršuje</option>
        </select>
<button type="submit" class="btn" id="green_btn" style="display: inherit; margin-top: 0px;">Rikiuoti</button>
    </span>
<br>
            <br>

        </form>

@endif
<div id="result"></div>
<script>
        var selectedItem = sessionStorage.getItem("SelectedItem");
        $('#orderBy').val(selectedItem);
sessionStorage.removeItem("SelectedItem");
        $('#orderBy').change(function () {
            var idetVal = $(this).val();
            sessionStorage.setItem("SelectedItem", idetVal);

});

</script>
    @if(count($items) === 0)
        <p>Šioje kategorijoje dar nėra pramogų.</p>
    @else
    @foreach($items as $item)
        <div>
        <div class="col-md-4">
            <div class="card item">
                <a href="{{ action('ShopController@openPreke', $item->id_preke)}}" >
                <div class="img-wrap">
                @foreach($photo as $ph)
                    @if ($item->id_preke == $ph->fk_preke)
                           <img src="{{ asset('/images') . '/' . $ph->pavadinimas . '.jpg'}}"  alt="paveiksliukas {{$ph->pavadinimas}}" >
                       @break
{{--                        @else {{'no photo'}} @break;--}}
                    @endif

                @endforeach
                </div>
                <div class="info-wrap">
                    <h4 class="title">{{$item->pavadinimas}}</h4>
                    <div class="text"> <p>{{$item->aprasymas}}</p></div>
                </div>
               {{-- <div class="info-wrap">
                    @if($item->galiuko_aukstis)
                            <div><span id="info1">Lenght:&nbsp</span>{{$item->ilgis}}cm &nbsp
                                <span id="info1">Tip&nbspheight:&nbsp</span>{{$item->galiuko_aukstis}}cm</div>
                            <div><span id="info1">Diameter:&nbsp</span>{{$item->diametras}}mm</div>

                        @else
                        <div><span id="info1">Lenght:&nbsp</span>{{$item->ilgis}}cm</div>
                        <div><span id="info1">Diameter:&nbsp</span>{{$item->diametras}}mm</div>
                    @endif
                    </div>--}} <!-- rating-wrap.// -->


                <div class="bottom-wrap">

                    <a href="{{ action('ShopController@openPreke', $item->id_preke)}}" class="btn btn-primary float-right" id="green_btn" style="margin-right: 10px;">
                        Peržiūrėti</a>
                    <div class="price h4">{{$item->kaina}} Eur
                    </div>
                </div>
                </a>
            </div>
         </div>

        </div>

    @endforeach
    @endif

@endsection
