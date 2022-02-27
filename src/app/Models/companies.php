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
    protected $fillable = [
        'book_id',
        'user_id',
        'category_id',
        'book_name',
        'created_at',
        'updated_at'
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
        // リクエストデータを基に管理マスターユーザーに登録する
        return $this->create([
            'companies_name'             => $request->companies_name,
        ]);
    }
}
