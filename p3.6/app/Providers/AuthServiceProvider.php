<?php 

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()

    // view for auth login 

    {

    Fortify::loginView(function ()  
    {   

        return view ('auth.login');     
    });  

    //Indicate which view to be used for registration 

    Fortify::RegisterView (function () { 

     return view ('auth.register');    
    
    }) 


    { 
        $this->registerPolicies()

        //
    }

