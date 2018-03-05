@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Blocks
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($blocks, ['route' => ['blocks.update', $blocks->id], 'method' => 'patch']) !!}

                        @include('blocks.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection