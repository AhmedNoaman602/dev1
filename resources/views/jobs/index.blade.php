<x-layout>
<x-slot:heading>
Jobs Listing
</x-slot:heading>
    <div class="space-y-4">
    @foreach($jobs as $job)
        <article>
            <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline block px-4 py-6 border border-gray-200 rounded-lg">
                <div>{{$job->employer->name}}</div>
                <div>
                    <strong>{{$job['title']}}:</strong> Pays{{$job['salary']}}
                </div>
            </a>
        </article>
    @endforeach

        <div>
            {{$jobs -> links()}}
        </div>

    </div>
</x-layout>
