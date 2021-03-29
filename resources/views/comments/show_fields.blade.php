<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $comment->user_id }}</p>
</div>

<!-- Course Id Field -->
<div class="form-group">
    {!! Form::label('course_id', 'Course Id:') !!}
    <p>{{ $comment->course_id }}</p>
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{{ $comment->category_id }}</p>
</div>

<!-- Item Id Field -->
<div class="form-group">
    {!! Form::label('item_id', 'Item Id:') !!}
    <p>{{ $comment->item_id }}</p>
</div>

<!-- Body Field -->
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    <p>{{ $comment->body }}</p>
</div>

