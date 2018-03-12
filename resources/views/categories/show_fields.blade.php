<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $category->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('Name', 'Name:') !!}
    <p>{!! $category->Name !!}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('Slug', 'Slug:') !!}
    <p>{!! $category->Slug !!}</p>
</div>

<!-- Category Field -->
<div class="form-group">
    {!! Form::label('Category', 'Category:') !!}
    <p>{!! $category->Category !!}</p>
</div>

<!-- Picture Field -->
<div class="form-group">
    {!! Form::label('Picture', 'Picture:') !!}
    <p>{!! $category->Picture !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('Description', 'Description:') !!}
    <p>{!! $category->Description !!}</p>
</div>

<!-- Parent Id Field -->
<div class="form-group">
    {!! Form::label('parent_id', 'Parent Id:') !!}
    <p>{!! $category->parent_id !!}</p>
</div>

<!--  Lft Field -->
<div class="form-group">
    {!! Form::label('_lft', ' Lft:') !!}
    <p>{!! $category->_lft !!}</p>
</div>

<!--  Rgt Field -->
<div class="form-group">
    {!! Form::label('_rgt', ' Rgt:') !!}
    <p>{!! $category->_rgt !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $category->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $category->updated_at !!}</p>
</div>

