<x-base>

    <x-slot:tituloHead>Crear Persona</x-slot:tituloHead>
    <x-slot:tituloVisible>Crea una persona</x-slot:tituloVisible>

    <form action='{{ route('personas.store') }}' method='post'>
        @method('post')
        @csrf

        <label for='nombre'>Nombre</label>
        <input id='nombre' name='nombre' type='text' placeholder='Nombre'><br/>
        <label for='apellidos'>Apellidos</label>
        <input id='apellidos' name='apellidos' type='text' placeholder='Apellidos'><br/>
        <label for='telefono'>Teléfono</label>
        <input id='telefono' name='telefono' type='text' placeholder='Teléfono'><br/>
        <label for='estrella'>Estrella</label>
        <input id='estrella' name='estrella' type='text' placeholder='Estrella'><br/>
        <label for='categoria_id'>Categoría</label>
        <input id='categoria_id' name='categoria_id' type='text' placeholder='Categoría'><br/>

        <br/>

        <button type='submit'>Crear</button>
    </form><br/>

    <a href='{{ route('personas.index') }}'>Volver al listado</a>

</x-base>
