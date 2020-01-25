<!-- Nomag Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NOMAG', 'Nomag:') !!}
    {!! Form::text('NOMAG', null, ['class' => 'form-control']) !!}
</div>

<!-- Nbremployes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NBREMPLOYES', 'Nbremployes:') !!}
    {!! Form::number('NBREMPLOYES', null, ['class' => 'form-control']) !!}
</div>

<!-- Numpays Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NUMPAYS', 'Numpays:') !!}
    {!! Form::number('NUMPAYS', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('agences.index') }}" class="btn btn-default">Cancel</a>
</div>
