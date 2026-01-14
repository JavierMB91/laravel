@extends('plantilla.app')
@section('contenido')

<div class="app-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h3>Usuarios</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ isset($registro) ? route('usuarios.update', $registro->id) : route('usuarios.store') }}"
                            method="POST" id="fromRegistroUsuario">
                            @csrf
                            @if(isset($registro))
                                @method('PUT')
                            @endif
                            <div class="row">
                                <!-- input name -->
                                <div class="col-md-6 mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror"
                                    id="name"
                                    name="name"
                                    value="{{ old('name', $registro->name ?? '') }}"
                                    required>
                                @error('name')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                                </div>
                                <!-- end input name -->
                                <!-- input email -->
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email"
                                    name="email"
                                    value="{{ old('email', $registro->email ?? '') }}"
                                    required>
                                @error('email')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                                </div>
                            </div>
                                <!-- end input email -->
                            <div class="row">
                                <!-- input password -->
                                <div class="col-md-6 mb-3">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="text" class="form-control @error('password') is-invalid @enderror"
                                    id="password"
                                    name="password"
                                    value="{{ old('password') }}"
                                    @if(!isset($registro)) required @endif>
                                @error('password')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                                </div>
                                <!-- end input password -->
                                <!-- input rol -->
                                <div class="col-md-6 mb-3">
                                    <label for="activo" class="form-label">Estado</label>
                                    <select name="activo" id="activo" class="form-select" required>
                                    <option value="1"
                                    {{ old('activo', $registro->activo ?? '1') == '1' ? 'selected' : '' }}>
                                        Activo
                                    </option>
                                    <option value="0"
                                    {{ old('activo', $registro->activo ?? '1') == '0' ? 'selected' : '' }}>
                                        Inactivo
                                    </option>
                                    </select>
                                @error('activo')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                                </div>
                                <!-- end input rol -->
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-secondary me-md-2" type="button"
                                onclick="window.location.href= '{{ route('usuarios.index') }}'">
                                Cancelar
                                </button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection

@push('scripts')
  <script>
      document.getElementById("menuSeguridad").classList.add("menu-open");
      document.getElementById("itemUsuarios").classList.add("active");
  </script>
@endpush
