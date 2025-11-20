<?php

if (!function_exists('moneyFormat')) {
    /**
     * Format angka ke dalam format Rupiah
     *
     * @param  mixed $amount
     * @return string
     */
    function moneyFormat($amount)
    {
        return 'Rp ' . number_format((float)$amount, 0, ',', '.');
    }
}
