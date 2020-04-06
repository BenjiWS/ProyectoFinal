<div class="modal fade" id="ajaxRol" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading">Assign Permission</h4>
            </div>
            <div class="modal-body">
                <form id="registerFormRol" name="registerFormRol" class="form-horizontal form-validate-jquery"">
                   <input type="hidden" name="idPR" id="idPR">
                   <div class="form-group">
                    <label>Rol</label>
                     <select class="form-control select" name="permiso" id="permiso" roldata-fouc>
                       @foreach ($roles as $rol)
                       <option value="{{$rol-> id}}">{{$rol-> name}}</option>
                       @endforeach
                     </select>
                  </div>
                   <div class="form-group">
                    <label>Permiso</label>
                      <select class="form-control select" name="rol" id="rol" roldata-fouc>
                        @foreach ($permisos as $permiso)
                        <option value="{{$permiso-> id}}">{{$permiso-> name}}</option>
                        @endforeach
                      </select>
                   </div>
                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="saveBtn1" value="create">Save changes
                     </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>