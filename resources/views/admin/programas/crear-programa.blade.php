<!-- BASIC MODAL -->
<div id="crearPrograma" class="modal fade effect-scale">
    <form method="POST" action="{{ route('guardar.programa') }}">
    @csrf
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content bd-0 tx-14">
        <div class="modal-header pd-y-20 pd-x-25">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Agrega el titulo de tu publicación</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pd-25">
          {{-- Nombre programa --}}
          <div class="col-lg-12">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Nombre del programa: <span class="tx-danger">*</span></label>
              <input class="form-control{{ $errors->has('nombrePrograma') ? ' is-invalid' : '' }}" type="text" name="nombrePrograma" value="{{ old('nombrePrograma')}}" placeholder="Ej: Licenciatura en administración de empresas" required>
              {!! $errors->first('nombrePrograma', '<strong style="color: #DC3545; list-style: none; font-size: 12px; margin: 5px 0 0;">:message</strong>') !!}
            </div>
          </div><!-- col-8 -->
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Save changes</button>
          <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div><!-- modal-dialog -->
    </form>
  </div><!-- modal -->