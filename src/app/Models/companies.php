<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class companies extends Model
{
    //use HasFactory;


    protected $fillable = [
        'name',
        'email',
        'postcode',
        'prefecture_id',
        'city',
        'local',
        'street_address',
        'business_hour',
        'regular_holiday',
        'phone',
        'fax',
        'url',
        'license_number',
        'image',
    ];

    protected $table = 'companies';


    // 登録・更新可能なカラムの指定


    /**
     * 一覧画面表示用にcompaniesテーブルから全てのデータを取得
     */
    public function findAllCompaniess()
    {
        return Companies::all();
    }

    public function InsertCompanies($request)
    {
        // dd($request->all());
        // リクエストデータを基に管理マスターユーザーに登録する
        return $this->fill($request->all())->save();
    }




}