<?php

namespace App\Filament\Resources\Supervisors\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ViewField;

class SupervisorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('nombre')
                ->label('Nombre Completo del Supervisor')
                ->required()
                ->maxLength(150),

            // Usamos ViewField para inyectar tu lógica de SignaturePad
            ViewField::make('firma')
                ->label('Firma Digital')
                ->view('filament.forms.components.signature-pad')
                ->required()
                ->helperText('Firme directamente en el recuadro superior.'),
        ]);
    }
}