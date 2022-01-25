<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function information()
    {
        return view('front.index-information');
    }

    public function season()
    {
        return view('front.index-season');
    }

    public function map()
    {
        return view('front.index-map');
    }

    public function data()
    {
        $orders = DB::table('orders')->get();
        return view('backstage.order.order-donate-data', compact('orders'));
    }

    public function create()
    {
        return view('backstage.order.order-donate');
    }
    public function store(Request $request)
    {
        // 用 model 來操控資料庫
        $order = Order::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect('/trade?orderId=' . $order->id);
    }
    public function trade(Request $request)
    {
        function create_mpg_aes_encrypt($parameter = "", $key = "", $iv = "")
        {
            $return_str = '';
            if (!empty($parameter)) {
                //將參數經過 URL ENCODED QUERY STRING
                $return_str = http_build_query($parameter);
            }
            return trim(bin2hex(openssl_encrypt(addpadding($return_str), 'aes-256-cbc', $key, OPENSSL_RAW_DATA | OPENSSL_ZERO_PADDING, $iv)));
        }
        function addpadding($string, $blocksize = 32)
        {
            $len = strlen($string);
            $pad = $blocksize - ($len % $blocksize);
            $string .= str_repeat(chr($pad), $pad);
            return $string;
        }

        $inputs = $request->all();
        $orderId = $inputs['orderId'];

        $order = Order::find($orderId);

        $trade_info_arr = array(
            'MerchantID' => 'MS130038639',
            'RespondType' => 'JSON',
            'TimeStamp' => time(),
            'Version' => 2.0,
            'MerchantOrderNo' => 'stie1' . $order->id,
            'Email' => $order->email,
            'LoginType' => 0,
            'Amt' => 150,
            'ItemDesc' => '贊助'
        );

        $mer_key = 'yl6eFeIZIiza2qgiXOvi4jz6WL0rzmvl';
        $mer_iv = 'CyNbesawYzd8sHNP';

        //交易資料經 AES 加密後取得 TradeInfo
        $TradeInfo = create_mpg_aes_encrypt($trade_info_arr, $mer_key, $mer_iv);

        $readyforsha = 'HashKey=yl6eFeIZIiza2qgiXOvi4jz6WL0rzmvl&' . $TradeInfo . '&HashIV=CyNbesawYzd8sHNP';

        $TradeSha = strtoupper(hash("sha256", "$readyforsha"));

        return view('front.money', compact('TradeInfo', 'TradeSha'));
    }
}
