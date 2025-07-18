@props(['page'])
<x-layouts.app :page="$page">
    
    {{-- Header Here --}}

    <x-filament-fabricator::page-blocks :blocks="$page->blocks" />

     {{-- Footer Here --}}
</x-layouts.app>