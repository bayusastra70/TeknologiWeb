@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">halaman anggota</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Nama : {{ $students->name }}</h5>
        <p class="card-text">alamat : {{ $students->address }}</p>
        <p class="card-text">no telp: {{ $students->mobile }}</p>
  </div>
    </hr>
  </div>
</div>