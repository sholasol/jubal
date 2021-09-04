<?php


use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\ProfessionlComponet; 
use App\Http\Livewire\ServiceCategoryComponent; 
use App\Http\Livewire\JobsComponet;  
use App\Http\Livewire\JobDetailComponet;  
use App\Http\Livewire\ProfessionlListComponet;
use App\Http\Livewire\CategoryComponent; 
use App\Http\Livewire\HireProfessionalComponent; 


use App\Http\Livewire\Admin\AdminDashboardComponent; 
use App\Http\Livewire\Admin\JobsComponent; 
use App\Http\Livewire\Admin\ClientComponent;  
use App\Http\Livewire\Admin\ProfessionalComponent; 
use App\Http\Livewire\Admin\AdminServiceCategoryComponent; 
use App\Http\Livewire\Admin\AdminEditServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminPostJobComponent;   
use App\Http\Livewire\Admin\AdminAddServiceCatComponent;   
use App\Http\Livewire\Admin\AdminServicesComponent;      
use App\Http\Livewire\Admin\AddServiceCategoryComponent; 
use App\Http\Livewire\Admin\AdminAddServicesComponent; 
use App\Http\Livewire\Admin\AdminEditServicesComponent; 
use App\Http\Livewire\Admin\AdminJobCandidateComponent; 
use App\Http\Livewire\Admin\JobWAitingListComponent; //

use App\Http\Livewire\Client\ClientDashboardComponent;  
use App\Http\Livewire\Client\CleinProfessionalComponent; 
use App\Http\Livewire\Client\CleintJobsComponent; 
use App\Http\Livewire\Client\CleinPostJobComponent; 
use App\Http\Livewire\Client\ClientJobListComponent; 
use App\Http\Livewire\Client\ClientJobDoneComponent; 
use App\Http\Livewire\Client\ClientFundWalletComponent; 
use App\Http\Livewire\Client\ClientWalletComponent; 
use App\Http\Livewire\Client\ClientProfileComponent; 
use App\Http\Livewire\Client\ClientEditProfileComponent; 
use App\Http\Livewire\Client\ClientUpdateProfileComponent;  
use App\Http\Livewire\Client\ClientHireProfessionalComponent; 
use App\Http\Livewire\Client\ClientHiringComponent;  //
use App\Http\Livewire\Client\ClientMyHiringComponent; // 


use App\Http\Livewire\Professional\ProfessionalDashboardComponent; 
use Illuminate\Support\Facades\Route;
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// }); JobsComponet

Route::get('/', HomeComponent::class);
Route::get('/about', AboutComponent::class);
Route::get('/category', ServiceCategoryComponent::class);
Route::get('/contact', ContactComponent::class);
Route::get('/professional/{prof_id}', ProfessionlComponet::class)->name('professional');
Route::get('/category/{category_slug}', CategoryComponent::class)->name('category');
Route::get('/jobs', JobsComponet::class)->name('jobs');  
Route::get('/jobdetail/{job_id}', JobDetailComponet::class)->name('jobdetail');  //JobDetailComponet
Route::get('/profs', ProfessionlListComponet::class)->name('profs');  
Route::get('/hiring/{prof_id}', HireProfessionalComponent::class)->name('hiring');  


//client
Route::middleware(['auth:sanctum', 'verified',  'authclient'])->group(function() {
    Route::get('/client/dashboard', ClientDashboardComponent::class)->name('client.dashboard');
    Route::get('/client/jobs', CleintJobsComponent::class)->name('client.jobs');
    Route::get('/client/profs', CleinProfessionalComponent::class)->name('client.profs');  
    Route::get('/client/post-job', CleinPostJobComponent::class)->name('client.post-job'); 
    Route::get('/client/job-list', ClientJobListComponent::class)->name('client.job-list'); 
    Route::get('/client/job-done', ClientJobDoneComponent::class)->name('client.job-done'); 
    Route::get('/client/fund-wallet', ClientFundWalletComponent::class)->name('client.fund-wallet'); 
    Route::get('/client/wallet', ClientWalletComponent::class)->name('client.wallet'); 
    Route::get('/client/profile', ClientProfileComponent::class)->name('client.profile'); 
    Route::get('/client/editprofile', ClientEditProfileComponent::class)->name('client.editprofile'); 
    Route::get('/client/profile/edit/{user_id}', ClientUpdateProfileComponent::class)->name('client.updateprofile'); 
    Route::get('/client/hire/{pro_id}', ClientHireProfessionalComponent::class)->name('client.hiring'); 
    Route::get('/client/profile/myhiring', ClientMyHiringComponent::class)->name('client.myhiring'); //ClientMyHiringComponent
    Route::get('/client/hires', ClientHiringComponent::class)->name('client.hires'); //ClientHiringComponent
});

//Professionals
Route::middleware(['auth:sanctum', 'verified', 'authprofessional'])->group(function() {
    Route::get('/professional/dashboard', ProfessionalDashboardComponent::class)->name('professional.dashboard');
});

//Admin  
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function() {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard'); 
    Route::get('/admin/jobs', JobsComponent::class)->name('admin.jobs'); 
    Route::get('/admin/clients', ClientComponent::class)->name('admin.clients'); 
    Route::get('/admin/professionals', ProfessionalComponent::class)->name('admin.professionals');
    Route::get('/admin/service-category', AdminServiceCategoryComponent::class)->name('admin.service_category'); 
    Route::get('/admin/service-category/add', AddServiceCategoryComponent::class)->name('admin.add_service_category'); 
    Route::get('/admin/post-job/add', AdminPostJobComponent::class)->name('admin.post_job');  
    Route::get('/admin/category/edit/{category_id}', AdminEditServiceCategoryComponent::class)->name('admin.editcategory'); 
    Route::get('/admin/service-cat/add', AdminAddServiceCatComponent::class)->name('admin.add_service_cat');  
    Route::get('/admin/services', AdminServicesComponent::class)->name('admin.services'); 
    Route::get('/admin/service/add', AdminAddServicesComponent::class)->name('admin.add_service'); 
    Route::get('/admin/service/edit/{service_id}', AdminEditServicesComponent::class)->name('admin.editservice'); 
    Route::get('/admin/jobcandidate/{job_id}', AdminJobCandidateComponent::class)->name('admin.jobcandidate'); 
    Route::get('/admin/waitingjob', JobWAitingListComponent::class)->name('admin.waitingjob'); //
});
