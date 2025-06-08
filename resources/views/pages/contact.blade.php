@extends('layouts/master')
@section('title')
Contact 
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/contact.css')}}">
@endsection
@section('konten')
    <h2>Daftar Kontak</h2>
    <div class="contact-list">
      <div class="contact-card">
        <div class="contact-name">Andi</div>
        <div class="contact-info"><span class="contact-label">Telepon:</span>0812 3456 7890</div>
        <div class="contact-info"><span class="contact-label">Email:</span>andi@email.com</div>
      </div>
      <div class="contact-card">
        <div class="contact-name">Budi</div>
        <div class="contact-info"><span class="contact-label">Telepon:</span>0898 7654 3210</div>
        <div class="contact-info"><span class="contact-label">Email:</span>budi@email.com</div>
      </div>
      <div class="contact-card">
        <div class="contact-name">Citra</div>
        <div class="contact-info"><span class="contact-label">Telepon:</span>0821 1234 5678</div>
        <div class="contact-info"><span class="contact-label">Email:</span>citra@email.com</div>
      </div>

    </div>
@endsection