<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class WheelController extends Controller
{
    public function spin(Request $request)
    {
        $user = Auth::user();
        $now = Carbon::now();

        if ($user->last_spin && $user->last_spin->diffInHours($now) < 24) {
            return response()->json([
                'success' => false,
                'message' => 'You can only spin once every 24 hours.'
            ]);
        }

        // Save the spin time
        $user->last_spin = $now;
        $user->save();

        // Determine the prize (implement your prize logic here)
        $prize = $this->getWeightedRandomSegment();

        return response()->json([
            'success' => true,
            'prize' => $prize
        ]);
    }

    private function getWeightedRandomSegment()
    {
        $segments = [
            ['name' => '5000 points', 'probability' => 0.30],
            ['name' => 'Super prize', 'probability' => 0.01],
            ['name' => '5000 points', 'probability' => 0.30],
            ['name' => '-10%', 'probability' => 0.05],
            ['name' => '10000 points', 'probability' => 0.15],
            ['name' => '-10%', 'probability' => 0.05],
            ['name' => '15000 points', 'probability' => 0.11],
            ['name' => '-15%', 'probability' => 0.03]
        ];

        $totalProbability = array_sum(array_column($segments, 'probability'));
        $randomValue = mt_rand() / mt_getrandmax() * $totalProbability;

        foreach ($segments as $segment) {
            if ($randomValue < $segment['probability']) {
                return $segment['name'];
            }
            $randomValue -= $segment['probability'];
        }
    }
}
