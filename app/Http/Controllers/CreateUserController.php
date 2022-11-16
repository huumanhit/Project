<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateUserController extends Controller
{
    public function createJob(Request $request)
    {
        DB::table('job')->insert(
            [
                'recruitment' => $request->input('recruitment'),
                'namework' => $request->input('namework'),
                'level' => $request->input('level'),
                'age' => $request->input('age'),
                'quantity' => $request->input('quantity'),
                'work' => $request->input('work'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'address' => $request->input('address'),
            ]
        );
        return redirect()->route("index");
    }
    public function edit($id)
    {
        $job = DB::table('job')->where('id', '=', $id)->get();

        return view(
            'job.edit',
            [
                'currentPage' => $job,
                'job' => $job,
            ]
        );
    }

    public function update(Request $request, $id)
    {
        $jobs = [
            'recruitment' => $request->input('recruitment'),
            'namework' => $request->input('namework'),
            'level' => $request->input('level'),
            'age' => $request->input('age'),
            'quantity' => $request->input('quantity'),
            'work' => $request->input('work'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
        ];

        DB::table('job')->where('id', $id)->update($jobs);

        return redirect()->route('index');
    }

    public function delete(Request $request, $id)
    {
        DB::table('job')->where('id', $id)->delete();

        return redirect()->route("index");
    }

    public function detail(Request $request, $id)
    {

        $job = DB::table('job')->where('id', '=', $id)->get();

        return view(
            'job.detail',
            [
                'currentPage' => $job,
                'job' => $job
            ]
        );
    }
}
