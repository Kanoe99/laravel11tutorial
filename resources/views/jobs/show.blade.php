<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <div>
        <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
    </div>
    <a href="/jobs" class="mt-10 text-blue-400 hover:underline block">Back To Jobs</a>
</x-layout>
