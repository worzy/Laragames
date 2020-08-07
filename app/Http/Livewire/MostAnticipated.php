<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class MostAnticipated extends Component
{
    public $mostAnticipatedGames = [];

    public function loadMostAnticipatedGames()
    {
        $current = Carbon::now()->timestamp;
        $inFourMonths = Carbon::now()->addMonths(4)->timestamp;

        $this->mostAnticipatedGames = Cache::remember('anticipated-games', 3600, function () use ($current, $inFourMonths) {
            return Http::withHeaders(config('services.igdb'))
            ->withOptions([
                'body' => "fields name,cover.url,first_release_date,popularity,platforms.abbreviation,rating,summary;
                sort popularity desc;
                limit 4;
                where platforms = (48,49,130,6)
                & (
                    first_release_date >= {$current}
                    & first_release_date < {$inFourMonths});"
            ])->get('https://api-v3.igdb.com/games/')->json();
        });
    }

    public function render()
    {
        return view('livewire.most-anticipated');
    }
}
