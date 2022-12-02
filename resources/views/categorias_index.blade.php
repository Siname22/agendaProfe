<x-base>

    <x-slot:tituloHead>Categorías</x-slot:tituloHead>
    <x-slot:tituloVisible>Listado de categorías</x-slot:tituloVisible>

    <table>

    <tr>
        <th>Categoría</th>
        <th>Eliminar</th>
    </tr>

    @foreach ($categorias as $categoria)
        <tr>
            <td>
                <a href='{{ route('categorias.show', $categoria) }}'>{{ $categoria->nombre }}</a>
            </td>
            <td>
                <form action='{{ route('categorias.destroy', $categoria) }}' method='post'>
                    @method('delete')
                    @csrf

                    <button type='submit'>(X)</button>
                </form>
            </td>
        </tr>
    @endforeach

    </table><br><br>

    <button><a href='{{ route('categorias.create') }}'>Crear</a></button><br><br>

    <a href='{{ route('personas.index') }}'>Listado de Personas</a>

</x-base>
