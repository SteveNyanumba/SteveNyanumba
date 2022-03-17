<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Safaricom\Mpesa\Facade\Mpesa;

class MpesaTest extends Component
{
    public $amount, $phone_number;

    protected $mpesa;


    protected $rules = [
        'phone_number'=>'required',
        'amount'=>'required'
    ];


    public function mount()
    {
        $this->mpesa = new Mpesa;
    }

    public function submit()
    {
        $this->validate();
        dd([$this->phone_number, $this->amount]);

        // $stk = $this->mpesa->STKPushSimulation(123456,);
    }
    public function render()
    {
        return view('livewire.mpesa-test');
    }
}
