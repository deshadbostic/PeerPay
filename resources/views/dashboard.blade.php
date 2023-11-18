<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                {{ auth()->user()->name}}
                {{ __("you're logged in!") }}
<br><br>
                <h2 class="font-semibold text-xl text-gray-800 ">
            {{ __('Available Funds: $') }} {{ auth()->user()->balance}}
            
        </h2>

        <br><br>
                <h2 class="font-semibold text-xl text-gray-800 ">
            {{ __('Transfer History') }} 
            
        </h2>    

<ul>
    @if(auth()->user()->sentTransfers)
        @foreach(auth()->user()->sentTransfers as $transfer)
            <li>{{ $transfer->created_at }} - Sent ${{ $transfer->amount }} to {{ $transfer->receiver->name }}</li>
        @endforeach
    @else
        <li>No sent transfers</li>
    @endif

    @if(auth()->user()->receivedTransfers)
        @foreach(auth()->user()->receivedTransfers as $transfer)
            <li>{{ $transfer->created_at }} - Received ${{ $transfer->amount }} from {{ $transfer->sender->name }}</li>
        @endforeach
    @else
        <li>No received transfers</li>
    @endif
</ul>


                </div>

              
            </div>
        </div>
    </div>
</x-app-layout>
