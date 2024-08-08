<x-layout>
    <x-slot:heading>
       Review Details
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{$customer_review['name']}}</h2>
    <p>
        {{$customer_review['text']}}
    </p>
</x-layout>
