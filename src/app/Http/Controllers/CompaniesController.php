<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function __construct()
    {
        $this->companies = new Companies();
    }

    /**
     * 一覧画面
     */
    public function index()
    {
        $companies = $this->companies->findAllCompaniess();
//prefucture
        return view('companies.index', compact('companies'));
    }

    /**
     * 登録画面
     */
    public function create(Request $request)
    {
        //都道府県のmodelからデータ取得してViewに渡す（Prefecture.php)
        return view('companies.create');
    }

    /**
     * 登録処理
     */
    public function store(Request $request)
    {
        $registerCompanies = $this->companies->InsertCompanies($request);
        return redirect()->route('companies.index');
    }

    /**
     * 編集
     */
    public function edit(Request $request,int $company_id)
{
    $companies = Companies::find($request->id);
    return view('companies.edit', ['companies' => $companies]);
}
    /**
     * 更新
     */
    public function update(Request $request, int $company_id)
{
    $companies = Companies::find($request->id);
    $companies->title = $request->title;
    $companies->content = $request->content;
    $companies->save();
    return redirect('/companies');
}

    /**　　
     * 削除
     */
    public function destroy()
        {
            Companies::find()->delete();
            return;
        }
}
