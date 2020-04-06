<div class="modal fade" id="ajaxRol" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading">Assign Rol</h4>
            </div>
            <div class="modal-body">
                <form id="registerForm" name="registerForm" class="form-horizontal form-validate-jquery"">
                    <input type="hidden" name="id" id="id">
                   <input type="hidden" name="idUser" id="idUser" value=""> 
                   <div class="form-group">
                    <label>Rol</label>
                     <select class="form-control select" name="rol" id="rol" roldata-fouc>
                       @foreach ($roles as $rol)
                       <option value="{{$rol-> id}}">{{$rol-> name}}</option>
                       @endforeach
                     </select>
                  </div>
                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                     </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>