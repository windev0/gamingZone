<style>
    /* * {
        overflow: hidden;
    } */

    .img-container {
        width: 500px;
    }

    .img-container img {
        width: 100%;
        height: 100%;
    }

    .main-container {
        display: flex;
        justify-content: space-between;
        margin-left: 10%;
    }

    .text p, .description p {
        font-size: 25px;
        color: blue;
        margin-left: 45px;
    }

    .text-container {
        width: 100px;
        display: flex;
        flex-direction: column;
    }

    .text {
        margin-top: 42px;
    }

    .text b {
        margin-top: 12px;
    }

    .description {
        margin-top: 25px;
    }
</style>

@extends('myhome.admin.admin')
@section('product-actions')
    <div style="margin-top: 10%; margin-left:12%;">
        <div class="container main-container">
            <div class="container img-container">
                @yield('img')
            </div>
            <div class="container text-container">
                <div class="d-flex text">
                    <b>Nom :</b>
                    <p>@yield('name')</p>
                </div>
                <div class="d-flex text">
                    <b>Prix : </b>
                    <p>@yield('price')</p>
                </div>
                <div class="d-flex text">
                    <b>Quantité : </b>
                    <p>@yield('quantity')</p>
                </div>
                <div class="d-flex text">
                    <b>Ajouté le : </b>
                    <p>@yield('date')</p>
                </div>
                <div class="d-flex text">
                    <b>Poularité : </b>
                    <p>@yield('popular')</p>
                </div>
            </div>
        </div>
        <div class="description" style="margin-left:5%;">
            <b>Description:</b><br>
            <p>@yield('description')</p>
        </div>
    </div>
@endsection
