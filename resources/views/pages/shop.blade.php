@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{ asset('css/page-style/shopStyle.css') }}">
@endsection
@section('konten')
<div class="container">
<div class="content">
      <div class="left">
        <h1>Kategory</h1>
        <p >Pizza</p>
        <p >Burger</p>
        <p >Fried Chicken</p>
        <p >French Fries</p>
        <p>Soda</p>
        </div>


    <div class="right">
    <section>
    <h2 class="section-title">Pizza</h2>
    <div class="categories">
    </div>
  </section>

  
    </div>
    </div>
    </div>  
  
    <script src="{{asset('js/shopScript.js')}}"></script>   
@endsection
  
