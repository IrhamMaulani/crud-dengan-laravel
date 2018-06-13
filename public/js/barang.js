


// READ records
function readRecords() {
      
      $.get("barang/index", {}, function (data, status) {
            $(".records_content").html(data);
        });
        
  }


//add data
$(document).ready(function(){
     
      $("#btn-save").click(function(){
            $('#formBody').show();
            $("#btn-save").show();

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
        
      });
});
});
//untuk dapat memakai satu modal
$(document).on('click', '#btn-add', function(){
      $("#btn-save").show();
      $('#formBody').show();
      $('#table-untuk-detail').hide();
      
});

//show data


$(document).on('click', '.detailBarang', function(){
      var id = $(this).attr("id");
     $("#btn-save").hide();
  
     
$.ajax({
      method: "GET",
      url: "/barang/id",
      data: { 
            id      :    id
            
       }    
    })
      .done(function( data ) {
            $('#formBody').hide();
            $('#table-untuk-detail').show();
            console.log( data);
            console.log( data.nama_barang);
            $('#detailNamaBarang').html(data.nama_barang);
            //$('#namaBarang').html(data.nama_barang);
            $('#detailJenisBarang').html(data.jenis_barang);
            $('#detailHargaBarang').html(data.harga_barang);
            $('#myModal').modal('show');
            
        
      });
});

      
      

    


$(document).ready(function () {
      // READ recods on page load
      readRecords(); // calling function
  });


  /*
    $.ajax({
         url:"barang/show",
         method:"POST",
         data:{_token         :  $("#_token").val(), 
               employee_id:employee_id
            },
         success:function(data){
               console.log(data);
          $('#namaBarang').html(data.nama_barang);
          $('#jenisBarang').html(data.jenis_barang);
          $('#hargaBarang').html(data.harga_barang);
          $('#myModal').modal('show');
          $("#btn-save").hide();
         }
        });
  */