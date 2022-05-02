<?php

namespace App\Imports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;
use Illuminate\Support\Carbon;

class BookImport implements ToModel,WithHeadingRow,WithUpserts
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Book([
            'title' => $row['naziv_knjige'],
            'author' => $row['autor'],
            'publisher' => $row['izdavac'],
            'published_at' => Carbon::createFromFormat(('d/m/Y'),$row['godina_izdanja'])->format('Y-m-d'),
        ]);
    }

    public function uniqueBy()
    {
        return 'title';
    }
}
