<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrcodeController extends Controller
{
    protected $list = [
        [
            'id'         => '145-PX',
            'name'       => 'Mucyo Fred',
            'positive'   => 'System Architect',
            'office'     => 'Kacyiru',
            'age'        => '40',
            'start_date' => '2011/04/25',
        ],
        [
            'id'         => '146-EM',
            'name'       => 'Hirwa Jean Felix',
            'positive'   => 'Customer Support',
            'office'     => 'Kicukiro',
            'age'        => '45',
            'start_date' => '2011/01/25',
        ],
    ];

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $items = collect($this->list);
        $code = '00';
        $item = '00';
        return view('welcome', compact('items','code', 'item'));
    }

    /**
     * @param Request $request
     * @param $code
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function qrcode(Request $request, $code)
    {
        $items = null;
        $item = '00';

        return view('welcome', compact('item', 'code'));
    }

    /**
     * @param Request $request
     * @param $code
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function verify(Request $request, $code)
    {
        $items = null;
        $item = collect($this->list)->where('id', '=', $code)->first();

        return view('welcome', compact('item', 'code'));
    }
}
