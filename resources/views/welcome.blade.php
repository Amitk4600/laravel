{{-- @include('pages.header') --}}
{{-- @includeWhen(true,'pages.header') --}}
{{-- <main class="d-flex">
    <div class="main-section">
        <article>
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
</main> --}}
{{-- @include('pages.footer ') --}}
{{-- @includeUnless(false, 'pages.footer ') --}}
{{-- </body> --}}
{{-- </html> --}}

@extends('layout.masterLayout')

@section('content')
    <h2>Home Page</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur veniam, fugit voluptatem nostrum asperiores dolores
        temporibus quibusdam voluptatibus fugiat facere! Doloribus tempora eos similique praesentium expedita voluptatum
        ullam suscipit repellat accusantium officiis, non consectetur deleniti quasi ad. Vel inventore accusantium incidunt
        veniam obcaecati dolores! Iusto et culpa iste distinctio quis!</p>
@endsection

@push('script')
    <script src="/example.js"></script>
    <script src="/js.js"></script>
    <script src="/exam.js"></script>
@endpush
<a href="{{route('blog')}}">blog</a>

@push('script')
    <script src="/vue.js"></script>
@endpush
