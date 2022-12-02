<x-base>

    <x-slot:tituloHead>Mostrar Categoría</x-slot:tituloHead>
    <x-slot:tituloVisible>Mostrar los detalles de la categoría</x-slot:tituloVisible>

    <p>{{$categoria->nombre}}</p>

    <a href='{{ route('categorias.edit', $categoria) }}'>Editarla</a>

    <br/><br/>

    <a href='{{ route('categorias.index') }}'>Volver al listado</a>

</x-base>
