<x-app-layout>
    <x-slot name="header">
        <x-partials.admin.header/>
    </x-slot>

    <x-slot name="content">
        @extends('components.partials.admin.dashboard')
    </x-slot>

    <x-partials.admin.sidebar/>
</x-app-layout>