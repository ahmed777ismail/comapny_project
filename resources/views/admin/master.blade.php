<!doctype html>
<html lang="en">


@include('admin.partials.head')


<body class="vertical  light @if (LaravelLocalization::getCurrentLocale() == 'ar') rtl @endif">
    <div class="wrapper">
        @include('admin.partials.navbar')

        @include('admin.partials.sidebar')


        <main role="main" class="main-content">
            @yield('content')

        </main> <!-- main -->

    </div> <!-- .wrapper -->

    @include('admin.partials.scripts')
    <script>
        function confirmDelete(id) {
            if (confirm('{{ __('keywords.are_you_sure_to_delete') }}')) {
                document.getElementById('deleteForm-' + id).submit();
            } else {
                return false;
            }
        }
    </script>
</body>

</html>
