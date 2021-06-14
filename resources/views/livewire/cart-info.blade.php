<div>
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart theme1">
        <div class="inner">
            <div class="head d-flex flex-wrap justify-content-between">
            <span class="title">Cart</span>
            <button class="offcanvas-close">×</button>
            </div>
            <ul class="minicart-product-list">
                @foreach($cart->items as $item)
                    <li>
                        <a href="{{route('product', $item['id'])}}" class="image"
                        ><img src="{{asset('uploads/product/'.$item['image'])}}" alt="Cart product Image"
                        /></a>
                        <div class="content">
                        <a href="{{ route('product', ['id'=>$item['id']]) }}" class="title"
                            >{{ $item['name'] }}</a
                        >
                        <span class="quantity-price"
                            >{{$item['size'].' x '.$item['quantity']}} x <span class="amount">{{$item['price']}} $</span></span
                        >
                        <a href="{{route('delete-cart', $item['id'])}}" class="remove">×</a>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="sub-total d-flex flex-wrap justify-content-between">
            <strong>Subtotal :</strong>
            <span class="amount">${{ $cart->total_price() }}.00</span>
            </div>
            <a
            href="{{ Route('cart') }}"
            class="btn btn-secondary btn--lg d-block d-sm-inline-block mr-sm-2"
            >view cart</a
            >
            <a
            href="{{ Route('checkout') }}"
            class="btn btn-dark btn--lg d-block d-sm-inline-block mt-4 mt-sm-0" {{ ($cart->total_quantity()) ? '':`style="pointer-events: none"` }}
            >checkout</a
            >
            <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
        </div>
    </div>
</div>
