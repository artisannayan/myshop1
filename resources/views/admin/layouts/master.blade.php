@include('admin.include.header')
@include('admin.include.sidebar')

    <aside class="right-side">

        <section class="content">
            <div class="row">
                @yield("bodyContent")
            </div>
            <!-- /#right -->
            <div class="background-overlay"></div>
        </section>
        <!-- /.content --> </aside>
    <!-- /.right-side --> </div>
<!-- ./wrapper -->
<!-- global js -->
@include('admin.include.footer') 

@php
    
@endphp