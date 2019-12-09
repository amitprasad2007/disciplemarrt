<!doctype html>
<html class="fixed" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>{{ config('app.name', 'Laravel') }}</title>
		<!-- CSRF Token -->
	    <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="keywords" content="HTML5 Admin Template" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">
		<meta name="author" content="JSOFT.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('contents/vendor/bootstrap/css/bootstrap.css') }}" />
		<link rel="stylesheet" href="{{ asset('contents/vendor/font-awesome/css/font-awesome.css') }}" />
		<link rel="stylesheet" href="{{ asset('contents/vendor/magnific-popup/magnific-popup.css') }}" />
		<link rel="stylesheet" href="{{ asset('contents/vendor/bootstrap-datepicker/css/datepicker3.css') }}" />

        <link rel="stylesheet" href="{{ asset('contents/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css') }}" />
		<link rel="stylesheet" href="{{ asset('contents/vendor/select2/select2.css') }}" />
		<link rel="stylesheet" href="{{ asset('contents/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}" />
		<link rel="stylesheet" href="{{ asset('contents/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" />
		<link rel="stylesheet" href="{{ asset('contents/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" />
		<link rel="stylesheet" href="{{ asset('contents/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css') }}" />
		{{-- <link rel="stylesheet" href="{{ asset('contents/vendor/dropzone/css/basic.css') }}" /> --}}
		{{-- <link rel="stylesheet" href="{{ asset('contents/vendor/dropzone/css/dropzone.css') }}" /> --}}
		<link rel="stylesheet" href="{{ asset('contents/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('contents/vendor/summernote/summernote.css') }}" />
		<link rel="stylesheet" href="{{ asset('contents/vendor/summernote/summernote-bs3.css') }}" />
		<link rel="stylesheet" href="{{ asset('contents/vendor/codemirror/lib/codemirror.css') }}" />
		<link rel="stylesheet" href="{{ asset('contents/vendor/codemirror/theme/monokai.css') }}" />
        <link rel="stylesheet" href="{{ asset('contents/vendor/jquery-datatables-bs3/assets/css/datatables.css') }}" />
        
        <!--Form Validation css-->
        <link rel="stylesheet" href="{{ asset('contents/validation/css/formValidation.min.css') }}" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('contents/stylesheets/theme.css') }}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{ asset('contents/stylesheets/skins/default.css') }}" />

		<!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{ asset('contents/stylesheets/theme-custom.css') }}">

		<!-- Head Libs -->
		<script src="{{ asset('contents/vendor/modernizr/modernizr.js') }}"></script>
		</head>