<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class Stats extends Component
{
    public $duration = 30;

    public $orders;
    public $order_percentage;
    public $order_range;

    public $buyers;
    public $buyer_percentage;
    public $buyer_range;

    public $sellers;
    public $seller_percentage;
    public $seller_range;

    public function mount()
    {
        $order_results = $this->getOrders($this->duration);
        $this->orders = $order_results['orders'];
        $this->order_percentage = $order_results['percentage'];
        $this->order_range = $order_results['range'];

        $buyers_results = $this->getBuyers($this->duration);
        $this->buyers = $buyers_results['buyers'];
        $this->buyer_percentage = $buyers_results['percentage'];
        $this->buyer_range = $buyers_results['range'];

        $sellers_results = $this->getSellers($this->duration);
        $this->sellers = $sellers_results['sellers'];
        $this->seller_percentage = $sellers_results['percentage'];
        $this->seller_range = $sellers_results['range'];
    }

    public function getOrders($duration): array
    {
        $last_date = Carbon::today()->subDays($duration)->toDateString();
        $previous_date = Carbon::today()->subDays($duration * 2)->toDateString();

        $last_orders = Order::where('created_at', '>=', $last_date)->count();
        $previous_orders = Order::whereBetween('created_at', [$previous_date, $last_date])->count();

        if ($previous_orders != 0 && $last_orders) {
            $result = ($last_orders / $previous_orders) * 100;
        } else {
            $result = $previous_orders == 0 ? $last_orders * 100 : $previous_orders * 100;
        }

        $range = $result >= 100 ? 'high' : 'low';

        return [
            'orders' => $last_orders,
            'percentage' => (float)number_format($result, 2, '.', ''),
            'range' => $range,
        ];
    }

    public function getBuyers($duration): array
    {
        $last_date = Carbon::today()->subDays($duration)->toDateString();
        $previous_date = Carbon::today()->subDays($duration * 2)->toDateString();

        $last_buyers = user::ByUserType(4)->where('created_at', '>=', $last_date)->count();
        $previous_buyers = user::ByUserType(4)->whereBetween('created_at', [ $previous_date, $last_date ])->count();

        if ($last_buyers != 0 && $previous_buyers != 0) {
            $result = ($last_buyers / $previous_buyers) * 100;
        } else {
            $result = $previous_buyers == 0 ? $last_buyers * 100 : $previous_buyers * 100;
        }

        $range = $result > 100 ? 'high' : 'low';

        return [
            'buyers' => $last_buyers,
            'percentage' => (float)number_format($result, 2, '.', ''),
            'range' => $range,
        ];
    }

    public function getSellers($duration): array
    {
        $last_date = Carbon::today()->subDays($duration)->toDateString();
        $previous_date = Carbon::today()->subDays($duration * 2)->toDateString();

        $last_seller = user::ByUserType(3)->where('created_at', '>=', $last_date)->count();
        $previous_seller = user::ByUserType(3)->whereBetween('created_at', [$previous_date, $last_date])->count();

        if ($last_seller != 0 && $previous_seller != 0) {
            $result = ($last_seller / $previous_seller) * 100;
        } else {
            $result = $previous_seller == 0 ? $last_seller * 100 : $previous_seller * 100;
        }

        $range = $result > 100 ? 'high' : 'low';

        return [
            'sellers' => $last_seller,
            'percentage' => (float)number_format($result, 2, '.', ''),
            'range' => $range,
        ];
    }

    public function render()
    {
        return view('livewire.dashboard.stats', [
        ]);
    }
}
