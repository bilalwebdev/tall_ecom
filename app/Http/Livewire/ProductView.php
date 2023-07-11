<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Variant;
use Livewire\Component;

class ProductView extends Component
{
    public Product $product;
    public $color = '';
    public $size = '';
    public $variant;
    public $variant_id;
    public $variant_options;
    public $option;
    public $s_val;
    public $c_val;

    public function mount(Product $product)
    {
        $product->load(['category:id,name,slug', 'media', 'variant', 'variants', 'variants.options']);
        $this->product = $product;
        $this->variant = $product->variant;
        $this->variant_options = $product->variants;
    }

    public function changeVariant($key, $value, $id)
    {


        if ($key == 'size') {
            $size = Variant::find($id)->size;
            $this->variant_options = Variant::where('size_id', $size->id)
                ->where('product_id', $this->product->id)
                ->get();
        }

        if ($key == 'color') {
            $color = Variant::find($id)->color;
            $this->variant_options = Variant::where('color_id', $color->id)
                ->where('product_id', $this->product->id)
                ->get();
        }
        $this->loadVariant($id);
    }

    public function loadVariant($id)
    {
        $variant = Variant::find($id);
        $this->fill(['variant' => $variant]);
    }

    public function render()
    {
        return view('livewire.product-view')->layout('layouts.base');
    }
}
