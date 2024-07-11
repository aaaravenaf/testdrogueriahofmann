<div class="modal fade" id="modalUserEdit{{ $data['id'] }}" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalLabel">Formulario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('usuario.update',$data['id']) }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">ID:</label>
                        <input type="text" class="form-control" id="id" name="id" value="{{ old('id',$data['id']) }}">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">code:</label>
                        <select class="form-control" name="code" id="code">
                            @foreach($getUsers as $getUser)
                                <option {{ old('code',$data['code']) == $getUser['code'] ? 'selected' : '' }} value="{{ $getUser['code'] }}">{{ $getUser['code'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">amount:</label>
                        <input type="text" class="form-control" id="amount" name="amount" value="{{ old('id',number_format($data['amount'],'0','','.')) }}">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">date:</label>
                        <input type="text" class="form-control" id="date" name="date" value="{{ old('id',\Carbon\Carbon::parse($data['date'])->format('d-m-Y')) }}">
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Enviar</button>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
