<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Title', 'Title:') !!}
    {!! Form::text('Title', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Slug', 'Slug:') !!}
    {!! Form::text('Slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Body', 'Body:') !!}
    {!! Form::textarea('Body', null, ['class' => 'form-control', 'id' => 'ckeditor']) !!}
</div>

<!-- Img Field -->
<div class="form-group col-sm-3">
    {!! Form::label('Img', 'Img:') !!}
    {!! Form::file('Img') !!}
</div>

<!-- Diametr_mm Field -->
<div class="form-group col-sm-2">
    {!! Form::label('diametr_mm', 'Diametr_mm:') !!}
    {!! Form::text('diametr_mm', null, ['class' => 'form-control']) !!}
</div>

<!-- Mm Field -->
<div class="form-group col-sm-2">
    {!! Form::label('mm', 'Mm:') !!}
    {!! Form::text('mm', null, ['class' => 'form-control']) !!}
</div>

<!-- Kg Field -->
<div class="form-group col-sm-2">
    {!! Form::label('kg', 'Kg:') !!}
    {!! Form::text('kg', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-2">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Url', 'Url:') !!}
    {!! Form::text('Url', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('products.index') !!}" class="btn btn-default">Cancel</a>
</div>
