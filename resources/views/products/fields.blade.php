<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Title', 'Title:') !!}
    {!! Form::text('Title', null, ['class' => 'form-control']) !!}
</div>

<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Body', 'Body:') !!}
    {!! Form::textarea('Body', null, ['class' => 'form-control', 'id' => 'ckeditor']) !!}
</div>

<!-- Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Img', 'Img:') !!}
    {!! Form::file('Img') !!}
</div>

<!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Url', 'Url:') !!}
    {!! Form::text('Url', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Slug', 'Slug:') !!}
    {!! Form::text('Slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('products.index') !!}" class="btn btn-default">Cancel</a>
</div>
