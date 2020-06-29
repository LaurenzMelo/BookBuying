<div class="col-md-9 bg-white shadow p-4" style="border-radius:20px">
    <div class="mb-3 ml-2 justify-content-center text-2xl">
        Dashboard
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="border p-3">
                <p class="text-lg font-weight-bold color-text-dark"> List of Books </p>
                <p>
                    You have a total of <b>{{ $books->count() }}</b> uploaded books.
                </p>
                <a href="{{ route('books.index') }}" class="text-decoration-none color-text-dark"> See More.. </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="border p-3">
                <p class="text-lg font-weight-bold color-text-dark"> List of Authors </p>
                <p>
                    You have a total of <b>{{ $authors->count() }}</b> authors.
                </p>
                <a href="{{ route('authors.index') }}" class="text-decoration-none color-text-dark"> See More.. </a>
            </div>
        </div>
    </div>
    <div class="row mt-4 mb-4">
        <div class="col-md-6">
            <div class="border p-3">
                <p class="text-lg font-weight-bold color-text-dark"> List of Journals </p>
                <p>
                    You have a total of <b>{{ $journals->count() }}</b> uploaded Journals.
                </p>
                <a href="{{ route('journals.index') }}" class="text-decoration-none color-text-dark"> See More.. </a>
            </div>
        </div>

        <div class="col-md-6">
            <div class="border p-3">
                <p class="text-lg font-weight-bold color-text-dark"> List of Chapters </p>
                <p>
                    Lorem <ips></ips>um dolor sit amet, consectetur adipiscing elit.
                </p>
                <a href="#" class="text-decoration-none color-text-dark"> See More.. </a>
            </div>
        </div>
    </div>
</div>
