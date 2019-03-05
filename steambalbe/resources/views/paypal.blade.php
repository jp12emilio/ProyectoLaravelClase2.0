@extends('layouts.master')
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@section('content')
<div class="container fondo2">
	<div id="paypal-button" class="text-center pt-5">

			<table class="table">
				<thead>
				<tr>
					<th class="table-image"></th>
					<th>Juego</th>
					<th>Precio</th>
					<th class="column-spacer"></th>
					<th></th>
				</tr>
				</thead>

				<tbody>
				@foreach (Cart::content() as $item)
					<tr>
						<td class="table-image"><a href="{{ url('shop', [$item->id]) }}"><img src="{{ asset($item->model->image) }}" alt="product" class="img-responsive cart-image"></a></td>
						<td><a href="{{ url('shop', [$item->id]) }}">{{ $item->name }}</a></td>
						<td>€{{ $item->subtotal }}</td>
						<td class=""></td>
						<td>
							<form action="{{ url('cart', [$item->rowId]) }}" method="POST" class="side-by-side">
								{!! csrf_field() !!}
								<input type="hidden" name="_method" value="DELETE">
								<input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
							</form>
						</td>
					</tr>

				@endforeach
				<tr>
					<td class="table-image"></td>
					<td></td>
					<td class="small-caps table-bg" style="text-align: right">Precio</td>
					<td>€{{ Cart::instance('default')->subtotal() }}</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="table-image"></td>
					<td></td>
					<td class="small-caps table-bg" style="text-align: right">Tasas</td>
					<td>€{{ Cart::instance('default')->tax() }}</td>
					<td></td>
					<td></td>
				</tr>

				<tr class="border-bottom">
					<td class="table-image"></td>
					<td style="padding: 40px;"></td>
					<td class="small-caps table-bg" style="text-align: right">Precio Total</td>
					<td class="table-bg">€{{ Cart::total() }}</td>
					<td class="column-spacer"></td>
					<td></td>
				</tr>

				</tbody>
			</table>
		<script type="text/javascript">      
		  paypal.Button.render({
		    env: 'sandbox',
		    client: {
		      sandbox: 'demo_sandbox_client_id'
		    },
		    style: {
		      color: 'gold',   // 'gold, 'blue', 'silver', 'black'
		      size:  'medium', // 'medium', 'small', 'large', 'responsive'
		      shape: 'rect'    // 'rect', 'pill'
		    },
		    payment: function (data, actions) {
		      return actions.payment.create({
		        transactions: [{
		          amount: {
		            total: '0.01',
		            currency: 'USD'
		          }
		        }]
		      });
		    },
		    onAuthorize: function (data, actions) {
		      return actions.payment.execute()
		        .then(function () {
		          window.alert('¡Gracias por comprar!');
		        });
		    }
		  }, '#paypal-button');
		  </script>
		</div>
	</div>
@endsection