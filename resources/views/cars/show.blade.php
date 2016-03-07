@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-lg-4 col-lg-offset-4">
		<div class="form-group">

			{!! csrf_field() !!}

			<input type="text" id="search-input" class="form-control" placeholder="Search" onkeyup="up()" onkeydown="down()">
		</div>
	</div>
</div>

<div class="search-results">

</div>

<div class="container">
	@foreach($cars as $car)

			<div class="well">
				<ul>
					<li>{{$car->make}}</li>
					<li>{{$car->model}}</li>
					<li>{{$car->produced_on}}</li>
				</ul>
			</div>

	@endforeach


			{!! $cars->render() !!}
		</div>

@stop