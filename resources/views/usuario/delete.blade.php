<div id="modal-toggle-{{ $registro->id }}" 
    class="modal fade" 
    tabindex="-1" 
    role="dialog"
    aria-labelledby="exampleModalLabel"
    >
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <form action="{{ route('usuarios.destroy', $registro->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h4 class="modal-title">Eliminar Registro</h4>
                </div>
                <div class="modal-body">
                    <p>¿Desea eliminar el registro {{ $registro->name }}?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <a class="btn btn-outline-light" data-bs-dismiss="modal">Cancelar</a>
                    <button type="submit" class="btn btn-outline-light">Eliminar</button>
                </div>

            </form>
        </div>
    </div>
</div>