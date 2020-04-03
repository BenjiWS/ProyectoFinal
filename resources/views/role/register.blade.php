<form method="POST" action="{{ route('create_role') }}">
    @csrf
  <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header text-center">
         <h4 class="modal-title w-100 font-weight-bold">Register Rol</h4>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body mx-3">
         <div class="md-form mb-5">
          <i class="fas fa-user prefix"></i>
           <input type="text"name="name" id="name" class="form-control validate">
           <label data-error="wrong" data-success="right" for="name">Your Name</label>
         </div>
  
       </div>
       <div class="modal-footer d-flex justify-content-center">
         <button type="submit"class="btn btn-unique">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
       </div>
     </div>
   </div>
  </div>
</form>