<div class="table-responsive">
    <table class="table" id="etatContrats-table">
        <thead>
            <tr>
                <th>Libetatcont</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($etatContrats as $etatContrat)
            <tr>
                <td>{{ $etatContrat->libetatcont }}</td>
                <td>
                    {!! Form::open(['route' => ['etatContrats.destroy', $etatContrat->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('etatContrats.show', [$etatContrat->etatcont]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('etatContrats.edit', [$etatContrat->etatcont]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
