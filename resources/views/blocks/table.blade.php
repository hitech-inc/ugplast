<table class="table table-responsive" id="blocks-table">
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
    @foreach($blocks as $blocks)
        <tr>
            <td>{!! $blocks->title !!}</td>
            <td>{!! $blocks->body !!}</td>
            <td>{!! $blocks->img !!}</td>
            <td>{!! $blocks->url !!}</td>
            <td>
                {!! Form::open(['route' => ['blocks.destroy', $blocks->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('blocks.show', [$blocks->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('blocks.edit', [$blocks->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Вы уверены?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>