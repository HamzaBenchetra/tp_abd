@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Etat- Contrat
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($etatContrat, ['route' => ['etatContrats.update', $etatContrat->id], 'method' => 'patch']) !!}

                        @include('etat-_contrats.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection