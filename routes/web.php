<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\CvAdminController;
use App\Http\Controllers\Admin\FaqsAdminController;
use App\Http\Controllers\Admin\BlogsAdminController;
use App\Http\Controllers\Admin\ContactAdminController;
use App\Http\Controllers\Admin\PartnerAdminController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\JobVacancyAdminController;
use App\Http\Controllers\Admin\PartnerReqAdminController;
use App\Http\Controllers\Admin\PortfoliosAdminController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\PartnerRequestController;

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::post('/', [ContactController::class, 'store'])->name('index.store');

Route::get('/jobs', [JobsController::class, 'index'])->name('user.jobs.index');
Route::post('/jobs/cv-upload', [JobsController::class, 'store'])->name('user.jobs.store');
Route::post('/jobs/{job}/apply', [JobsController::class, 'applicantStore'])->name('applicants.store');

Route::get('/faqs', [FaqsController::class, 'index'])->name('user.faqs.index');
Route::post('/faqs/store', [FaqsController::class, 'store'])->name('user.faqs.store');

Route::get('/blogs', [BlogsController::class, 'index'])->name('user.blogs.index');
Route::get('blogs/{slug}/show', [BlogsController::class, 'show'])->name('user-blog-show');

Route::post('/partner-request', [PartnerRequestController::class, 'store'])->name('user.partnerReq');

Route::get('testing', function () {
    return view('testing');
});

// Route::get('/dashboard', function () {
//     return view('admin/dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::resource('/dashboard', DashboardAdminController::class)->middleware(['auth', 'verified']);
Route::post('/dashboard/job/store', [DashboardAdminController::class, 'jobCreate'])->name('newJob.store');
Route::post('/dashboard/partner/store', [DashboardAdminController::class, 'addPartner'])->name('addPartner.store');
Route::post('/dashboard/blog/status', [DashboardAdminController::class, 'createNewBlog'])->name('createBlog.store');

Route::resource('/admin/jobs', JobVacancyAdminController::class);
Route::put('admin/job/{applicant}/status', [JobVacancyAdminController::class, 'updateStatusApp'])->name('applicant.updateStatus');
Route::delete('/admin/job/applicants/{applicant}', [JobVacancyAdminController::class, 'deleteApplicant'])->name('applicant.delete');

Route::resource('/admin/portfolios', PortfoliosAdminController::class);

Route::resource('/admin/faqs', FaqsAdminController::class);
Route::patch('/faqs/{faq}/status', [FaqsAdminController::class, 'updateStatus'])->name('faqs.updateStatus');
Route::patch('/faqs/{faq}/answer', [FaqsAdminController::class, 'answerQuestion'])->name('faq.answer');

Route::resource('admin/blogs', BlogsAdminController::class);
Route::patch('blogs/{id}/toggle-featured', [BlogsAdminController::class, 'toggleFeatured'])->name('blogs.toggleFeatured');

Route::resource('admin/contact', ContactAdminController::class);

Route::resource('admin/partner', PartnerAdminController::class);

Route::resource('admin/partnerReq', PartnerReqAdminController::class);
Route::put('partnerReq/{id}/status', [PartnerReqAdminController::class, 'updateStatus'])->name('partner-request.updateStatus');

Route::resource('admin/cv', CvAdminController::class);
Route::put('/admin/{id}/status', [CvAdminController::class, 'updateStatus'])->name('cv.updateStatus');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
