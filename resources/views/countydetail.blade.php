@extends('layout')

@section('title', $city->name . ' - ' . $county->name . ' İlçe Seçim Kurulları')

@section('meta_description', $city->name . ' - ' . $county->name . ' ilçe seçim kurulu adresi, telefon numarası ve iletişim bilgileri')

@section('content')
<div class="jumbotron p-3 text-center">
	<div class="container">
		<h1><small>{{$city->name}}-{{$county->name}} İlçe Seçim Kurulları</small></h1>
		<nav class="bread" aria-label="breadcrumb">
			<ol class="breadcrumb mb-0">
				<li class="breadcrumb-item"><a href="{{url('/')}}">Ana sayfa</a></li>
				<li class="breadcrumb-item"><a href="{{route('allOffices')}}">İlçe Seçim Kurulları</a></li>
				<li class="breadcrumb-item"><a href="{{route('cityOffices', $city)}}">{{$city->name}}</a></li>
				<li class="breadcrumb-item active" aria-current="page">{{$county->name}}</li>
			</ol>
		</nav>
	</div>
</div>
<div class="container">
	<div class="row">
		@foreach($county->offices as $office)
		<div class="col-md-6">
			<div class="card border-secondary mb-3">
				<div class="card-header">{{ $office->name }}</div>
				<div class="card-body text-secondary">
					<h5 class="card-title">{{ $office->address }}</h5>
					<a href="tel:{{ $office->phone }}" class="btn btn-danger mb-1"><span class="oi oi-phone"></span> {{ $office->phone }}</a>
					<a href="https://www.google.com.tr/maps/search/{{ $office->address }}" class="btn btn-secondary mb-1" target="_blank"><span class="oi oi-map-marker"></span> Haritada Ara</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection