<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

        
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post_data['title'] }}</h2>
            {{-- to be continue on https://youtu.be/76YsC4EjGE4 --}}
            <div>
                <a href="#">{{ $post_data['author'] }}</a> | 1 Januari 2024
            </div>
            <p class="my-4 font-light">{{ $post_data['body'] }}</p>
            <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to Posts</a>
        </article>

</x-layout>
