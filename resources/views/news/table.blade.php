<table class="table table-responsive" id="news-table">
    <thead>
        <tr>
          <th>Title</th>
          <th>Body</th>
          <th>Slug</th>
          <th colspan="3">Действия</th>
        </tr>
    </thead>
    <tbody>
    @foreach($news as $news)
        <tr>
            <td>{!! $news->title !!}</td>
            <td>{!! $news->body !!}</td>
            <td>{!! $news->slug !!}</td>
            <td>
                {!! Form::open(['route' => ['news.destroy', $news->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('news.show', [$news->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('news.edit', [$news->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>