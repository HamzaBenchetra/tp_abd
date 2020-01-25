<!-- Datecont Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DATECONT', 'Datecont:') !!}
    {!! Form::date('DATECONT', null, ['class' => 'form-control','id'=>'DATECONT']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#DATECONT').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Caution Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CAUTION', 'Caution:') !!}
    {!! Form::number('CAUTION', null, ['class' => 'form-control']) !!}
</div>

<!-- Kmdep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('KMDEP', 'Kmdep:') !!}
    {!! Form::number('KMDEP', null, ['class' => 'form-control']) !!}
</div>

<!-- Kmret Field -->
<div class="form-group col-sm-6">
    {!! Form::label('KMRET', 'Kmret:') !!}
    {!! Form::number('KMRET', null, ['class' => 'form-control']) !!}
</div>

<!-- Etatcont Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ETATCONT', 'Etatcont:') !!}
    {!! Form::number('ETATCONT', null, ['class' => 'form-control']) !!}
</div>

<!-- Numcli Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NUMCLI', 'Numcli:') !!}
    {!! Form::number('NUMCLI', null, ['class' => 'form-control']) !!}
</div>

<!-- Immat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('IMMAT', 'Immat:') !!}
    {!! Form::number('IMMAT', null, ['class' => 'form-control']) !!}
</div>

<!-- Modeloc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('MODELOC', 'Modeloc:') !!}
    {!! Form::number('MODELOC', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('contrats.index') }}" class="btn btn-default">Cancel</a>
</div>
