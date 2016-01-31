@extends('frontend.layouts.front-end-layout')
@section('main_content')
<div class="features_items">
<!-- {!!Html::image('theme/images/home/new.png')!!}C:\Windows\System32\drivers\etc
{!!Html::image('theme/images/home/sale.png')!!} -->
    @if(count($item))
        @foreach($item as $product)
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <!-- {!!Html::image('theme/images/home/')!!} -->
                            
                            {!! Html::image('public/images/'.$product->image) !!}
                            <h2>${{$product->sale_price}}</h2>
                            <p>{{$product->name}}</p>
                            <a href="/detail/{{ $product->id }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                        </div>
                        <div class="product-overlay">
                            <div class="overlay-content">
                                <h2>${{$product->sale_price}}</h2>
                                <p>{{$product->name}}</p>
                                {{ HTML::link('http://test.com', null, array('id' => 'linkid'))}}
                                <a href="/item-detail/{{ $product->id }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
                                <?php echo $item->render(); ?>
@endsection