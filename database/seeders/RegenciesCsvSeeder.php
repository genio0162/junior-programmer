<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegenciesCsvSeeder extends Seeder
{
    public function run()
    {
        // Set the path to the CSV file
        $csvFile = public_path('regencies.csv');

        // Open the file for reading
        $file = fopen($csvFile, 'r');

        // Read the first row as column headers
        $headers = fgetcsv($file);

        // Loop through each row of the CSV file
        while (($row = fgetcsv($file)) !== false) {
            // Map the row to an associative array using the column headers as keys
            $data = array_combine($headers, $row);

            // Insert the data into the database
            DB::table('regencies')->insert([
                'kode_pos' => $data[1000],
                'province_id' => $data[' id'],
                'name' => $data[' KOTA'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        // Close the file
        fclose($file);
    }
}
