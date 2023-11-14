<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="{{ asset('uploads/favicon.png') }}">

    <title>@yield('page-title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
    @include('admin.layout.style')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">

            <div class="navbar-bg"></div>

            @include('admin.layout.header')

            <div class="main-sidebar">

                @include('admin.layout.sidebar')

            </div>

            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>@yield('title')</h1>
                    </div>
                    @yield('content')
                </section>
            </div>

        </div>
    </div>

    @include('admin.layout.script')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                iziToast.error({
                    title: 'error',
                    position: 'topRight',
                    message: '{{ $error }}',
                });
            </script>
        @endforeach
    @endif

    @if (session()->get('error'))
        <script>
            iziToast.error({
                title: 'error',
                position: 'topRight',
                message: '{{ session()->get('error') }}',
            });
        </script>
    @endif

    @if (session()->get('success'))
        <script>
            iziToast.success({
                title: 'success',
                position: 'topRight',
                message: '{{ session()->get('success') }}',
            });
        </script>
    @endif

</body>

</html>
