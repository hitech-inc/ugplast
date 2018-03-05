<table class="table table-responsive" id="advantages-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Body</th>
        <th>Img</th>
        <th>Url</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($advantages as $advantages)
        <tr>
            <td>{!! $advantages->title !!}</td>
            <td>{!! $advantages->body !!}</td>
            <td>{!! $advantages->img !!}</td>
            <td>{!! $advantages->url !!}</td>
            <td>
                {!! Form::open(['route' => ['advantages.destroy', $advantages->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('advantages.show', [$advantages->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('advantages.edit', [$advantages->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>