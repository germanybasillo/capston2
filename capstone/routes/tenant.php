
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tenant\TenantLink;

Route::resource('/tenants', TenantLink::class);
Route::post('/tenant-store', [TenantLink::class, 'store'])->name('tenant-store');
Route::put('/tenants/{id}', [TenantLink::class, 'update'])->name('tenants.update');