<!-- Nomcli Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NOMCLI', 'Nomcli:') !!}
    {!! Form::text('NOMCLI', null, ['class' => 'form-control']) !!}
</div>

<!-- Prenomcli Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PRENOMCLI', 'Prenomcli:') !!}
    {!! Form::text('PRENOMCLI', null, ['class' => 'form-control']) !!}
</div>

<!-- Adrcli Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ADRCLI', 'Adrcli:') !!}
    {!! Form::text('ADRCLI', null, ['class' => 'form-control']) !!}
</div>

<!-- Numpermis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NUMPERMIS', 'Numpermis:') !!}
    {!! Form::number('NUMPERMIS', null, ['class' => 'form-control']) !!}
</div>

<!-- Telcli Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TELCLI', 'Telcli:') !!}
    {!! Form::text('TELCLI', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpdi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CPDI', 'Cpdi:') !!}
    {!! Form::number('CPDI', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('clients.index') }}" class="btn btn-default">Cancel</a>
</div>
