<div class="table-responsive">
    <table class="table" id="tarifs-table">
        <thead>
            <tr>
                <th>Kmforfait</th>
        <th>Modeloc</th>
        <th>Coutbase</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tarifs as $tarifs)
            <tr>
                <td>{{ $tarifs->KMFORFAIT }}</td>
            <td>{{ $tarifs->MODELOC }}</td>
            <td>{{ $tarifs->COUTBASE }}</td>
                <td>
                    {!! Form::open(['route' => ['tarifs.destroy', $tarifs->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tarifs.show', [$tarifs->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tarifs.edit', [$tarifs->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
