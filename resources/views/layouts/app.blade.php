<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{ $title }} | CanvasTech </title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	{{ $styles ?? null }}
</head>

<body>
	<x-navbar></x-navbar>
	{{ $slot }}
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>