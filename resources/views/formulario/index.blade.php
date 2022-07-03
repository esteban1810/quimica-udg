@extends('layouts.app')

@section('content')
    @push('css'){{-- Estilos necesarios para el datatable --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/select/1.4.0/css/select.bootstrap5.min.css">
    @endpush

    


    <div class=" w-full h-[88vh] bg-background py-8">
        <div class="w-[max(80rem,90%)] rounded-3xl p-8 bg-white m-auto">
            
            <div class="flex justify-between mb-4">
                <h2>Proyectos Modulares</h2>

                <div>
                    <a class="link bg-green-700 hover:bg-green-900" href="{{route('dashboard')}}">
                        Ir a Catologo
                    </a>
                    <a class="link bg-blue-600 hover:bg-blue-900" href="{{route('formulario.create')}}">
                        Llenar formulario
                    </a>
                </div>
            </div>

            <table id="example" class="table table-striped"  style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Alumno</th>
                        <th>Código</th>
                        <th>Maestro</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

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
@endsection