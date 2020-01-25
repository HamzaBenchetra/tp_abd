<!-- Villecli Field -->
<div class="form-group col-sm-6">
    {!! Form::label('VILLECLI', 'Villecli:') !!}
    {!! Form::text('VILLECLI', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('villes.index') }}" class="btn btn-default">Cancel</a>
</div>
