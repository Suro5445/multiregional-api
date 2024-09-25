<?php

namespace App\Console\Commands;

use App\Models\City;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ParseCities extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parse:cities';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Parse cities from hh.ru API';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = Http::get('https://api.hh.ru/areas');
        $areas = $response->json();

        foreach ($areas as $country) {
            if ($country['name'] === 'Россия') {
                foreach ($country['areas'] as $area) {
                    City::updateOrCreate([
                        'name' => $area['name'],
                        'slug' => strtolower(Str::slug($area['name']))
                    ]);
                }
            }
        }
        $this->info('Cities have been parsed and stored in the database.');

    }
}
