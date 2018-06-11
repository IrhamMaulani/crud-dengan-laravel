@extends('layouts.template_html')

@section('content')

<form action="/user/{{ $user -> id_user }}" method="POST">
    <div class="form-group">
      <label for="namauser">Nama User:</label>
      <input type="text" class="form-control" value="{{ $user -> nama_user }}" name="namauser">
    </div>
    <div class="form-group">
      <label for="nomorteleponuser">Nomor Telepon User:</label>
      <input type="number" class="form-control" value="{{ $user -> nomor_telepon_user}}" name="nomorteleponuser">
    </div>

    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input"  name="jeniskelamin" value="L" {{ $user->jenis_kelamin == 'L' ? 'checked' : '' }}>Laki-Laki
      </label>
    </div>
    <div class="form-check">
        <label class="form-check-label" for="radio2">
          <input type="radio" class="form-check-input"  name="jeniskelamin" value="P" {{ $user->jenis_kelamin == 'P' ? 'checked' : '' }}>Perempuan
        </label>
      </div>

      <!--token csrf untuk validasi--> 
      @csrf

      <!--Untuk memberitahu bahwa ini menggunakan method PUT-->
      <input type="hidden" name="_method" value="PUT">
    <button type="submit" class="btn btn-primary" name="submit" value="edit">Submit</button>
  </form>


@endsection

