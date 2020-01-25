<!-- Name Field -->
<div class="form-group">
    {!! Form::label('NAME', 'Name:') !!}
    <p>{{ $users->NAME }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('EMAIL', 'Email:') !!}
    <p>{{ $users->EMAIL }}</p>
</div>

<!-- Email Verified At Field -->
<div class="form-group">
    {!! Form::label('EMAIL_VERIFIED_AT', 'Email Verified At:') !!}
    <p>{{ $users->EMAIL_VERIFIED_AT }}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('PASSWORD', 'Password:') !!}
    <p>{{ $users->PASSWORD }}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('REMEMBER_TOKEN', 'Remember Token:') !!}
    <p>{{ $users->REMEMBER_TOKEN }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('CREATED_AT', 'Created At:') !!}
    <p>{{ $users->CREATED_AT }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('UPDATED_AT', 'Updated At:') !!}
    <p>{{ $users->UPDATED_AT }}</p>
</div>

