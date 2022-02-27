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

        return view('companies.index', compact('companies'));
    }

    /**
     * 登録画面
     */
    public function create(Request $request)
    {
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
}
