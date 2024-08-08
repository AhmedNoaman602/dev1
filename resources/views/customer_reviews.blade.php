<x-layout>
    <x-slot:heading>
        Customer Reviews
    </x-slot:heading>

<ul>
    @foreach($customer_reviews as $review)
        <li>
            <a href="/customer_reviews/{{$review['id']}}">
                <strong>{{$review['name']}}</strong>
            </a>
        </li>

    @endforeach
</ul>


</x-layout>
