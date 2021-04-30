<div class="modal fade" id="caso-asignado" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Gestionar caso asignado</h5>
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
                    <label for="" class="form-label"><b>Observaciones</b></label>
                    <textarea name="" id="" class="form-control"></textarea>
                </div>
                <div class="mb-3 col-12">
                    <label for="" class="form-label"><b>Tipo de archivo</b></label>
                    <select class="form-control " name="dep_id">
                        <option selected disabled></option>
                        {{-- @foreach ($departments as $i)
                            <option value="{{ $i->id }}" {{(isset($post['dep_id'])?($post['dep_id']==$i->id?'selected':''):'')}}>{{ $i->nombre }}</option>
                        @endforeach --}}
                    </select>
                </div>
                <div class="">
                    <input style="display: none" type="file" name="" id="file">
                    <div class="form-group files border" role="button" id="box_file">
                        <div class="row mt-5">
                            <img class="img_file mx-auto d-block" style="width: 70px;" src="{{ asset('images/icons/file.svg') }}" alt="">
                        </div>
                        <div class="row mt-1 mb-5 ">
                            <p class="text_file text-center">Ingresa aquí tu documento  .pdf .png .jpg</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row mt-2 col-12 justify-content-center">
                    <button class="btn-general btn w-80 btn_search w-50">Guaradar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#box_file").click(function() {
        $("#file").trigger('click')
    });
</script>
