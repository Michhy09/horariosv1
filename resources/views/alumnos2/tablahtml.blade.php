
<br>
<hr>

    <!-- Botón agregar -->
    <a href="{{route('alumnos.create')}}" class="btn btn-outline-dark mb-3">Agregar Alumno</a>
<hr>

@if(session('mensaje'))
    <p>{{ session('mensaje') }}</p>
@endif

    <!-- Tabla de alumnos -->
    <div class="table-responsive-md">
        <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Email</th>
                    <th scope="col">Carrera</th>
                    <th scope="col">Departamento</th>
                    <th scope="col" colspan="3" class="text-center"></th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                <tr>
                    <td scope="row">{{ $alumno->id}}</td>
                    <td>{{ $alumno->nombre}}</td>
                    <td>{{ $alumno->apellidop}}</td>
                    <td>{{ $alumno->email}}</td>
                    <td>{{ $alumno->carrera->nombrecarrera}}</td>
                    <td>{{ $alumno->carrera->depto->nombredepto}}</td>

                    <td><a href="{{route('alumnos.editar',  $alumno->id)}}" class="btn btn-outline-dark btn-sm">Editar</a></td>
                    <td><a href="{{route('alumnos.ver', $alumno->id)}}" class="btn btn-outline-dark btn-sm">Eliminar</a></td>
                    <td><a href="{{route('alumnos.ver', $alumno->id)}}" class="btn btn-outline-dark btn-sm">Ver</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{$alumnos->links()}}
    </div>

    <hr>
    <ul>
        @foreach ($deptos as $depto)
            <li>{{$depto->nombredepto}}</li>
                <ul>
                    @foreach ($depto->carreras as $carrera )
                        <li>{{$carrera->nombrecarrera}}</li>
                    @endforeach
                </ul>
        @endforeach
    </ul>