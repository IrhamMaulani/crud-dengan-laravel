@extends('layouts.template_html')



@section('content')
@extends('layouts.template_modal')

<div  class="alert alert-success" id="sukses" style="display:none" >
  
</div>


<script>
  $(".alert").alert();
</script>


 <button type="button" class="btn btn-primary" id="btn-add" data-toggle="modal" data-target="#myModal">
    Add
  </button>


<script src="{{ asset('js/barang.js') }}"></script>

<div class="records_content"></div>


    
@endsection

@section('judulModal','Barang')

@section('isiModal')
<div id="formBody">
<form id="isiForm" name="isiForm" class="form-horizontal"   >

    <input type="hidden" name="idBarang" id="idBarang">
    <div class="form-group">
        <label for="namaBarang">Nama Barang:</label>
      <input type="text" class="form-control" name="namaBarang" id="namaBarang"  >
      </div>
      <div class="form-group">
        <label for="jenisBarang">Jenis Barang:</label>
        <input type="text" class="form-control"  name="jenisBarang" id="jenisBarang"  >
      </div>
      <div class="form-group">
        <label for="hargaBarang">Harga Barang:</label>
        <input type="number" class="form-control"  name="hargaBarang" id="hargaBarang" >
      <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
      </div>
</form>
</div>
<div id="table-untuk-detail">
        <div class="container">        
                <table class="table">
                  <thead>
                   
                  </thead>
                  <tbody>
                  <tr>
                      <th>Nama Barang</th>
                      <td id="detailNamaBarang"></td>
                  </tr>
                  <tr>
                        <th>Jenis Barang</th>
                        <td id="detailJenisBarang"></td>
                    </tr>
                    <tr>
                            <th>Harga Barang</th>
                            <td id="detailHargaBarang"></td>
                        </tr>
                  </tbody>
                </table>
              </div>


</div>

@endsection

@section('isiFooter')
<button type="button" class="btn btn-primary" id="btn-save"  >Save </button>
<button type="button" class="btn btn-primary" id="btn-update" style="display:none" >Update </button>
@endsection