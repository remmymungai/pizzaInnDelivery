@extends('layouts.adminApp')
 @section('content')

  <div class="container">
 	<div class="row">
 		<div class="col-md-10">
 			<div class="heading_box">
 				<h1 class="heading">incoming orders</h1>
 			</div>
 			<table class="pizza_table" style="margin-top: 0">
 				<thead class="pizza_table-head">
 					<tr class="pizza_table-row">
 						<th>Order ID</th>
 						<th>Meal Type</th>
 						<th>Name</th>
 						<th>Quantity</th>
 						<td>Status</td>
 					</tr>
 				</thead>
 				<tbody class="pizza_table-body">
 					@foreach ($orders as $key =>$order)
 					<tr class="pizza_table-row">
 						<td style="" class="order_id pizza_table-data">1</td>
 						<td class="pizza_table-data">{{$order->meal_type}}</td>
                         <td class="pizza_table-data">{{$order->Food_Name}}</td>
                         <td class="pizza_table-data">{{$order->quantity}}</td>

  						<a type="hidden" name="status" value=""></a>
 							@if($order->stat == 1)
 								<td><a type="button" class="btn btn_modify" value="Complete" href="{{ url('complete', ['id' => $key+1]) }}">Complete</a></td>
 							@elseif($order->stat == 0)
 								<td><a type="button" class="btn btn_modify" value="Accept" href="{{ url('start', ['id' => $key+1]) }}">Accept</a></td>
 							@else
 								<td><p>Done</p></td>
                             @endif 
                     @endforeach
 					</tr>

  				</tbody>
 			</table>
 		</div>
 	</div>
 </div>

  @endsection