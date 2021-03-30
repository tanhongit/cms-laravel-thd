<div class="table-responsive">
    <table class="table" id="categories-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>View Count</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>{{ $category->view_count }}</td>
                <td>
                    {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('categories.show', [$category->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('categories.edit', [$category->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@foreach($categories as $category)
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{ $category->name }}</h5>
        <p class="card-text">{{ $category->description }}</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $category->view_count }}</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Vestibulum at eros</li>
    </ul>
    <div class="card-body">
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
    </div>
</div>
@endforeach