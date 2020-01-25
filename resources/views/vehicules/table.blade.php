<div class="table-responsive">
    <table class="table" id="vehicules-table">
        <thead>
            <tr>
                <th>Couleur</th>
        <th>Age</th>
        <th>Nummod</th>
        <th>Numag</th>
        <th>Numtype</th>
        <th>Numcat</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($vehicules as $vehicule)
            <tr>
                <td>{{ $vehicule->COULEUR }}</td>
            <td>{{ $vehicule->AGE }}</td>
            <td>{{ $vehicule->NUMMOD }}</td>
            <td>{{ $vehicule->NUMAG }}</td>
            <td>{{ $vehicule->NUMTYPE }}</td>
            <td>{{ $vehicule->NUMCAT }}</td>
                <td>
                    {!! Form::open(['route' => ['vehicules.destroy', $vehicule->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('vehicules.show', [$vehicule->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('vehicules.edit', [$vehicule->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
