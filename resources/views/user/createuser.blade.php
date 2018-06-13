@extends('layouts.template_html')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/user" method="POST">
    <div class="form-group">
      <label for="namauser">Nama User:</label>
    <input type="text" class="form-control" name="namauser" value="{{ old('namauser') }}">
    </div>
    <div class="form-group">
      <label for="nomorteleponuser">Nomor Telepon User:</label>
      <input type="number" class="form-control"  name="nomorteleponuser" value="{{ old('namauser') }}">
    </div>

    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input"  name="jeniskelamin" value="L" >Laki-Laki
      </label>
    </div>
    <div class="form-check">
        <label class="form-check-label" for="radio2">
          <input type="radio" class="form-check-input"  name="jeniskelamin" value="P" >Perempuan
        </label>
      </div>

      <!--token csrf untuk validasi--> 
      @csrf

      <!--Untuk memberitahu bahwa ini menggunakan method PUT-->
      <input type="hidden" name="_method" value="POST">
    <button type="submit" class="btn btn-primary" name="submit" value="POST">Submit</button>
  </form>


@endsection

