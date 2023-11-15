<!DOCTYPE html>
<html lang="es">
@include('backoffice.partials.head')

<body class="d-flex flex-column min-vh-100">

    @include('backoffice.partials.nav')

    <main class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                @section('breadcrumb')
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                @show
            </ol>
        </nav>
        

        <div class="row">
            <div class="col-md-12 mb-3">
                <h1>@yield('title')</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
    </main>

    @include('backoffice.partials.footer')

</body>
</html>
