<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NAME', 'Name:') !!}
    {!! Form::text('NAME', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('EMAIL', 'Email:') !!}
    {!! Form::email('EMAIL', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Verified At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('EMAIL_VERIFIED_AT', 'Email Verified At:') !!}
    {!! Form::date('EMAIL_VERIFIED_AT', null, ['class' => 'form-control','id'=>'EMAIL_VERIFIED_AT']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#EMAIL_VERIFIED_AT').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PASSWORD', 'Password:') !!}
    {!! Form::password('PASSWORD', ['class' => 'form-control']) !!}
</div>

<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('REMEMBER_TOKEN', 'Remember Token:') !!}
    {!! Form::text('REMEMBER_TOKEN', null, ['class' => 'form-control']) !!}
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CREATED_AT', 'Created At:') !!}
    {!! Form::date('CREATED_AT', null, ['class' => 'form-control','id'=>'CREATED_AT']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#CREATED_AT').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UPDATED_AT', 'Updated At:') !!}
    {!! Form::date('UPDATED_AT', null, ['class' => 'form-control','id'=>'UPDATED_AT']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#UPDATED_AT').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a>
</div>
