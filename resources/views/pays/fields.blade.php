<!-- Nompays Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NOMPAYS', 'Nompays:') !!}
    {!! Form::text('NOMPAYS', null, ['class' => 'form-control']) !!}
</div>

<!-- Nbhanitants Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NBHANITANTS', 'Nbhanitants:') !!}
    {!! Form::number('NBHANITANTS', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pays.index') }}" class="btn btn-default">Cancel</a>
</div>
