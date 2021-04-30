<div class="modal fade" id="gestion-caso" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Gestionar caso</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 col-12">
                    <label for="" class="form-label"><b>Estado</b></label>
                    <select class="form-control " name="dep_id">
                        <option selected disabled></option>
                        {{-- @foreach ($departments as $i)
                            <option value="{{ $i->id }}" {{(isset($post['dep_id'])?($post['dep_id']==$i->id?'selected':''):'')}}>{{ $i->nombre }}</option>
                        @endforeach --}}
                    </select>
                </div>
                <div class="mb-3 col-12">
                    <label for="" class="form-label"><b>Asesor asignado</b></label>
                    <select class="form-control " name="dep_id">
                        <option selected disabled></option>
                        {{-- @foreach ($departments as $i)
                            <option value="{{ $i->id }}" {{(isset($post['dep_id'])?($post['dep_id']==$i->id?'selected':''):'')}}>{{ $i->nombre }}</option>
                        @endforeach --}}
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row mt-2 col-12">
                    <button class="btn-general btn w-80 btn_search">Guaradar</button>
                </div>
            </div>
        </div>
    </div>
</div>
