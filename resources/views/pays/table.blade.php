<div class="table-responsive">
    <table class="table" id="pays-table">
        <thead>
            <tr>
                <th>Nompays</th>
        <th>Nbhanitants</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pays as $pay)
            <tr>
                <td>{{ $pay->nompays }}</td>
            <td>{{ $pay->nbhanitants }}</td>
                <td>
                    {!! Form::open(['route' => ['pays.destroy', $pay->numpays], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pays.show', [$pay->numpays]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('pays.edit', [$pay->numpays]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
