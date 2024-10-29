<!DOCTYPE html>
<html lang="en">

@include('admin.shared.header')

<body class="sb-nav-fixed">

    @include('admin.shared.navbar')
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <div id="layoutSidenav">

        @include('admin.shared.sidenav')

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    @include('admin.shared.member.table')
                </div>
            </main>
            @include('admin.shared.footer')
        </div>
    </div>
    @include('admin.shared.script')

</body>

</html>