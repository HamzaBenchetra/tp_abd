<!-- Marque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('MARQUE', 'Marque:') !!}
    {!! Form::text('MARQUE', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('models.index') }}" class="btn btn-default">Cancel</a>
</div>
