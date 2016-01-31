@extends('admin.layouts.adminlayout')
@section('content')

        <p style="color:red">{{ $errors->first('product_name') }}</p>
        <p style="color:red">{{ $errors->first('product_price') }}</p>
        <p style="color:red">{{ $errors->first('product_qty') }}</p>
        <p style="color:red">{{ $errors->first('image') }}</p>
        {!! Form::open(['action'=>'AdminController@itemUpdate', 'files'=>true]) !!}
        <div class="form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="<?= $row->id; ?>">
        </div>
        <div class="form-group">
                Product Name
                <input type="text" name="product_name" value="<?= $row->name; ?>" class="form-control">
        </div>
        <div class="form-group">
                Price
                <input type="text" name="product_price" value="<?= $row->sale_price; ?>" class="form-control">
        </div>
        <div class="form-group">
                Quantity
                <input type="text" name="product_qty" value="<?= $row->quantity; ?>" class="form-control">
        </div>
        <div class="form-group">
                {!! Form::label('image', 'Choose an image') !!}
                <input type="file" name="image">
                <input type="hidden" name="image_name" value="<?= $row->image; ?>">
                <img width="30px" src="{!! '/public/images/'.$row->image !!}">
        </div>
        <div class="form-group">
                <input type="submit" value="Record Save" class="btn btn-primary">
        </div>
        {!! Form::close() !!}
        <div class="alert-warning">
                @foreach( $errors->all() as $error )
                        <br> {{ $error }}
                @endforeach
        </div>

@endsection