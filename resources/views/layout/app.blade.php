<html>

<head>
    <title>
        @yield('title', 'Blog')
    </title>
    @include('layout.style')
</head>

<body>
    @include('layout.header')

    {{-- 網站內容 --}}
    <div>
        @yield('content')
    </div>

    @include('layout.footer')

    @include('layout.script')
</body>


</html>
