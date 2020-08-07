<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class ComingSoon extends Component
{

    public $comingSoonGames = [];

    public function loadComingSoonGames()
    {
        $current = Carbon::now()->timestamp;

        $this->comingSoonGames = Cache::remember('coming-soon-games', 3600, function () use ($current) {
            return Http::withHeaders(config('services.igdb'))
            ->withOptions([
                'body' => "fields name,cover.url,first_release_date,popularity,platforms.abbreviation,rating,summary;
                sort first_release_date asc;
                limit 4;
                where platforms = (48,49,130,6)
                & (
                    first_release_date >= {$current}
                    & popularity > 5);"
            ])->get('https://api-v3.igdb.com/games/')->json();
        });
    }

    public function render()
    {
        return view('livewire.coming-soon');
    }
}
