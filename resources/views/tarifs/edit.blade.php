@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tarifs
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tarifs, ['route' => ['tarifs.update', $tarifs->id], 'method' => 'patch']) !!}

                        @include('tarifs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection