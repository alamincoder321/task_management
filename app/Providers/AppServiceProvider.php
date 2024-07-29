<?php

namespace App\Providers;

use App\Models\CompanyProfile;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $company = CompanyProfile::first();
        App::setLocale($company->language);
        view()->share('company', $company);
    }
}
