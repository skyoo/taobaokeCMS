<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptOrDecryptImage;

class Coupon extends Model
{
  use EncryptOrDecryptImage;

  protected $table = "coupons";

  protected $fillable = [
    'goods_id','goods_name','image', 'image_encrypt','goods_info_link','category','taobaoke_click_link','price','sales','rate','money','seller_wangwang','seller_id','shop_name','flat','coupon_id','coupon_total','coupon_last','coupon_info','coupon_begin_date','coupon_end_date','coupon_link','coupon_promote_link','price_now','rate_sales','is_recommend','is_show','tao_kou_ling'
  ];

  protected $hidden = [
  ];

  public function setImageEncryptAttribute ($value)
  {
    $this->attributes['image_encrypt'] = $this->encryptImage($value);
  }
}
