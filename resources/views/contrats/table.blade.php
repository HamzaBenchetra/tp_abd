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
                <td>{{ $contrat->DATECONT }}</td>
            <td>{{ $contrat->CAUTION }}</td>
            <td>{{ $contrat->KMDEP }}</td>
            <td>{{ $contrat->KMRET }}</td>
            <td>{{ $contrat->ETATCONT }}</td>
            <td>{{ $contrat->NUMCLI }}</td>
            <td>{{ $contrat->IMMAT }}</td>
            <td>{{ $contrat->MODELOC }}</td>
                <td>
                    {!! Form::open(['route' => ['contrats.destroy', $contrat->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('contrats.show', [$contrat->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('contrats.edit', [$contrat->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
