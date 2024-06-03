
<x-app-layout>
    <x-slot name="header">
        <x-partials.header/>
    </x-slot>

    <x-slot name="content">
        @extends('components.partials.dashboard')
    </x-slot>

    <x-partials.sidebar/>
</x-app-layout>
