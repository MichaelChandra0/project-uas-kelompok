@extends('layouts.master')
@section('title')
Dashboard
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/page-style/dashboard.css')}}">
@endsection
@section('konten')
  <section class="hero">
    <div class="left">
      <h1>Menu Terbaru</h1>
      <p>Nikmati menu terbaru kami: burger lezat, pizza melimpah, kentang renyah, dan soda segar untuk kepuasan maksimal Anda! </p>
      @if(Auth::user())
      <button><a href="/catalog">Lihat sekarang</a></button>
      @else
      <button><a href="/login">Lihat sekarang</a></button>
      @endif

    </div>
  

    <div class="right">
      <img src="{{asset('images/judul2.png')}}" alt="">
    </div>
  </section>
  <h2 class="section-title">Sedang Promo</h2>
  
  <section class="promos">
    @foreach($sedang_promo_random as $item)
    <div class="box"><marquee behavior="" direction="">{{ $item->nama}}<br><strong>30% Off</strong><br></marquee></div>
    @endforeach
  </section>
  <section>
    <h2 class="section-title">Paling Hits</h2>
    <div class="new-arrivals">
      @foreach($terbaru as $item)
      <div class="box">
        <img src="{{ asset('storage/' . $item->gambar) }}" alt=""><br>
        {{$item->kategori}}<br>
        <strike>Rp. {{number_format($item->harga,0,',','.')}}</strike> Rp. {{ number_format($item->harga - ($item->harga * 0.20), 0, ',', '.') }}
      </div>
      @endforeach
    </div>
  </section>
  <section>
    <h2 class="section-title">Menu Kami</h2>
    <div class="categories">
      @forelse($menu_kami as $menu)
      <div class="box"><img src="{{ asset('storage/'. $menu->gambar) }}" alt=""><br><br>Rp. {{ number_format($menu->harga, 0, ',', '.') }}</div>
      @empty
      <p>tidak ada data</p>
      @endforelse

    </div>
  </section>


@endsection