<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\tbl_product;
use App\Model\tbl_order;
use App\Model\tbl_user;
use App\Model\tbl_feedback;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Count products per menu category (exclude preminum)
        $menuCounts = tbl_product::select('menu', DB::raw('count(*) as total'))
            ->where('menu', '!=', 'preminum')
            ->groupBy('menu')
            ->pluck('total', 'menu')
            ->toArray();

        // Total orders
        $totalOrders = tbl_order::count();

        // Total products
        $totalProducts = tbl_product::count();

        // Recent feedbacks
        $feedbacks = tbl_feedback::with('user')
            ->latest()
            ->take(5)
            ->get();

        return view('Backend.admin-views.dashboard', compact('menuCounts', 'totalOrders', 'totalProducts', 'feedbacks'));
    }
}
