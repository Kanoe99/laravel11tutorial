<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <ul class="flex gap-10 text-nowrap flex-wrap">
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}"
                    class="block px-8 py-4 border w-fit rounded-md border-gray-600 bg-gray-100 hover:bg-gray-300">
                    <div
                        class="mb-2 pb-2 text-lg font-semibold border-b-[1px] border-black text-blue-500 hover:underline">
                        {{ $job->employer['name'] }}
                    </div>
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
