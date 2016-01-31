@extends('admin.layouts.adminlayout')
@section('content')

        <p style="color:red">{{ $errors->first('product_name') }}</p>
        <p style="color:red">{{ $errors->first('product_price') }}</p>
        <p style="color:red">{{ $errors->first('product_qty') }}</p>
        <p style="color:red">{{ $errors->first('image') }}</p>
        {!! Form::open(['action'=>'AdminController@itemSave', 'files'=>true]) !!}
                <div class="form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
                <div class="form-group">
                Product Name
                <input type="text" name="product_name" class="form-control">
                </div>
                <div class="form-group">
                Sale Price
                <input type="text" name="product_price" class="form-control">
                </div>
                <div class="form-group">
                Real Price
                <input type="text" name="realprice" class="form-control">
                </div>
                <div class="form-group">
                Quantity
                <input type="text" name="product_qty" class="form-control">
                </div>
                <div class="form-group">
                {!! Form::label('image', 'Choose an image') !!}
                {!! Form::file('image') !!}
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