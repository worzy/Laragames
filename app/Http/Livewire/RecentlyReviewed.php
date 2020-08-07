<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class RecentlyReviewed extends Component
{
    public $recentlyReviewedGames = [];

    public function loadRecentlyReviewedGames()
    {
        $before = Carbon::now()->subMonths(2)->timestamp;
        $current = Carbon::now()->timestamp;

        $this->recentlyReviewedGames = Cache::remember('recently-reviewed-games', 3600, function () use ($before, $current) {
            return Http::withHeaders(config('services.igdb'))
            ->withOptions([
                'body' => "fields name,cover.url,first_release_date,popularity,platforms.abbreviation,rating,summary;
                sort popularity desc;
                limit 3;
                where platforms = (48,49,130,6)
                & (
                    first_release_date >= {$before}
                    & first_release_date < {$current}
                    & rating_count > 5);"
            ])->get('https://api-v3.igdb.com/games/')->json();
        });
    }

    public function render()
    {
        return view('livewire.recently-reviewed');
    }
}
