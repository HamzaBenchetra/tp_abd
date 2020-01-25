<div class="table-responsive">
    <table class="table" id="contrats-table">
        <thead>
            <tr>
                <th>Datecont</th>
        <th>Caution</th>
        <th>Kmdep</th>
        <th>Kmret</th>
        <th>Etatcont</th>
        <th>Numcli</th>
        <th>Immat</th>
        <th>Modeloc</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($contrats as $contrat)
            <tr>
                <td>{{ $contrat->datecont }}</td>
            <td>{{ $contrat->caution }}</td>
            <td>{{ $contrat->kmdep }}</td>
            <td>{{ $contrat->kmret }}</td>
            <td>{{ $contrat->etatcont }}</td>
            <td>{{ $contrat->numcli }}</td>
            <td>{{ $contrat->immat }}</td>
            <td>{{ $contrat->modeloc }}</td>
                <td>
                    {!! Form::open(['route' => ['contrats.destroy', $contrat->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('contrats.show', [$contrat->numcontr]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('contrats.edit', [$contrat->numcontr]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
