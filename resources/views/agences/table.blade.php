<div class="table-responsive">
    <table class="table" id="agences-table">
        <thead>
            <tr>
                <th>Nomag</th>
        <th>Nbremployes</th>
        <th>Numpays</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($agences as $agence)
            <tr>
                <td>{{ $agence->nomag }}</td>
            <td>{{ $agence->nbremployes }}</td>
            <td>{{ $agence->numpays }}</td>
                <td>
                    {!! Form::open(['route' => ['agences.destroy', $agence->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('agences.show', [$agence->numag]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('agences.edit', [$agence->numag]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
