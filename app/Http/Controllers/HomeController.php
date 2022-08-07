<?php

namespace App\Http\Controllers;

use GenieFintech\Ocr\Facades\Ocr;
use Litipk\BigNumbers\Decimal;

class HomeController extends Controller
{
    use ImageTrait;

    function index()
    {
        $one = Decimal::fromInteger(1);
        $two= Decimal::fromInteger(2);
        $three=Decimal::fromInteger(3);
        $seven = Decimal::fromString('7.0');

        $a=$one->div($seven, 101); // Should display something like 0.142857142857 .....and the last digit is 9 in consideration of rounding up the 101th digit.

        $b=$two->div($seven, 100);
        $c=$three->div($seven, 100);
//        echo ($c->sub(($a->add($b)))); //Displays 0.00000... to the last digit

//        echo "\n";
            return 1/7;
        return gmp_strval(gmp_div(1.0, 7.0)); //Displays 0. Not really useful!
//        echo "\n";

        // Now we test BC

        $oneseven=bcdiv('200000', '3000000', 2); // Should display something like 0.142857142857 .....but note the last digit is 8, not 9.
        $twoseven=bcdiv('2','7', 100);
        $threeseven=bcdiv('3','7', 100);
        return $oneseven*100;
        echo bcsub(bcadd($oneseven, $twoseven,100), $threeseven, 100); // Displays 0.000000000... to the last digit
        echo "\n";
//        return Ocr::setCountry('my')->frontDetection($this->image())->withFormat()
//            ->getResponse();
    }
}
