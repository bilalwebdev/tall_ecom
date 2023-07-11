<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Livewire\Component;

class Shop extends Component
{
    public $av_categories;

    public $av_sizes;

    public $av_colors;

    public $categories = [];

    public $size;

    public $color;

    public $sort;

    public $min_price = '';

    public $max_price = '';

    public $fl_products = [];





    protected $queryString = [
        'categories',
    ];

    public function mount()
    {
        $this->av_categories = Category::with('child')->whereNull('parent_id')->get();
        $this->av_sizes = Size::where('active', 1)->get();
        $this->av_colors = Color::where('active', 1)->get();
    }


    public function render()
    {
        $selected_categories = $this->categories;

        $selected_size = $this->size;

        $selected_color = $this->color;

        $selected_sort = $this->sort;



        $min = $this->min_price;

        $max = $this->max_price;

        //$size = $this->size;

        $products =  Product::where('active', 1);


        if ($selected_categories) {



            $products->whereHas('category', function ($query) use ($selected_categories) {

                return $query->whereIn('categories.id', $selected_categories);
            });
        }

        if ($min && $max) {
            $products->whereHas('variants', function ($query) use ($min, $max) {
                return  $query->whereBetween('sale_price', [$min, $max]);
            });
        }

        if ($selected_size) {

            $products->whereHas('variants', function ($query) use ($selected_size) {
                return  $query->where('size_id', $selected_size);
            });
        }

        if ($selected_color) {

            $products->whereHas('variants', function ($query) use ($selected_color) {
                return  $query->where('color_id', $selected_color);
            });
        }

        if ($selected_sort) {

            if ($selected_sort == 'h_to_l') {
                $products->whereHas('variants', function ($query) use ($selected_color) {
                    return  $query->orderBy('sale_price', 'desc');
                });
            }
            if ($selected_sort == 'l_to_h') {
                $products->whereHas('variants', function ($query) use ($selected_color) {
                    return  $query->orderBy('sale_price', 'asc');
                });
            }

            if ($selected_sort == 'latest') {
                $products = $products->latest();
            }
        }

        $products = $products->paginate(10);

        return view('livewire.shop', compact('products'))->layout('layouts.base');
    }
}
