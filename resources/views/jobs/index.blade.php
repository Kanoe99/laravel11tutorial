<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <ul class="flex gap-10 text-nowrap flex-wrap">
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}"
                    class="block px-8 py-4 border w-fit rounded-md border-gray-600 bg-gray-100 hover:bg-gray-300">
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
