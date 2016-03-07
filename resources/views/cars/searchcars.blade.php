{!! csrf_field() !!}

<ul>

@foreach($searchCars as $car)
	<li>{{$car->make}}</li>
	<li>{{$car->model}}</li>
	<li>{{$car->produced_on}}</li>
@stop

</ul>