






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
                @foreach ($barangs as $barang )
            <tr>
                    
                
                <td scope="row">{{$barang -> id}}</td>
                <td>{{$barang -> nama_barang}}</td>
                <td><a  class="btn btn-info detailBarang" href="#" role="button" id="{{ $barang -> id }}">Detail</a></td>
                <td><a  class="btn btn-primary" href="/barang/{{ $barang ->id }}/edit"  >Update</a></td> 
                <td>
                  </form></td> 
               
                
            </tr>
            @endforeach
        </tbody>
    </table>

        
    