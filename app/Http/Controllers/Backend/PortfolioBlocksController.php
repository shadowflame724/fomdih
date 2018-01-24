<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PortfolioBlocks;
use Illuminate\Http\Request;

class PortfolioBlocksController extends Controller
{
    public function delete(PortfolioBlocks $block)
    {
        try {
            $block->delete();
        }catch (\Exception $exception){
            return response()->json([
                'status' => 'Error',
                'message' => $exception->getMessage()
            ]);
        }

        return response()->json([
            'status' => 'Success',
            'message' => 'Block deleted'
        ]);
    }
}
