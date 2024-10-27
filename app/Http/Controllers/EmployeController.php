<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index()
    {
        // جلب جميع الموظفين من قاعدة البيانات
        $employes = Employe::all();

        // تمرير البيانات إلى العرض
        return view('staff.staff', compact('employes'));  // تأكد من أن اسم العرض هو 'staff.staff'
    }

}
