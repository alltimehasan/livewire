<div>
    @foreach ($books as $book)
        <div class="bg-slate-100 my-4 p-3 rounded-sm shadow-md">
            <h2 class="text-xl font-medium">{{ $book->title }}</h2>
            <p>By {{ $book->author }}</p>
        </div>
    @endforeach
</div>
