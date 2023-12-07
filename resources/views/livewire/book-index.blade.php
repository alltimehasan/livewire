<div class="space-y-2">
    @foreach ($books as $book)
        <livewire:book-item :book="$book" wire:key="$book->id" />
    @endforeach
</div>
