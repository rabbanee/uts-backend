@extends('rumus.template')

@section('content')
  <div class="row mt-5">
    <h1 class="display-6">Hitung Volume Tabung</h1>
    <div class="col">
      <img src="img/calculator.png" class="rounded img-thumbnail">  
    </div>  
    <div class="col bg-light p-4 shadow">
      <h2 class="h5 pb-4">Masukkan Angka</h2>
      <div class="input-group input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing">Luas Alas</span>
        <input type="number" id="alas" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing">
      </div>
      <div class="input-group input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing">Tinggi</span>
        <input type="number" id="tinggi" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
      </div>
      <div class="hasil">
        <p class="lead" id="hasil">Hasil: <span>0</span></p>
      </div>
      <button class="btn btn-primary" id="hitung" data-hitung="tabung">
        Hitung
      </button>
    </div>  
  </div> 
@endsection