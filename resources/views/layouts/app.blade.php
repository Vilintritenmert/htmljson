@include('layouts.header')
@include('layouts.main-header')
@include('layouts.main-sidebar')

<div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <div class="col-sm-12">
                <div class="flash-message">
                    @if(Session::has('message'))
                            <p class="alert alert-success">{{ Session::get('message') }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                    @if(Session::has('error'))
                            <p class="alert alert-danger">{{ Session::get('error') }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                </div> <!-- end .flash-message -->
            </div>
            <div class="col-sm-12">
                @yield('content')
            </div>
        </section>
    </div>
    @include('layouts.main-footer')
</div>

@include('layouts.footer')


