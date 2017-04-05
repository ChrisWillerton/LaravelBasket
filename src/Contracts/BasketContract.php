<?php

namespace ChrisWillerton\LaravelBasket\Contracts;

use ChrisWillerton\LaravelBasket\Contracts\DataDriverContract;
use ChrisWillerton\LaravelBasket\Contracts\BasketProductContract;
use ChrisWillerton\LaravelBasket\Contracts\DeliveryOptionContract;
use ChrisWillerton\LaravelBasket\Contracts\PromoCodeContract;

interface BasketContract
{
	public function __construct(DataDriverContract $driver, $vat_rate = null);

	public function getDriver();
	public function getVatRate();

	public function getCurrencyCode();
	public function setCurrencyCode($iso_code);

	public function getDeliveryOption();
	public function setDeliveryOption(DeliveryOptionContract $option);
	public function removeDeliveryOption();
	public function getDeliveryPrice();

	public function getPromoCode();
	public function setPromoCode(PromoCodeContract $promo_code);
	public function removePromoCode();
	public function getDiscount();

	public function addItem(BasketProductContract $item, $quantity = 1, $added = false);
	public function updateItemQuantity($id, $quantity);
	public function removeItem($id, $quantity = false);
	public function emptyItems();
	public function getTotalItems();
	public function getItems();
	public function getItem($id);

	public function getVatTotal();
	public function getNetTotal();
	public function getTotal();
	public function getGrandTotal();

	public function getErrors();
	public function clear();
	public function shutdown();
}