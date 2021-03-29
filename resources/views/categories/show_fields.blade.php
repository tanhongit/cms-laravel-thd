<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $category->name }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $category->description }}</p>
</div>

<!-- View Count Field -->
<div class="form-group">
    {!! Form::label('view_count', 'View Count:') !!}
    <p>{{ $category->view_count }}</p>
</div>

