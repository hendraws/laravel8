@extends('layouts.app', ['title'=>'Home Page'])
@section('title', 'Home')
@section('content')
<x-alert>
	@slot('title')
	Header Component with <strong>Strong</strong> Tag
	@endslot
	ini adalah childer

	<x-slot name="footer">
		ini adalah Footer
	</x-slot>
</x-alert>
Home
@endsection