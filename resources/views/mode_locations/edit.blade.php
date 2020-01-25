@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mode Location
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($modeLocation, ['route' => ['modeLocations.update', $modeLocation->id], 'method' => 'patch']) !!}

                        @include('mode_locations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection