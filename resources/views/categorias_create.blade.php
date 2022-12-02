<x-base>

    <x-slot:tituloHead>Crear Categoría</x-slot:tituloHead>
    <x-slot:tituloVisible>Crea una categoría</x-slot:tituloVisible>

    <form action='{{ route('categorias.store') }}' method='post'>
        @method('post')
        @csrf

        <label for='nombre'>Nombre</label>
        <input id='nombre' name='nombre' type='text' value=''>
        <br/><br/>

        <button type='submit'>Crear</button>
    </form><br/>

    <a href='{{ route('categorias.index') }}'>Volver al listado</a>

</x-base>
