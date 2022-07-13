@extends('layouts.app')

@section('content')
    @push('css'){{-- Estilos necesarios para el datatable --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/select/1.4.0/css/select.bootstrap5.min.css">
    @endpush

    
    <div class=" w-full h-[88vh] bg-background py-8">
        <div class="w-[max(80rem,90%)] rounded-3xl p-8 bg-white m-auto">{{-- CARD PARA LA TABLA--}}
            
            <div class="flex justify-between mb-4">
                <h2>Proyectos Modulares</h2>

                <div>{{--OPCIONES DEL FORMULARIO--}}
                    <a class="link bg-green-700 hover:bg-green-900" href="{{route('dashboard')}}">
                        Ir a Catologo
                    </a>
                    <a class="link bg-blue-600 hover:bg-blue-900" href="{{route('modular.create')}}">
                        Llenar formulario
                    </a>
                </div>
            </div>

            <table id="example" class="table table-striped"  style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Código</th>
                        <th>PMs</th>
                        <th>Proyecto</th>
                        <th>Modalidad</th>
                        
                        <th class="w-32">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($modulares as $modular)
                    <tr>
                        <td>{{$modular->id}}</td>
                        <td>{{$modular->CodigoAlumno}}</td>
                        <td>{{$modular->PMaEvaluar}}</td>
                        <td>{{$modular->TituloTrabajo}}</td>
                        <td>{{$modular->TipoModalidad}}</td>
                        <td class="flex justify-around">
                            <a class="link bg-yellow-500 hover:bg-yellow-700" href="{{url('/modular/'.$modular->id.'/edit')}}">
                                Editar
                            </a>
                            <a class="link bg-yellow-500 hover:bg-yellow-700" href="{{url('/modular/'.$modular->id.'/show')}}">
                                Mostrar
                            </a>
                            <form action="{{ url('/modular/'.$modular->id) }}" method="post">
                                @csrf
                                <input 
                                    class="link bg-red-500 hover:bg-red-700"
                                    type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                                {{method_field('DELETE')}}
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- SCRIPTS NECESARIOS PARA DATATABLE --}}
    @push('js')
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#example').DataTable( {
                    select: true
                } );
            } );
        </script>
    @endpush
    {{-- SCRIPTS NECESARIOS PARA DATATABLE --}}

@endsection