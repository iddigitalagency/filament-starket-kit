@aware(['page'])
<div class="px-4 py-4 md:py-8">
    <div class="max-w-7xl mx-auto">
        <img src="{{ $image }}" alt="{{ $page->title }}" />

        <h1>{{ $heading}}</h1>
        <h3>{{ $subheading }}</h3>
        <x-filament::link href="{{ $buttonUrl }}" color="primary" icon="heroicon-m-arrow-right">
            {{ $buttonText }}
        </x-filament::link>
    </div>
</div>
