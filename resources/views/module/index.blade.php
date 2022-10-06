<table border="1">
    <thead>
    <tr>
        <th>Id</th><th>Nom du Module</th><th>Duree</th>
        <th>Description</th><th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($listmodules as $listmodules)
        <tr>
            <td>{{ $listmodules->id }}</td><td>{{ $listmodules->nom_module }}</td>
            <td>{{ $listmodules->duree }}</td><td>{{ $listmodules->description }}</td>
            <td>
                <button type="submit" class="btn btn-link">Supprimer</button>
                <button type="submit" class="btn btn-link">Modifier</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
