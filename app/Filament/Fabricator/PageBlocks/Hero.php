<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Hero extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('hero')
            ->schema([
                FileUpload::make('image')
                    ->image()
                    ->directory('pages/hero'),
                TextInput::make('heading'),
                TextInput::make('subheading'),
                TextInput::make('button_text'),
                TextInput::make('button_url'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
