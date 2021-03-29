<?php

namespace App\Cart;

use NumberFormatter;
use Money\Currencies\ISOCurrencies;
use Money\Currency;
use Money\Formatter\IntlMoneyFormatter;
use Money\Money as BaseMoney;

class Money
{
    protected $money;

    public function __construct($value)
    {
        $this->money = new BaseMoney($value, new Currency('KES'));
    }

    public function amount()
    {
        return $this->money->getAmount();
    }

    public function currency()
    {
        return $this->money->getCurrency();
    }

    public function formatted()
    {
        $formatter = new IntlMoneyFormatter(
            new NumberFormatter('en_KE', NumberFormatter::CURRENCY),
            new ISOCurrencies()
        );
        return $formatter->format($this->money);
    }

    public function getCurrencyCode()
    {
        $formatter = new IntlMoneyFormatter(
            new NumberFormatter('en_KE', NumberFormatter::CURRENCY),
            new ISOCurrencies()
        );
        $formatter = new NumberFormatter('en_KE', NumberFormatter::CURRENCY);
        $code = $formatter->getSymbol(NumberFormatter::CURRENCY_SYMBOL);
        return $code;
    }


    public function getCurrencySymbol()
    {
        $formatter = new IntlMoneyFormatter(
            new NumberFormatter('en_KE', NumberFormatter::CURRENCY),
            new ISOCurrencies()
        );
        $formatter = new NumberFormatter('en_KE', NumberFormatter::CURRENCY);
        $code = $formatter->getSymbol(NumberFormatter::INTL_CURRENCY_SYMBOL);
        return $code;
    }

    public function formattedtotal()
    {
        $formatter = new IntlMoneyFormatter(
            new NumberFormatter('en_KE', NumberFormatter::CURRENCY),
            new ISOCurrencies()
        );
        return $formatter->format($this->total);
    }

    public function add(Money $money)
    {
        $this->money = $this->money->add($money->instance());
        return $this;
    }

    public function instance()
    {
        return $this->money;
    }
}