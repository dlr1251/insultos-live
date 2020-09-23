<h2>Listado de insultos</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Contenido</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($insults as $insult)
            <tr>
                <td>{{ $insult->id }}</td>
                <td>{{ $insult->title }}</td>
                <td>{{ $insult->body }}</td>
                <td>
                    <button wire:click="edit({{ $insult->id }})"class="btn btn-primary">Editar</button>
                </td>
                <td>
                    <button wire:click="destroy({{ $insult->id }})"class="btn btn-danger">Eliminar</button>
                </td>
            </tr>  
        @endforeach
    </tbody>
</table>
{{ $insults->links() }}