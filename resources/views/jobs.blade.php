<x-layout>
    <x-slot:heading>
        Job page
    </x-slot:heading>
    <h1>Hello from Job page</h1>
    <ul>
        @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{$job['id']}}">
                <strong>{{$job['title'] }}</strong>: Pays {{$job['salary']}} per year
            </a>         
        </li>  
        @endforeach
    </ul>
    
</x-layout>