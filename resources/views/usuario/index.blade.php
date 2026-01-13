@extends('plantilla.app')
@section('contenido')

       <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-header"><h3 class="card-title">Bordered Table</h3></div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div>
                        <form action="{{ route('usuarios.index') }}" method="GET">
                            <div class="input-group">
                                <input type="text" name="texto" class="form-control"
                                value="{{ $texto }}" placeholder="Ingresa el texto a buscar">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="bi bi-search"></i>Buscar
                                    </button>
                                    <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Nuevo</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    @if(Session::has('mensaje'))
                        <div class="alert" role="alert">
                            {{ session::get('mensaje') }}
                        </div>
                    @endif
                    <div class="table-responsive mt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10px">Opciones</th>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Email</th>
                          <th>Rol</th>
                          <th>Activo</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($registros) <=0)
                            <tr>
                                <td colspan="6">No hay resultados</td>
                            </tr>
                        @else
                            @foreach ($registros as $registro )
                              <tr>
                                <td>
                                  <button class="btn btn-danger btn-sm"
                                  data-bs-toggle="modal"
                                  data-bs-target="#modal-toggle-{{ $registro->id }}">
                                    <i class="bi bi-trash-fill"></i>
                                  </button>
                                </td>
                                <td>{{ $registro->id }}</td>
                                <td>{{ $registro->name }}</td>
                                <td>{{ $registro->email }}</td>
                                <td>
                                    <span class="badge bg-secondary">Sin rol</span>
                                </td>
                                <td>
                                    <span class="badge {{ $registro->activo ? 'bg-success' : 'bg-danger' }}">
                                        {{ $registro->activo ? 'Activo' : 'Inactivo' }}
                                    </span>
                                </td>
                              </tr>
                              @include('usuario.delete', ['registro' => $registro])
                            @endforeach
                        @endif
                      </tbody>
                    </table>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                    {{ $registros->appends(['texto' => $texto]) }}
                  </div>
                </div>
                <!-- /.card -->
                <!-- /.card -->
              </div>
              <!-- /.col -->
                  <!-- /.card-header -->
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
@endsection
@push('scripts')
  <script>
      document.getElementById("menuSeguridad").classList.add("menu-open");
      document.getElementById("itemUsuarios").classList.add("active");
  </script>
@endpush