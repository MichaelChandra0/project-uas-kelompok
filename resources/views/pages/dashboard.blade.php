@extends('layouts.master')
@section('title')
Dashboard
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
@section('konten')
  <section class="hero">
    <div class="left">
      <h1>New Car Parts</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eius.</p>
      <button><a href="/login">Shopping Now</a></button>

    </div>
  

    <div class="right">
      <img src="{{asset('images/judul2.png')}}" alt="">
    </div>
  </section>

  <section>
    <h2 class="section-title">Popular Categories</h2>
    <div class="categories">

        <div class="box">Parts Box<br>(20 items)</div>
        <div class="box">Parts Box<br>(20 items)</div>
        <div class="box">Parts Box<br>(20 items)</div>
        <div class="box">Parts Box<br>(20 items)</div>
        <div class="box">Parts Box<br>(20 items)</div>
      <div class="box">Parts Box<br>(20 items)</div>
      <div class="box">Parts Box<br>(20 items)</div>
      <div class="box">Parts Box<br>(20 items)</div>
  

    </div>
  </section>

  <section class="promos">
    <div class="box">Car Wheel<br><strong>30% Off</strong><br><button>Shop Now</button></div>
    <div class="box">Car Valls<br><strong>40% Off</strong><br><button>Shop Now</button></div>
    <div class="box">Car Valls<br><strong>50% Off</strong><br><button>Shop Now</button></div>
  </section>

  <section>
    <h2 class="section-title">New Arrivals</h2>
    <div class="new-arrivals">
      <div class="box">
        New Balance Fresh Foam<br>
        Kaymin Car Parts<br>
        <strike>$39.12</strike> $25.12
      </div>
      <div class="box">
        New Balance Fresh Foam<br>
        Kaymin Car Parts<br>
        <strike>$39.12</strike> $25.12
      </div>
      <div class="box">
        New Balance Fresh Foam<br>
        Kaymin Car Parts<br>
        <strike>$39.12</strike> $25.12
      </div>
      <div class="box">
        New Balance Fresh Foam<br>
        Kaymin Car Parts<br>
        <strike>$39.12</strike> $25.12
      </div>
    </div>
  </section>
@endsection