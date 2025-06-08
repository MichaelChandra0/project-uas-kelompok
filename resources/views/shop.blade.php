@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{asset('css/shopStyle.css')}}">
@endsection
@section('konten')
<div class="content">
      <div class="left">
        <h1>Kategory</h1>
        <p class="tes">Pizza</p>
        <p>Burger</p>
        <p>Fried Chicken</p>
        <p>French fries</p>
        <p>Soda</p>
    </div>

    <div class="right">
    <section>
    <h2 class="section-title">Pizza</h2>
    <div class="categories">

    @forelse ($menus as $menu)
        <div class="box">
            <img src="{{asset('storage/' . $menu->gambar)}}" alt="">
            <p>{{ $menu->nama }}<br>{{ $menu->harga}}</p>
        
        </div>
      @empty
        <p>Data belum ada</p>
      @endforelse
      
  {{ $menus->links() }}
    </div>
  </section>

  
    </div>
    </div>
    <script src="{{asset('js/shopScript.js')}}"></script>
@endsection
