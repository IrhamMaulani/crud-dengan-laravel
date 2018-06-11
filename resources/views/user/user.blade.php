@extends('layouts.template_html')

@section('content')




<td><a  class="btn btn-info" href="/user/create" role="button">Add</a></td>

<table class="table">
        <thead>
            <tr>
                <th>idUser</th>
                <th>Nama User</th>
                <th>Detail</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($users as $user )
            <tr>
                    
                
                <td scope="row">{{$user -> id_user}}</td>
                <td>{{$user -> nama_user}}</td>
                <td><a  class="btn btn-info" href="/user/{{ $user ->id_user }}" role="button">Detail</a></td>
                <td><a  class="btn btn-primary" href="/user/{{ $user ->id_user }}/edit" role="button" >Update</a></td> 
                <td><form action="/user/{{ $user -> id_user }}" method="POST">
                
                
                      <!--token csrf untuk validasi--> 
                      @csrf
                
                      <!--Untuk memberitahu bahwa ini menggunakan method Delete-->
                      <input type="hidden" name="_method" value="delete">
                    <button type="submit" class="btn btn-primary" name="submit" value="delete">Delete</button>
                  </form></td> 
               
                
            </tr>
            @endforeach
        </tbody>
    </table>


 

    
@endsection

