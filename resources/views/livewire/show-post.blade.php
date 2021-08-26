<div class="mt-4 bg-white p-4">
    <h2 class="text-xl text-red-600">{{ $post->title }}</h2>
    <span class="font-italic">Post ID{{ $post->id }}</span>
    <p class="mt-2 p-2 text-blue-300">{{ $post->body }}</p>

    Total Posts: <span class="font-black">{{ $this->total_posts }}</span>

    <livewire:child :text="$post->title" />
</div>
