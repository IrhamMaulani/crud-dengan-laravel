

@extends('layouts.template_html')

@section('content')
<table class="table">
<thead>
    <tr>
        <th>idUser</th>
        <th>Nama User</th>
        <th>Nomor Telepon</th>
        <th>Jenis Kelamin</th>
    </tr>
</thead>
<tbody>
       
    <tr>
            
        
        <td scope="row">{{$user -> id_user}}</td>
        <td>{{ $user -> nama_user}}</td>
        <td>{{$user -> nomor_telepon_user}}</td>
        <td>{{$user -> jenis_kelamin}}</td>
       
    </tr>
    
</tbody>
</table>
@endsection