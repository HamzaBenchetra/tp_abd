<!-- Kmforfait Field -->
<div class="form-group col-sm-6">
    {!! Form::label('KMFORFAIT', 'Kmforfait:') !!}
    {!! Form::number('KMFORFAIT', null, ['class' => 'form-control']) !!}
</div>

<!-- Modeloc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('MODELOC', 'Modeloc:') !!}
    {!! Form::number('MODELOC', null, ['class' => 'form-control']) !!}
</div>

<!-- Coutbase Field -->
<div class="form-group col-sm-6">
    {!! Form::label('COUTBASE', 'Coutbase:') !!}
    {!! Form::number('COUTBASE', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tarifs.index') }}" class="btn btn-default">Cancel</a>
</div>
