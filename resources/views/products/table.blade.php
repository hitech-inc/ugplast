<table class="table table-responsive" id="products-table">
    <thead>
        <tr>
          <th>Title</th>
          <th>Body</th>
          <th>Category_id</th>
          <th>Diametr_mm</th>
          <th>Mm</th>
          <th>Kg</th>
          <th colspan="3">Действия</th>
        </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{!! $product->Title !!}</td>
            <td>{!! $product->Body !!}</td>
            <td>{!! $product->category_id !!}</td>
            <td>{!! $product->diametr_mm !!}</td>
            <td>{!! $product->mm !!}</td>
            <td>{!! $product->kg !!}</td>
            <!-- <td>{!! $product->Img !!}</td> -->
            <!-- <td>{!! $product->Url !!}</td>
            <td>{!! $product->Slug !!}</td> -->
            <td>
                {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('products.show', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('products.edit', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>