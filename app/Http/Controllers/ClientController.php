<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
   public function store(Request $request)
{
    $validatedData = $request->validate(
        [
            'name'        => 'required|string|max:255',

            // Either email or phone is required
            'email'       => 'nullable|email|max:255|required_without:phone',
            'phone'       => 'nullable|string|min:10|max:20|required_without:email',

            'message'     => 'nullable|string|max:500',

            'status'      => 'required|in:New Lead,Contacted,In Progress,Completed',
            'source'      => 'required|string|max:255',
            'rating'      => 'nullable|string',

            'industry'    => 'required|string|max:255',
            'services'    => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',

            'country'     => 'required|string|max:255',
            'state'       => 'required|string|max:255',
            'district'    => 'required|string|max:255',

            'deadline'    => 'nullable|date',
            'notes'       => 'nullable|string|max:1000',
        ],
        [
            'email.required_without' => 'Email or phone number is required.',
            'phone.required_without' => 'Phone number or email is required.',

            'email.email'            => 'Please enter a valid email address.',
            'phone.min'              => 'Phone number must be at least 10 digits.',

            'name.required'          => 'Client name is required.',
            'status.required'        => 'Lead status is required.',
            'status.in'              => 'Invalid lead status selected.',
            'source.required'        => 'Lead source is required.',
            'industry.required'      => 'Industry field is required.',
            'services.required'      => 'Please specify the required service.',
            'country.required'       => 'Country is required.',
            'state.required'         => 'State is required.',
            'district.required'      => 'District is required.',
            'deadline.date'          => 'Deadline must be a valid date.',
        ]
    );

    Client::create($validatedData);

    return redirect()->back()->with('success', 'Lead submitted successfully.');
}

public function bulkUpload(Request $request)
{
    $request->validate([
        'csv_file' => 'required|file|mimes:csv,txt|max:2048',
    ]);

    $handle = fopen($request->file('csv_file')->getRealPath(), 'r');
    fgetcsv($handle); // skip header row

    $imported = 0;
    $errors   = [];
    $rowNum   = 2;

    while (($data = fgetcsv($handle)) !== false) {
        if (count($data) < 1 || (count($data) === 1 && empty($data[0]))) {
            $rowNum++;
            continue;
        }

        $record = array_map(fn($v) => ($v === '' ? null : $v), [
            'name'        => $data[0]  ?? null,
            'email'       => $data[1]  ?? null,
            'phone'       => $data[2]  ?? null,
            'message'     => $data[3]  ?? null,
            'status'      => $data[4]  ?? null,
            'source'      => $data[5]  ?? null,
            'rating'      => $data[6]  ?? null,
            'industry'    => $data[7]  ?? null,
            'services'    => $data[8]  ?? null,
            'description' => $data[9]  ?? null,
            'country'     => $data[10] ?? null,
            'state'       => $data[11] ?? null,
            'district'    => $data[12] ?? null,
            'deadline'    => $data[13] ?? null,
            'notes'       => $data[14] ?? null,
        ]);

        $validator = Validator::make($record, [
            'name'        => 'required|string|max:255',
            'email'       => 'nullable|email|max:255|required_without:phone',
            'phone'       => 'nullable|string|min:10|max:20|required_without:email',
            'message'     => 'nullable|string|max:500',
            'status'      => 'required|in:New Lead,Contacted,In Progress,Completed',
            'source'      => 'required|string|max:255',
            'rating'      => 'nullable|string',
            'industry'    => 'required|string|max:255',
            'services'    => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'country'     => 'required|string|max:255',
            'state'       => 'required|string|max:255',
            'district'    => 'required|string|max:255',
            'deadline'    => 'nullable|date',
            'notes'       => 'nullable|string|max:1000',
        ]);

        if ($validator->fails()) {
            $errors[] = "Row {$rowNum}: " . implode(', ', $validator->errors()->all());
        } else {
            Client::create($validator->validated());
            $imported++;
        }

        $rowNum++;
    }

    fclose($handle);

    $summary = "{$imported} lead(s) imported successfully.";

    return redirect()->back()
        ->with('bulk_success', $summary)
        ->with('bulk_errors', $errors);
}

public function downloadSampleCsv()
{
    $columns = ['name', 'email', 'phone', 'message', 'status', 'source', 'rating', 'industry', 'services', 'description', 'country', 'state', 'district', 'deadline', 'notes'];
    $sample  = ['John Doe', 'john@example.com', '9876543210', 'Interested in services', 'New Lead', 'Advertisement', 'High', 'IT Company', 'Website', 'Looking for a business website', 'India', 'Bihar', 'Patna', '2026-12-31', 'Follow up next week'];

    $callback = function () use ($columns, $sample) {
        $handle = fopen('php://output', 'w');
        fputcsv($handle, $columns);
        fputcsv($handle, $sample);
        fclose($handle);
    };

    return response()->stream($callback, 200, [
        'Content-Type'        => 'text/csv',
        'Content-Disposition' => 'attachment; filename="sample_leads.csv"',
    ]);
}
}
