<?php

namespace App\Imports;

use App\Models\PromoCode;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PromoCodesImport implements ToModel, WithHeadingRow, WithChunkReading, WithBatchInserts
{

    public function __construct()
    {
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        $code   = trim($row['code']);
        $value  = trim($row['value']);
        $status = trim($row['status']);

        if(!is_null($code) && !is_null($value) && !is_null($status)){

            PromoCode::query()->updateOrCreate([
                'code' => $code,
                'status' => $status,
            ],
            [
                'value'  => $value,
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
