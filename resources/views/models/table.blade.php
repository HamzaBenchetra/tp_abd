<div class="table-responsive">
    <table class="table" id="models-table">
        <thead>
            <tr>
                <th>Marque</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($models as $model)
            <tr>
                <td>{{ $model->MARQUE }}</td>
                <td>
                    {!! Form::open(['route' => ['models.destroy', $model->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('models.show', [$model->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('models.edit', [$model->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
