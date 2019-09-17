@extends('template')
@section('content')
    <section class="main-section">
      <div class="content">
        <h1>Ubah Kontak</h1>
        <hr>
        @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
        @endif

        @foreach($data as $datas)
        <form action="{{ route('barang.update', $datas->id) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <div class="form-group">
            <label for="nama">Kode Barang</label>
            <input type="text" class="form-control" id="usr" name="nama" value="{{ $datas->kd_barang}}">
          </div>
          <div class="form-group">
            <label for="email">Nama Barang</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ $datas->nama_barang}}">
          </div>
          <div class="form-group">
            <label for="nohp">Stok Barang</label>
            <input type="text" class="form-control" id="nohp" name="nohp" value="{{$datas->stok}}">
          </div>
          <div class="form-group">
          <label for="alamat">Harga</label>
          <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $datas->harga}}">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
          </div>
        </form>
        @endforeach
      </div>
    </section>
    @endsection
