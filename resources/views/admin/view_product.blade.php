@extends('admin.layouts.adminlayout')
@section('content')
        <p style="color:red;"><?php echo Session::get('message'); ?></p>
        <a href="<?php echo 'item-form'; ?>">Add New Record</a>
        <table class="table table-bordered table-hover">
        	<thead>
        		<th>ProductId</th>
        		<th>Product Name</th>
				<th>Real Price</th>
        		<th>Product Price</th>
        		<th>Quantity</th>
                        <th>Picture</th>
        		<th>Action</th>
        	</thead>
        	<tbody>
        		@foreach($data as $value)
        		<tr>
        			<td>{{$value->id}}</td>
        			<td>{{$value->name}}</td>
					<td>{{$value->real_price}}</td>
        			<td>{{$value->sale_price}}</td>
        			<td>{{$value->quantity}}</td>
                                <td><img width="30px" src="{!! '/public/images/'.$value->image !!}"></td>
        			<td>
        				<a href="EditProduct/{{$value->id}}">Edit </a> |
        				<a href="DeleteProduct/{{$value->id}}">Delete </a> |
						<a href="DetailProduct/{{$value->id}}">Put Detail </a>
        			</td>
        		</tr>
        		@endforeach
                        <tr><td clospan="4" aligh="center"><?php echo $data->render(); ?></td></tr>
        	</tbody>
        </table>
      
@endsection