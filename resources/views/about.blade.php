{{-- @include('pages.header') --}}
{{-- @includeWhen(true,'pages.header') --}}
{{-- <main class="d-flex">
    <div class="main-section">
        <article>
            <h1>About page</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas soluta ipsum quae explicabo
                consequatur
                culpa,
                in, incidunt esse, eum et beatae officia est iure obcaecati non sapiente nobis alias. Natus eaque,
                molestias rem
                laboriosam iusto ullam error. Accusantium atque dicta soluta placeat impedit iste accusamus optio
                ipsum
                quasi
                hic sint repellendus non, eius sed voluptatum quo cumque in, perferendis facere aut reiciendis
                adipisci
                asperiores exercitationem! Culpa id excepturi a amet facere nesciunt voluptatibus tempore est enim
                aperiam quasi
                ipsam, mollitia accusantium debitis ipsum nobis ad, consequatur molestias esse atque blanditiis odit
                itaque
                laborum doloremque? Dicta minus itaque magnam in quas!</p>
        </article>
    </div>
    <div class="sidebar-section">
        @include('pages.sidebar ')
    </div>
</main>
@include('pages.footer ') --}}
{{-- @includeUnless(false, 'pages.footer ') --}}
{{-- </body>
</html> --}}


@extends('layout.masterLayout')
@section('content')
    <h2>About Page</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum unde repellendus incidunt? Voluptatum totam sit
        quibusdam vel provident dolore repudiandae quidem, cumque, laborum voluptate, labore est praesentium cum nemo nobis.
    </p>
    @verbatim
        <div id="app">{{ message }}</div>
    @endverbatim
@endsection

@push('script')
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script>
        const {
            createApp,
            ref
        } = Vue

        createApp({
            setup() {
                const message = ref('Hello vue!')
                return {
                    message
                }
            }
        }).mount('#app')
    </script>
@endpush
