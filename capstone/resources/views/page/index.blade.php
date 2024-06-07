
<x-app-layout>
    <x-slot name="header">
        <x-partials.header/>
    </x-slot>

    <x-slot name="content">
        @extends('components.partials.greetings')
    </x-slot>

    <x-partials.sidebar/>
</x-app-layout>





