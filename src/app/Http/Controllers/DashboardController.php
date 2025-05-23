<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $chartData = [
        //     'earnings_monthly' => 40000,
        //     'earnings_annual' => 215000,
        //     'tasks_completion' => 50,
        //     'pending_requests' => 18,
        //     'earnings_labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        //     'earnings_data' => [10000, 12000, 15000, 18000, 20000, 22000, 25000, 23000, 21000, 19000, 17000, 16000],
        //     'revenue_labels' => ['Direct', 'Social', 'Referral'],
        //     'revenue_data' => [55, 30, 15],
        // ];

        // return view('admin.admin');
         $contacts = Contact::all();
        return view('contact.list', compact('contacts'));
    }
}
