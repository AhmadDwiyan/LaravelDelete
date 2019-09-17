@extends('template')
@section('content')
    <section class="main-section">
      <div class="content">
        <h1>Tambah Kontak</h1>
        <hr>
        @if($errors->any())
        <div class="alert alert-danger">
          @foreach($errors->all() as $error)
          <li> <strong>{{ $error }}</strong> </li>
          @endforeach
        </div>
        @endif

        <form action="{{ route('jual.store') }}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
          <label for="nama">Kode Barang</label>
            <input type="text" class="form-control" id="usr" name="nama">
          </div>
          <div class="form-group">
          <label for="nohp">Stok Barang</label>
            <input type="text" class="form-control" id="nohp" name="nohp">
          </div>
          <div class="form-group">
          <label for="alamat">Harga</label>
          <input type="text" class="form-control" id="alamat" name="alamat">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
          </div>
        </form>
      </div>
    </section>
  @endsection
