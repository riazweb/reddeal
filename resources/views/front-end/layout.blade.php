@extends('front-end.layouts.main')
@section('content')
    <div class="row"><br/>
    @foreach($item as $items)
    <div class="alldeals col-md-4 col-sm-6 col-xs-12">
        <div class="deals" id="deal-156">
            <a href="/detail-page/{{ $items->id }}">
                <div class="image">
                    <div class="wintersale-badge">ON SALE</div>
                    <img src="/public/imgage/loading.png" data-src="/public/images/{{$items->image}}" alt="Pack of 3 Branded Replica Polo Shirts"/>
                </div>
                <h3>{{$items->name}}</h3>
                <div class="meta">
                    <ul>
                        <li><span class="block"><i class="fa fa-clock-o"></i>
					<span id="countdown-156" time="January 31, 2016 23:59:59"></span>
				</span>
                        </li><li><span class="block old-price">Rs. {{$items->real_price}}/-</span><span class="block price">Rs. {{$items->sale_price}}/-</span></li>
                    </ul>
                </div>
            </a>
            <div class="buy">
                <a class="btn btn-primary btn-block btn-lg" href="pack-of-3-branded-replica-polo-shirts/">Buy Now</a>
            </div>
        </div>
    </div>
    @endforeach
    </div>
    <?= $item->render(); ?>
@endsection
