<x-layout>
    @include ('posts._header')

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            @if ($posts->count())
                <!-- list of posts -->
                <x-posts-grid :posts="$posts" />
                <!-- pagination -->
                {{ $posts->links() }}
            @else
                <p class="text-center">No posts yet.</p>
            @endif
        </main>

</x-layout>