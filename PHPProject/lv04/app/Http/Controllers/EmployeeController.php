<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $data['employee'] = Employee::paginate(10);
        $employees = Employee::Orderby('id','desc')->paginate(10);
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$employees = Employee::distinct()->get(['address']);
        return view('employee.add');//, compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->ipName;
        $email = $request->ipEmail;
        $address = $request->ipAddress;
        $phone = $request->ipPhone;

        $employee = new Employee();
        $employee->name = $name;
        $employee->email = $email;
        $employee->address = $address;
        $employee->phone = $phone;

        $employee->save();

//        $valiDate = $request -> validate([
//           'ipName' => 'required',
//            'ipEmail' => 'required',
//            'ipAddress'=> 'required',
//            'ipPhone' => 'required|mix:10',
//        ]);
//
//        Employee::create($valiDate);

        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::find($id);
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request['ipName'];
        $email = $request['ipEmail'];
        $address = $request['ipAddress'];
        $phone = $request['ipPhone'];

        $data = [
            'name' => $name,
            'email' => $email,
            'address' => $address,
            'phone' => $phone
        ];

        Employee::where('id', $id)->update($data);

        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Employee::where('id', $id)->delete();
        return redirect()->route('employee.index');
    }
}
