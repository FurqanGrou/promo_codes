<?php

namespace App\Imports;

use App\Models\PromoCode;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PromoCodesImport implements ToModel, WithHeadingRow, WithChunkReading, WithBatchInserts
{
    public $section;

    public function __construct($section)
    {
        $this->section = $section;
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        dd($row);

        $code   = trim($row['alrkm_altslsly']);
        $type   = trim($row['alasm']);
        $value  = trim($row['odaa_altalb']);
        $status = trim($row['almsar']);

        if(!is_null($code) && !is_null($type) && !is_null($value) && !is_null($status)){

            PromoCode::query()->updateOrCreate([
                'code' => $code,
            ],
            [
                'type'   => $type,
                'value'  => $value,
                'status' => $status,
            ]);

        }
    }

    public function batchSize(): int
    {
        return 300;
    }

    public function chunkSize(): int
    {
        return 300;
    }
}
