<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    protected $policy;
    public function __construct(Policy $policy)
    {
        $this->policy = $policy;
    }

    public function index() {
        $policy = Policy::find(1);
        return view('Admin_cp.Policy.index',compact('policy'));
    }
    public function postPolicy(Request $request,$id = 0) {
        $data = [
            'freeship' => $request->freeship,
            'exchange' => $request->exchange,
            'paymentSecurity' => $request->paymentSecurity,
            'support' => $request->support
        ];
        $policy = $id != 0 ? $this->policy->find($id) : new Policy();
        if (!$policy)
        {
            return redirect()->back()->with('error','Setting not found');
        }
        $policy->fill($data);
        $policy->save();
        return  redirect()->back()->with('success','setting saved success fully');
    }
}
