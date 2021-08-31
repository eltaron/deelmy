<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Deelmy</title>
	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin') }}/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin') }}/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin') }}/vendors/images/favicon-16x16.png">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/vendors/styles/icon-font.min.css">
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/src/plugins/datatables/css/dataTables.bootstrap4.min.css"> --}}
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/src/plugins/datatables/css/responsive.bootstrap4.min.css"> --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/vendors/styles/style.css">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/src/plugins/cropperjs/dist/cropper.css"> --}}
	<style>
		.dropdown-toggle-none::after {
			content: "" !important;
		}
        @media (max-width: 767px){
            .header {
                position: relative;
            }
            .main-container {padding-top: 20px}
        }
	</style>
    @if(lang() == "ar")
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/vendors/styles/rtl.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kufam:wght@500&display=swap" rel="stylesheet">
    <style>
    body{font-family: Kufam !important;}
    h1, h2, h3, h4, h5, h6 {font-family: Kufam !important;}
    </style>
    @endif
@stack('styles')
</head>
