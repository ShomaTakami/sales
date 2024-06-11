<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;
use App\Models\Leader;
use App\Models\Employee;
use App\Models\DailyReport;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $userInfo = null;
        $userRole = '';

        if ($user->company_id) {
            $userInfo = Company::find($user->company_id);
            $userRole = 'company';
        } elseif ($user->leader_id) {
            $userInfo = Leader::find($user->leader_id);
            $userRole = 'leader';
        } elseif ($user->employee_id) {
            $userInfo = Employee::find($user->employee_id);
            $userRole = 'employee';
        }
        $selectedDate = $request->input('date', date('Y-m-d'));
        $dailyReports = DailyReport::where($userRole . '_id', $userInfo->id)
            ->whereDate('created_at', $selectedDate)->orderBy('created_at', 'desc')->paginate(4);

        return view('dashboard', compact('userInfo', 'userRole', 'dailyReports', 'selectedDate'));
    }
}
