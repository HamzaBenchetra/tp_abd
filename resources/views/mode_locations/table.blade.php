<div class="table-responsive">
    <table class="table" id="modeLocations-table">
        <thead>
            <tr>
                <th>Descmodeloc</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($modeLocations as $modeLocation)
            <tr>
                <td>{{ $modeLocation->DESCMODELOC }}</td>
                <td>
                    {!! Form::open(['route' => ['modeLocations.destroy', $modeLocation->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('modeLocations.show', [$modeLocation->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('modeLocations.edit', [$modeLocation->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
