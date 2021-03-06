<div class="table-responsive">
    <table class="table" id="types-table">
        <thead>
            <tr>
                <th>Libtype</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($types as $type)
            <tr>
                <td>{{ $type->libtype }}</td>
                <td>
                    {!! Form::open(['route' => ['types.destroy', $type->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('types.show', [$type->numtype]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('types.edit', [$type->numtype]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
