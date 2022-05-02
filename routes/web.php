<?php

use App\Http\Livewire\Admin;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->prefix('admin')->group(function(){
    Route::get('/dashboard', Admin\Dashboard::class)->name('admin.dashboard');


    Route::get('/clients', Admin\Clients\Index::class)->name('admin.clients.index');
    Route::get('/clients/create', Admin\Clients\Create::class)->name('admin.clients.create');
    Route::get('/clients/{id}/edit', Admin\Clients\Edit::class)->name('admin.clients.edit');

    Route::get('/contacts', Admin\Contacts\Index::class)->name('admin.contacts.index');

    Route::get('/suppliers', Admin\Suppliers\Index::class)->name('admin.suppliers.index');
    Route::get('/suppliers/create', Admin\Suppliers\Create::class)->name('admin.suppliers.create');
    Route::get('/suppliers/{id}/edit', Admin\Suppliers\Edit::class)->name('admin.suppliers.edit');

    Route::get('/partners', Admin\Partners\Index::class)->name('admin.partners.index');
    Route::get('/partners/create', Admin\Partners\Create::class)->name('admin.partners.create');
    Route::get('/partners/{id}/edit', Admin\Partners\Edit::class)->name('admin.partners.edit');

    Route::get('/experiences', Admin\Experiences\Index::class)->name('admin.experiences.index');
    Route::get('/experiences/create', Admin\Experiences\Create::class)->name('admin.experiences.create');
    Route::get('/experiences/{id}/edit', Admin\Experiences\Edit::class)->name('admin.experiences.edit');

    Route::get('/invoices', Admin\Invoices\Index::class)->name('admin.invoices.index');
    Route::get('/invoices/create', Admin\Invoices\Create::class)->name('admin.invoices.create');
    Route::get('/invoices/{id}/edit', Admin\Invoices\Edit::class)->name('admin.invoices.edit');

    Route::get('/payments', Admin\Payments\Index::class)->name('admin.payments.index');
    Route::get('/payments/create', Admin\Payments\Create::class)->name('admin.payments.create');
    Route::get('/payments/{id}/edit', Admin\Payments\Edit::class)->name('admin.payments.edit');

    Route::get('/prices', Admin\Prices\Index::class)->name('admin.prices.index');
    Route::get('/prices/create', Admin\Prices\Create::class)->name('admin.prices.create');
    Route::get('/prices/{id}/edit', Admin\Prices\Edit::class)->name('admin.prices.edit');

    Route::get('/project_categories', Admin\ProjectCategories\Index::class)->name('admin.project_categories.index');
    Route::get('/project_categories/create', Admin\ProjectCategories\Create::class)->name('admin.project_categories.create');
    Route::get('/project_categories/{id}/edit', Admin\ProjectCategories\Edit::class)->name('admin.project_categories.edit');

    Route::get('/projects', Admin\Projects\Index::class)->name('admin.projects.index');
    Route::get('/projects/create', Admin\Projects\Create::class)->name('admin.projects.create');
    Route::get('/projects/{id}/edit', Admin\Projects\Edit::class)->name('admin.projects.edit');

    Route::get('/quotations', Admin\Quotations\Index::class)->name('admin.quotations.index');
    Route::get('/quotations/create', Admin\Quotations\Create::class)->name('admin.quotations.create');
    Route::get('/quotations/{id}/edit', Admin\Quotations\Edit::class)->name('admin.quotations.edit');

    Route::get('/services', Admin\Services\Index::class)->name('admin.services.index');
    Route::get('/services/create', Admin\Services\Create::class)->name('admin.services.create');
    Route::get('/services/{id}/edit', Admin\Services\Edit::class)->name('admin.services.edit');

    Route::get('/skills', Admin\Skills\Index::class)->name('admin.skills.index');
    Route::get('/skills/create', Admin\Skills\Create::class)->name('admin.skills.create');
    Route::get('/skills/{id}/edit', Admin\Skills\Edit::class)->name('admin.skills.edit');

    Route::get('/service_categories', Admin\ServiceCategories\Index::class)->name('admin.service_categories.index');
    Route::get('/service_categories/create', Admin\ServiceCategories\Create::class)->name('admin.service_categories.create');
    Route::get('/service_categories/{id}/edit', Admin\ServiceCategories\Edit::class)->name('admin.service_categories.edit');

    Route::get('/newsletters', Admin\Newsletters\Index::class)->name('admin.newsletters.index');


});
