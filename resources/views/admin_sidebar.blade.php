<div class="col-md-3">
    <div class="mt-2">
        <img
            src="{{asset('images/programmer.svg')}}"
            alt="Avatar"
            height="100px"
            width="100px"
            class="mx-auto d-block"
            style="border-radius:50%;"
        >

        <p class="mt-2 text-center"> Hello, {{auth()->user()->name}} </p>
    </div>
    <div class="mt-2 border shadow bg-white p-3"  style="border-radius:20px">
        <ul class="list-unstyled font-weight-bold text-lg ml-3 mt-2">
            <li class="mb-2">
                <a href="/home" class="text-decoration-none color-text-dark">
                    Dashboard
                </a>
            </li>
            <li class="mb-2">
                <a href="/admin/list-books" class="text-decoration-none color-text-dark">
                    List of Books & Chapters
                </a>
            </li>
            <li class="mb-2">
                <a href="/admin/list-authors" class="text-decoration-none color-text-dark">
                    List of Authors
                </a>
            </li>
        </ul>
    </div>
</div>
