<table class="data-table cart-table" id="shopping-cart-table">
    <caption>ORDER DETAILS</caption>
    <colgroup>
        <col width="1">
        <col>
        <col width="1">
        <col width="1">
        <col width="1">
        <col width="1">
        <col width="1">
    </colgroup>
    <thead>
        <tr class="first last">
            <th rowspan="1">&nbsp;</th>
            <th rowspan="1"><span class="nobr">Products</span></th>
            <th colspan="1" class="a-center"><span class="nobr">Price</span></th>
            <th class="a-center" rowspan="1">QTY</th>
            <th colspan="1" class="a-center">Subtotal</th>
            <th class="a-center" rowspan="1">&nbsp;</th>
        </tr>
    </thead>
    <tbody id="cartContent">
    @foreach(Cart::content() as $key => $item)
        <tr class="first odd cartItem">
            <td>
                <h2 class="product-name"> <a href="{{ asset($item['image']) }}">{{ $item['name'] }}</a> </h2>
            </td>
            <td class="a-right"><span class="cart-price"> <span class="price">${{ $item['price'] }}.00</span> </span>
            </td>
            <td class="a-center movewishlist">
                <span>{{ $item['qty'] }}</span>
            </td>
            <td class="a-right movewishlist"><span class="cart-price"> <span class="price total">${{ number_format($item['price'] * $item['qty']) }}</span> </span>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>


