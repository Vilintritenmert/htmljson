@include('layouts.header')
@include('layouts.main-header')
@include('layouts.main-sidebar')

<div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <div class="col-sm-12">
                @yield('content')
            </div>
        </section>
    </div>
    @include('layouts.main-footer')
</div>

@include('layouts.footer')


