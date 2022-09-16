<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * Display products page
     *
     * @return \Illuminate\View\View
     */
    public function products()
    {
        return view('pages.products');
    }

    /**
     * Display orders page
     *
     * @return \Illuminate\View\View
     */
    public function orders()
    {
        return view('pages.orders');
    }

    /**
     * Display transactions page
     *
     * @return \Illuminate\View\View
     */
    public function transactions()
    {
        return view('pages.transactions');
    }

    /**
     * Display customers page
     *
     * @return \Illuminate\View\View
     */
    public function customers()
    {
        return view('pages.customers');
    }

    /**
     * Display reports page
     *
     * @return \Illuminate\View\View
     */
    public function reports()
    {
        return view('pages.reports');
    }
}
