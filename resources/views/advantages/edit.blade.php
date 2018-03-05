@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Advantages
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($advantages, ['route' => ['advantages.update', $advantages->id], 'method' => 'patch']) !!}

                        @include('advantages.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection