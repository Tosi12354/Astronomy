<?php

namespace App\Http\Controllers;

use App\Article;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function trade() {
        function create_mpg_aes_encrypt ($parameter = "" , $key = "", $iv = "") {
            $return_str = '';
            if (!empty($parameter)) {
                //將參數經過 URL ENCODED QUERY STRING
                $return_str = http_build_query($parameter);
            }
            return trim(bin2hex(openssl_encrypt(addpadding($return_str), 'aes-256-cbc', $key, OPENSSL_RAW_DATA|OPENSSL_ZERO_PADDING, $iv)));
        }
        function addpadding($string, $blocksize = 32) {
            $len = strlen($string);
            $pad = $blocksize - ($len % $blocksize);
            $string .= str_repeat(chr($pad), $pad);
            return $string;
        }

        //  = str_replace('-', '', substr(created_at, 0, 10));

        $trade_info_arr = array(
            'MerchantID' => 'MS130038639',
            'RespondType' => 'JSON',
            'TimeStamp' => time(),
            'Version' => 2.0,
            'MerchantOrderNo' => '123',
            'Email' => 'genius007123456@gmail.com',
            'LoginType' => 0,
            'Amt' => 40,
            'ItemDesc' => '打賞'
        );
        $mer_key = 'yl6eFeIZIiza2qgiXOvi4jz6WL0rzmvl';
        $mer_iv = 'CyNbesawYzd8sHNP';
        //交易資料經 AES 加密後取得 TradeInfo
        $TradeInfo = create_mpg_aes_encrypt($trade_info_arr, $mer_key, $mer_iv);

        $readyforsha = 'HashKey=yl6eFeIZIiza2qgiXOvi4jz6WL0rzmvl&'.$TradeInfo.'&HashIV=CyNbesawYzd8sHNP';

        $TradeSha = strtoupper(hash("sha256", "$readyforsha"));

        return view('front.money', compact('TradeInfo', 'TradeSha'));
    }
}
