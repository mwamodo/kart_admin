<?php

namespace App\Http\Livewire\Dashboard;

use App\Cart\Money;
use App\Models\Order;
use Livewire\Component;

class OrderStatus extends Component
{
    public function render()
    {
        $total_payment = new Money((int)(Order::sum('subtotal') / 100));

        return view('livewire.dashboard.order-status', [
            'orders' => Order::get()->count(),
            'completed' => Order::Status('completed')->count(),
            'processing' => Order::Status('processing')->count(),
            'shipped' => Order::Status('shipped')->count(),
            'total_payment' => $total_payment->formatted(),
        ]);
    }
}
