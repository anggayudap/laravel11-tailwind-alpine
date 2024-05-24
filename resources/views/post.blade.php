<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    @foreach ($posts as $post)
        @php
            // dd($post)
        @endphp
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{ $post['id'] }}" class="hover:underline">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            </a>
            {{-- to be continue on https://youtu.be/76YsC4EjGE4 --}}
            <div>
                <a href="#">{{ $post['author'] }}</a> | 1 Januari 2024
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 100) }}</p>
            <a href="/posts/{{ $post['id'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach

</x-layout>
