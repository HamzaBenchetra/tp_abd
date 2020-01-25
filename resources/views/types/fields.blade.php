<!-- Libtype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('LIBTYPE', 'Libtype:') !!}
    {!! Form::text('LIBTYPE', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('types.index') }}" class="btn btn-default">Cancel</a>
</div>
