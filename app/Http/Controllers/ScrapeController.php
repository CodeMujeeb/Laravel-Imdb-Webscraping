<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Movie;
use App\Jobs\ScrapeMoviesJob;

class ScrapeController extends Controller
{
    public function scrape()
    {
        try {
            dispatch(new ScrapeMoviesJob());

            return response()->json(['message' => 'Scraping job dispatched successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred: ' . $e->getMessage()], 500);
        }
    }
}
