@extends('layouts/master')
@section('title')
Contact Us
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/page-style/contact.css')}}">
@endsection
@section('konten')
    <form method="POST">
    <h2>Contact Us</h2>
    @csrf
        <label for="nama">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap">

        <label for="hp">Nomor HP</label>
        <input type="text" id="hp" name="hp" placeholder="Masukkan nomor HP">

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Masukkan email Anda">

        <label for="area">Alamat</label>
        <input type="text" id="alamat" name="alamat" placeholder="Masukan alamat anda">

        <label for="pesan">Pesan</label>
        <textarea id="pesan" name="pesan" placeholder="Tulis pesan"></textarea>

        <button type="submit">Kirim</button>
        @if(session('berhasil'))
        <p>{{ session('berhasil') }}</p>
        @endif
    </form>
@endsection