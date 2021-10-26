
@extends('layouts.content')
@extends('layouts.main')

    @section('container')
        <h1> {{ $tittle }} </h1>
    @endsection

    @section('menu1')
        <h3 class="tm-text-primary mb-3 tm-catalog-item-title"> {{ $menu1 }} </h3>
        <p class="tm-catalog-item-text"> {{ $konten1 }} </p>
    @endsection
    @section('menu2')
        <h3 class="tm-text-primary mb-3 tm-catalog-item-title"> {{ $menu2 }} </h3>
        <p class="tm-catalog-item-text"> {{ $konten2 }} </p>
    @endsection
    @section('menu3')
        <h3 class="tm-text-primary mb-3 tm-catalog-item-title"> {{ $menu3 }} </h3>
        <p class="tm-catalog-item-text"> {{ $konten3 }} </p>
    @endsection
    @section('menu4')
        <h3 class="tm-text-primary mb-3 tm-catalog-item-title"> {{ $menu4 }} </h3>
        <p class="tm-catalog-item-text"> {{ $konten4 }} </p>
    @endsection
    @section('menu5')
        <h3 class="tm-text-primary mb-3 tm-catalog-item-title"> {{ $menu5 }} </h3>
        <p class="tm-catalog-item-text"> {{ $konten5 }} </p>
    @endsection
    @section('menu6')
        <h3 class="tm-text-primary mb-3 tm-catalog-item-title"> {{ $menu6 }} </h3>
        <p class="tm-catalog-item-text"> {{ $konten6 }} </p>
    @endsection