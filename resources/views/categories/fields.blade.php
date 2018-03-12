<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Name', 'Name:') !!}
    {!! Form::text('Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Slug', 'Slug:') !!}
    {!! Form::text('Slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parent_id', 'Category:') !!}
    {!! Form::select('parent_id', App\Models\Category::select(), null, ['class' => 'form-control']) !!}
</div>

<!-- Picture Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Picture', 'Picture:') !!}
    {!! Form::file('Picture') !!}
</div>
<div class="clearfix"></div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Description', 'Description:') !!}
    {!! Form::textarea('Description', null, ['class' => 'form-control', 'id' => 'ckeditor']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('categories.index') !!}" class="btn btn-default">Cancel</a>
</div>
