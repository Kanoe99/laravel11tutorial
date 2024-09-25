<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <div>
        <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
    </div>
    @can('edit', $job)
        <x-button href="/jobs/{{ $job->id }}/edit" class="mt-6">Edit</x-button>
    @endcan
    <a href="/jobs" class="mt-10 text-blue-400 hover:underline block">Back To Jobs</a>
</x-layout>
