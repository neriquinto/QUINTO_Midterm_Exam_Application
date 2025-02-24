<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $books = [
            [
                'title' => 'Divine Rivals',
                'author' => 'Rebecca Ross',
                'price' => '₱680.00',
                'image' => 'https://i.pinimg.com/736x/0f/27/1e/0f271e2eb333f35e806da54c741332bd.jpg'
            ],
            [
                'title' => 'Hurricane Wars',
                'author' => 'Thea Guanzon',
                'price' => '₱750.00',
                'image' => 'https://media.karousell.com/media/photos/products/2023/11/20/preorder_fairyloot_the_hurrica_1700508443_a591bf05_progressive.jpg'
            ],
            [
                'title' => 'The Cruel Prince',
                'author' => 'Holly Black',
                'price' => '₱680.00',
                'image' => 'https://m.media-amazon.com/images/I/91qD99cTDIL._AC_UF1000,1000_QL80_.jpg'
            ],
            [
                'title' => 'Emily Wildes Encyclopaedia of Faeries',
                'author' => 'Heather Fawcett',
                'price' => '₱680.00',
                'image' => 'https://community.fairyloot.com/wp-content/uploads/sites/4/2023/12/EWMOTO_Fairyloot_2310241.jpg?w=1024'
            ],
            [
                'title' => 'Once Upon a Broken Heart',
                'author' => 'Stephanie Garber',
                'price' => '₱680.00',
                'image' => 'https://scontent.fmnl42-1.fna.fbcdn.net/v/t39.30808-6/474992923_3499612097009868_1350920947092907306_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=3a1ebe&_nc_ohc=fBqCrA0i4JAQ7kNvgG2SJXD&_nc_oc=Adhxl2f4G88mzZl6iTRnYPUnxo-N1dDIQKvThyyZZNfCFtRuafxi1G7Vv17XKYmROyE&_nc_zt=23&_nc_ht=scontent.fmnl42-1.fna&_nc_gid=AjhclPkgHKHtCCJktZ1OXeA&oh=00_AYA9W8kYm406u4w94mFNuo7gsLFNfrZsCEq_yN099porYw&oe=67C2270D'
            ],
            [
                'title' => 'Darker by Four',
                'author' => 'June CL Tan',
                'price' => '₱720.00',
                'image' => 'https://community.fairyloot.com/wp-content/uploads/sites/4/2024/05/IMG_2680.jpg?w=1024'
            ],
            [
                'title' => 'A Feather so Black',
                'author' => 'Lyra Selene',
                'price' => '899.00',
                'image' => 'https://www.picclickimg.com/images/g/voYAAOSwhHdmCCUS/s-l1600.jpg'
            ],
            [
                'title' => 'From Blood and Ash',
                'author' => 'Jennifer L. Armentrout',
                'price' => '₱850.00',
                'image' => 'https://thebookandbeautyblog.com/wp-content/uploads/2020/04/thumbnail-52-1.jpg?w=660&h=938'
            ]
        ];

        return view('welcome', compact('books'));
    }
}
