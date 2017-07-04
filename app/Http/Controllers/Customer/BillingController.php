<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use Cart;
use App\Models\Order;
use Auth;
use App\Models\Province;
use App\Models\District;
use App\Models\Ward;
use App\Http\Requests\OrderRequest;
use App\Jobs\SendMail;
use Carbon\Carbon;

class BillingController extends Controller
{
    public function store(OrderRequest $request)
    {
        $province = Province::find($request->provinces)->name;
        $district = District::find($request->districts)->name;
        $ward = Ward::find($request->wards)->name;
        $address = $province . ',' . $district . ',' . $ward;
        Order::create([
            'user_id' => Auth::id(),
            'address' => $address,
            'phone' => $request->phone,
            'note' => $request->note,
        ]);
        $job = (new SendMail($request->email))->delay(Carbon::now()->addSeconds(5));
        dispatch($job);
        return back()->with('status', 'success');
    }
}
