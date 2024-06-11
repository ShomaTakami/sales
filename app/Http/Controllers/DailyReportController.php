<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DailyReport;
use App\Models\Company;
use App\Models\Leader;
use App\Models\Employee;

class DailyReportController extends Controller
{
    public function create()
    {
        return view('daily_reports.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'content' => 'required',
            'sales_count' => 'required|integer',
        ]);

        $user = Auth::user();

        $dailyReport = new DailyReport();
        $dailyReport->date = $validatedData['date'];
        $dailyReport->content = $validatedData['content'];
        $dailyReport->sales_count = $validatedData['sales_count'];

        if ($user->company_id) {
            $dailyReport->company_id = $user->company_id;
            $dailyReport->leader_id = null;
            $dailyReport->employee_id = null;
        } elseif ($user->leader_id) {
            $leader = Leader::find($user->leader_id);
            $dailyReport->company_id = $leader->company_id;
            $dailyReport->leader_id = $leader->id;
            $dailyReport->employee_id = null;
        } elseif ($user->employee_id) {
            $employee = Employee::find($user->employee_id);
            $dailyReport->company_id = $employee->company_id;
            $dailyReport->leader_id = $employee->leader_id;
            $dailyReport->employee_id = $employee->id;
        }
        $dailyReport->save();

        return redirect()->route('dashboard')->with('success', 'Daily report created successfully.');
    }
}
