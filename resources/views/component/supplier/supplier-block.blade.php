<div class="pst-block">
    <br>
    <div class="pst-block-head">
        <h2 class="title-4"><strong>Resource</strong></h2>
    </div>
    <div class="pst-block-main">
        <div class="cart-products">
            <div class="mini-cart">
                <ul class="product-list-widget">
                    <li class="mini-cart-item">
                        <a href="#" class="remove"><i
                                    class="remove-ic-1"></i></a>
                        <figure class="product-img">
                            <a href="#"><img
                                        src="{{"/images/supplier/". $supplier -> avatar}}"
                                        height="58" width="75"
                                        alt="Spectr News Theme"></a>
                        </figure>
                        <div class="product-title"><a
                                    href="#"><strong>{{$supplier -> name}}</strong></a>
                        </div>
                        <div class="product-price">{{$supplier ->url}}</div>
                    </li>
                </ul>
                <div class="total">{{$supplier ->description}}</div>
                {{--<div class="buttons">--}}
                {{--<a href="#" class="btn-5"><i--}}
                {{--class="cart-ic-light"></i> Subscribe</a>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
</div>