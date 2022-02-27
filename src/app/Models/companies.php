<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    use HasFactory;

    protected $table = 'companies';

    // テーブルに関連付ける主キー
    protected $primaryKey = 'companies_id';

    // 登録・更新可能なカラムの指定
    protected $guarded = [
        "id",
    ];

    /**
     * 一覧画面表示用にbooksテーブルから全てのデータを取得
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
