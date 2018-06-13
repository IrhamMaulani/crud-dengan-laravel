 <!-- The Modal -->
 <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">@yield('judulModal')</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          @yield('isiModal')
          
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          @yield('isiFooter')
        </div>
        
      </div>
    </div>
  </div>