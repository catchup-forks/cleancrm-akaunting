<?php

namespace App\Models\Expense;

use App\Models\Model;
use App\Traits\Currencies;

class BillItem extends Model
{
    use Currencies;

    protected $table = 'bill_items';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['company_id', 'bill_id', 'item_id', 'name', 'sku', 'quantity', 'price', 'total', 'tax', 'tax_id'];

    public function bill()
    {
        return $this->belongsTo('App\Models\Expense\Bill');
    }

    public function item()
    {
        return $this->belongsTo('App\Models\Common\Item');
    }

    public function tax()
    {
        return $this->belongsTo('App\Models\Setting\Tax');
    }

    /**
     * Convert price to double.
     *
     * @param string $value
     */
    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = (float) $value;
    }

    /**
     * Convert total to double.
     *
     * @param string $value
     */
    public function setTotalAttribute($value)
    {
        $this->attributes['total'] = (float) $value;
    }

    /**
     * Convert tax to double.
     *
     * @param string $value
     */
    public function setTaxAttribute($value)
    {
        $this->attributes['tax'] = (float) $value;
    }
}
