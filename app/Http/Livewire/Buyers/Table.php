<?php

namespace App\Http\Livewire\Buyers;

use App\Models\User;
use Livewire\Component;

class Table extends Component
{
    public $paginate;

    // Order direction must be "asc" or "desc"
    public $order_by = "asc";
    public $search;

    public function getBuyers()
    {
        $buyers = User::with('addresses', 'orders', 'ratingReview')->ByUserType('4');
        $buyers = $buyers->orderby('id', $this->order_by)->paginate($this->paginate);
        $buyers = $buyers->appends(array('sort_by' => request('sort_by'),
            'paginate' => request('paginate'),
            'search' => request('search'),
        ));

        return $buyers;
    }

    public function render()
    {
        return view('livewire.buyers.table', [
            'buyers' => $this->getBuyers(),
        ]);
    }
}
