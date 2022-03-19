<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\Base\Prefecture;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function __construct()
    {
        $this->companies = new Companies();
        $this->prefecture = new Prefecture();
    }

    /**
     * 一覧画面
     */
    public function index()
    {
        $companies = $this->companies->findAllCompaniess();
        $prefectures_collection = $this->prefecture->select('id', 'display_name')->get();
        $prefectures = $prefectures_collection->mapWithkeys(function ($prefecture) {
            return [$prefecture['id'] => $prefecture['display_name']];
        });

        return view('companies.index', compact('companies', 'prefectures'));
    }

    /**
     * 登録画面
     */
    public function create(Request $request)
    {
        $prefectures_collection = $this->prefecture->select('id', 'display_name')->get();
        $prefectures = $prefectures_collection->mapWithkeys(function ($prefecture) {
            return [$prefecture['id'] => $prefecture['display_name']];
        });
        //都道府県のmodelからデータ取得してViewに渡す（Prefecture.php)
        return view('companies.create', compact('prefectures'));
    }

    /**
     * 登録処理
     */
    public function store(Request $request)
    {
        $registerCompanies = $this->companies->InsertCompanies($request);
        return redirect()->route('companies.index');


        /**画像アップロード */
        $this->validate($request, Member::$rules);

        if ($file = $request->profile_img) {
            $fileName = time() . $file->getClientOriginalName();
            $target_path = public_path('uploads/');
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }

        $img->image = $fileName;
        $img->save();

        return redirect()->route('admin.members');
    }

    public function first()
    {
        $imgs = Img::orderBy('created_at', 'desc')->where('year', '1')->get();
        return view('admin.imgs.first', ['imgs' => $imgs]);
    }


    /**
     * 編集
     */
    public function edit(Request $request, int $company_id)
    {
        $company = Companies::find($company_id);
        $prefectures_collection = $this->prefecture->select('id', 'display_name')->get();
        $prefectures = $prefectures_collection->mapWithkeys(function ($prefecture) {
            return [$prefecture['id'] => $prefecture['display_name']];
        });
        return view('companies.edit', compact('company', 'company_id', 'prefectures'));

    }
    /**
     * 更新
     */
    public function update(Request $request, int $company_id)
    {
        $companies = Companies::find($company_id);
        $companies->save();
        return redirect('/companies');
    }

    /**
     * 削除
     */
    public function destroy(Request $request, int $company_id)
    {
        Companies::destroy($company_id);
        return redirect('/companies');
    }



}
