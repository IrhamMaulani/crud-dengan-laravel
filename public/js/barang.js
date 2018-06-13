

// READ records
function readRecords() {
      
      $.get("barang/index", {}, function (data, status) {
            $(".records_content").html(data);
        });
        
  }


//add data
$(document).ready(function(){
     
      $("#btn-save").click(function(){


$.ajax({
      method: "POST",
      url: "/barang/post",
      data: { 
            _token         :  $("#_token").val()   , 
            namaBarang     : $("#namaBarang").val(), 
            jenisBarang    : $("#jenisBarang").val(),
            hargaBarang    : $("#hargaBarang").val()
       }    
    })
      .done(function( msg ) {
        console.log(msg);
        $('#myModal').modal('hide')
       readRecords();
        $("#sukses").show();
        $("#sukses").html(msg.success);
        $('#isiForm')[0].reset();
        
      });
});
});
//untuk dapat memakai satu modal
$(document).on('click', '#btn-add', function(){
      $("#btn-save").show();
      $('#formBody').show();
      $('#table-untuk-detail').hide();
      $('#btn-update').hide();
      $('#isiForm')[0].reset();
      
});

//show data




$(document).on('click', '.detailBarang', function(){
      var id = $(this).attr("id");
     $("#btn-save").hide();
     $("#btn-update").hide();
  
     
$.ajax({
      method: "GET",
      url: "/barang/" + id,
      data: { 
            id      :    id         
       }    
    })
      .done(function( data ) {
            $('#formBody').hide();
            $('#table-untuk-detail').show();
            $('#detailNamaBarang').html(data.nama_barang);
            //$('#namaBarang').html(data.nama_barang);
            $('#detailJenisBarang').html(data.jenis_barang);
            $('#detailHargaBarang').html(data.harga_barang);
            $('#myModal').modal('show');   
      });
});


$(document).on('click', '.editBarang', function(){
      var id = $(this).attr("id");
     $("#btn-save").show();
      $('#formBody').show();
      $('#table-untuk-detail').hide();
      $('#btn-save').hide();
      $('#btn-update').show();
  
     
$.ajax({
      method: "GET",
      url: "/barang/"+ id,
      data: { 
            id      :    id
            
       }    
    })
      .done(function( data ) {
            //$('#formBody').hide();
            //$('#table-untuk-detail').show();
            
            $('#idBarang').val(data.id);
            $('#namaBarang').val(data.nama_barang);
            $('#jenisBarang').val(data.jenis_barang);
            $('#hargaBarang').val(data.harga_barang);
            $('#myModal').modal('show');
           
            
            
        
      });
});

$(document).on('click', '#btn-update      ', function(){
      var id =  $("#idBarang").val();
      
      console.log(id);


      $.ajax({
            method: "PUT",
            url: "/barang/" + id,
            data: { 

                 
                  _token         : $("#_token").val()   , 
                  namaBarang     : $("#namaBarang").val(), 
                  jenisBarang    : $("#jenisBarang").val(),
                  hargaBarang    : $("#hargaBarang").val()
             }    
          })
            .done(function( msg ) {
              console.log(msg);
              $('#myModal').modal('hide')
             readRecords();
              $("#sukses").show();
              $("#sukses").html(msg.success);
              $('#isiForm')[0].reset();
              
            });


});

$(document).on('click', '.hapusBarang', function(){
      var id = $(this).attr("id");
      var token = $(this).data("token");
     $("#btn-save").hide();
  
     
$.ajax({
      method: "POST",
      url: "/barang/" + id,
      data: { 
            _token      :     token,
            _method     :     "delete"       
       }    
    })
      .done(function( data ) {
            readRecords();
            $("#sukses").show();
              $("#sukses").html(data.success);
            //$('#formBody').hide();
            //$('#table-untuk-detail').show();
            //$('#detailNamaBarang').html(data.nama_barang);
            //$('#namaBarang').html(data.nama_barang);
            //$('#detailJenisBarang').html(data.jenis_barang);
            //$('#detailHargaBarang').html(data.harga_barang);
            //$('#myModal').modal('show');   
      });
});
      
      

    


$(document).ready(function () {
      // READ recods on page load
      readRecords(); // calling function
  });


  