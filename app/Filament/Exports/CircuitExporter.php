<?php

namespace App\Filament\Exports;

use App\Models\Circuit;
use App\Models\CircuitTypes;
use App\Models\ServiceProvider;
use App\Models\CircuitStatus;
use App\Models\EntityName;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;
use Filament\Tables\Columns\TextColumn;

class CircuitExporter extends Exporter
{
    protected static ?string $model = Circuit::class;

    public static function getColumns(): array
    {
        return [
            //
            ExportColumn::make('id')->label('ID'),
            ExportColumn::make('circuit_number')->label('Circuit Number'),
            ExportColumn::make('speed')->label('Speed'),
            ExportColumn::make('service_provider_id')->label('Service Provider'),
            ExportColumn::make('circuit_type_id')->label('Circuit Type'),
            ExportColumn::make('entity_name_id')->label('Entity Name'),
            ExportColumn::make('circuit_status_id')->label('Circuit Status'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your circuit export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
