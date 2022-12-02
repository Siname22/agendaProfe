<x-base>

    <x-slot:tituloHead>Editar Categoría</x-slot:tituloHead>
    <x-slot:tituloVisible>Edita los detalles de la categoría</x-slot:tituloVisible>

    <form action='{{ route('categorias.update', $categoria) }}' method='post'>
        @method('put')
        @csrf

        <input id='nombre' name='nombre' type='text' value='{{$categoria->nombre}}'>
        <br><br>

        <button type='submit'>Actualizar</button>
    </form><br>

    <a href='{{ route('categorias.index') }}'>Volver al listado</a>

</x-base>
