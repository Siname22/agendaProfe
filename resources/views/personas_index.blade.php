<x-base>

    <x-slot:tituloHead>Personas</x-slot:tituloHead>
    <x-slot:tituloVisible>Listado de personas</x-slot:tituloVisible>

    <table>

    <tr>
        <th>Persona</th>
        <th>Eliminar</th>
    </tr>

    @foreach ($personas as $persona)
        <tr>
            <td>
                <a href='{{ route('personas.show', $persona) }}'>{{ $persona->nombre }} {{ $persona->apellidos }}</a>
            </td>
            <td>
                <form action='{{ route('personas.destroy', $persona) }}' method='post'>
                    @method('delete')
                    @csrf

                    <button type='submit'>(X)</button>
                </form>
            </td>
        </tr>
    @endforeach

    </table><br><br>

    <button><a href='{{ route('personas.create') }}'>Crear</a></button><br><br>

    <a href='{{ route('categorias.index') }}'>Listado de Categorías</a>

</x-base>
