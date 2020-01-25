<!-- Couleur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('COULEUR', 'Couleur:') !!}
    {!! Form::text('COULEUR', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AGE', 'Age:') !!}
    {!! Form::number('AGE', null, ['class' => 'form-control']) !!}
</div>

<!-- Nummod Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NUMMOD', 'Nummod:') !!}
    {!! Form::number('NUMMOD', null, ['class' => 'form-control']) !!}
</div>

<!-- Numag Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NUMAG', 'Numag:') !!}
    {!! Form::number('NUMAG', null, ['class' => 'form-control']) !!}
</div>

<!-- Numtype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NUMTYPE', 'Numtype:') !!}
    {!! Form::number('NUMTYPE', null, ['class' => 'form-control']) !!}
</div>

<!-- Numcat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NUMCAT', 'Numcat:') !!}
    {!! Form::number('NUMCAT', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('vehicules.index') }}" class="btn btn-default">Cancel</a>
</div>
