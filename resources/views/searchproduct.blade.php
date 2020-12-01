@extends('layouts.adminapp')
<?php
use Illuminate\Support\Str;
?>
@section('turinys')
    <ul class="col-md-3" style="margin-left: -10px">
        @include('productsearch')

    @if(count($preke) === 0)
        <p style="margin-left: 20px; padding-top: 10px">Rezultatų nerasta</p>
    @else
        <div class="col-lg-8 offset-lg-1" style="padding-top: 10px; margin-left: -15px">
            <table class="table table-hover table-condensed" style = "width: 800px">
                <thead>
                <tr style="border-bottom: 0px">
                    <th style="width:10%;border-bottom: 10px;color:white">Kodas</th>
                    <th style="width:10%;border-bottom: 10px;color:white">Pramoga</th>
                    <th style="width:50%;border-bottom: 10px;color:white">Aprašymas</th>
                    <th style="width:10%;border-bottom: 10px;color:white">Kategorija</th>
                    <th style="width:10%;border-bottom: 10px;color:white">Kaina</th>
                </tr>
                </thead>
                <tbody>
                @foreach($preke as $asPro)
                    <tr>
                        <td>{{ $asPro->id_preke }}</td>
                        <td><a style="color: white;text-decoration: underline" href="{{ action('ShopController@openPreke', $asPro->id_preke)}}">{{ $asPro->pavadinimas }}</a></td>
                        <td>{{ str::limit($asPro->aprasymas) }}</td>
                        @foreach($allcategory as $cat)
                            @if($cat->id_kateg === $asPro->fk_prekes_kategorija)
                                <td>{{ $cat->pavadinimas }}</td>
                            @endif
                        @endforeach

                        <td>{{ $asPro->kaina }}</td>

                        <td width="50"><a href="{{route('adminRoutes.productedit', $asPro->id_preke)}}"><button class="button" type="edit"><svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"/>
                                    <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z" clip-rule="evenodd"/>
                                    </svg></button></a></td>
                        <td width="50"><a onclick="return confirm('Ar tikrai norite pašalinti?')" href="{{route('adminRoutes.deleteProduct', $asPro->id_preke)}}"><button class="button" type="delete"><svg class="bi bi-x-square-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M2 0a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2H2zm9.854 4.854a.5.5 0 00-.708-.708L8 7.293 4.854 4.146a.5.5 0 10-.708.708L7.293 8l-3.147 3.146a.5.5 0 00.708.708L8 8.707l3.146 3.147a.5.5 0 00.708-.708L8.707 8l3.147-3.146z" clip-rule="evenodd"/>
                                    </svg></button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$preke->appends(request()->input())->links()}}
        </div>
    @endif
    </ul>
@endsection
