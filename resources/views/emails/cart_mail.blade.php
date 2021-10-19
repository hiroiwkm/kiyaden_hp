        <p>購入商品は</p>
        <table>
        @foreach ($cart as $c)
            <td>{{ $c->name }}</td>
            <td>{{ $c->price }}</td>
            <td>{{ $c->qty }}</td>
        @endforeach
        </table>
        <p>{{ $price_total }}</p>
        <p>{{ $name }}様</p>
        </br>
        <p>ありがとうございました</p>