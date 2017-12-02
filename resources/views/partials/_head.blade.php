{{-- Here we can put all the head junk. --}}
<meta charset="utf-8">
<title>@yield('title') | JCMS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="{{ $page->meta_keywords }}">
<meta name="description" content="{{ $page->meta_description }}">

{{-- Here we will include any custom stylesheets and scripts added by the user via the page template. --}}
@include('partials._stylesheets')
@include('partials._scripts_head')
