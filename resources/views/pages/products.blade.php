@extends('layout.app')

@section('title', 'products')

@section('content')

 <!-- Section Start-->
    <section>

        <h1>Our Products</h1>
        
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Molestias et nulla autem, illum earum, alias, vel error sed pariatur ex dolores obcaecati voluptatibus totam atque iste facilis voluptas labore at excepturi. 
         Quia inventore esse doloribus!</p>

        <div class="row">
            <div class="col-lg-3 mb-4">
                <img src="{{ asset('images/products/product1.png') }}" alt="Image" class="w-100 img-thumbnail">
            </div>
            <!-- .col end-->
            <div class="col-lg-3 mb-4">
                <img src="{{ asset('images/products/product2.png') }}" alt="Image" class="w-100 img-thumbnail">
            </div>
            <!-- .col end-->
            <div class="col-lg-3 mb-4">
                <img src="{{ asset('images/products/product3.png') }}" alt="Image" class="w-100 img-thumbnail">
            </div>

            <div class="col-lg-3 mb-4">
                <img src="{{ asset('images/products/product4.png') }}" alt="Image" class="w-100 img-thumbnail">
            </div>

            <div class="col-lg-3 mb-4">
                <img src="{{ asset('images/products/product5.png') }}" alt="Image" class="w-100 img-thumbnail">
            </div>

            <div class="col-lg-3 mb-4">
                <img src="{{ asset('images/products/product6.png') }}" alt="Image" class="w-100 img-thumbnail">
            </div>
        </div>

    </section>
<!-- Section end-->

@endsection