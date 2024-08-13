<?php
use App\Http\Controllers\{
    DashboardController,
    OrderController,
    InvoiceController,
    ChallanController,
    QuotationController,
    EstimateController,
    ProductController,
    StockController,
    ProductPurchaseController,
    CategoryController,
    SubCategoryController,
    VariantController,
    AttributeController,
    ManufacturingController,
    PurchaseController,
    AccountController,
    PeopleController,
    ReportController,
    AdminUserController,
    SettingsController
};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Order Management Routes
Route::prefix('orders')->group(function () {
    Route::get('/', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/manual-invoice', [InvoiceController::class, 'manualInvoice'])->name('manual.invoice');
    Route::get('/manual-challan', [ChallanController::class, 'manualChallan'])->name('manual.challan');
});

// Quotation Routes
Route::prefix('quotations')->group(function () {
    Route::get('/', [QuotationController::class, 'index'])->name('quotations.index');
    Route::get('/estimate', [EstimateController::class, 'estimate'])->name('estimate.index');
});

// Product Routes
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/in-stock', [StockController::class, 'inStock'])->name('products.in_stock');
    Route::get('/purchase', [ProductPurchaseController::class, 'purchase'])->name('products.purchase');
});

// Product Management Routes
Route::prefix('product-management')->group(function () {
    Route::get('/all-products', [ProductController::class, 'allProducts'])->name('product_management.all_products');
    Route::get('/category', [CategoryController::class, 'index'])->name('product_management.category');
    Route::get('/sub-category', [SubCategoryController::class, 'index'])->name('product_management.sub_category');
    Route::get('/sub-sub-category', [SubCategoryController::class, 'subSubCategory'])->name('product_management.sub_sub_category');
    Route::get('/variant', [VariantController::class, 'index'])->name('product_management.variant');
    Route::get('/attribute', [AttributeController::class, 'index'])->name('product_management.attribute');
});

// Manufacturing Routes


Route::prefix('manufacturing')->group(function () {
    Route::get('/manufacture', [ManufacturingController::class, 'manufacture'])->name('manufacturing.manufacture');
});

// Purchase Management Routes
Route::prefix('purchase-management')->group(function () {
    Route::get('/materials', [PurchaseController::class, 'materialsPurchase'])->name('purchase_management.materials');
    Route::get('/product-purchase', [ProductPurchaseController::class, 'purchase'])->name('purchase_management.product_purchase');
});

// Accounts Routes
Route::prefix('accounts')->group(function () {
    Route::get('/pay-slip', [AccountController::class, 'paySlip'])->name('accounts.pay_slip');
    Route::get('/credit', [AccountController::class, 'credit'])->name('accounts.credit');
    Route::get('/debit', [AccountController::class, 'debit'])->name('accounts.debit');
    Route::get('/due', [AccountController::class, 'due'])->name('accounts.due');
    Route::get('/fund-transfer', [AccountController::class, 'fundTransfer'])->name('accounts.fund_transfer');
    Route::get('/account-purpose', [AccountController::class, 'accountPurpose'])->name('accounts.account_purpose');
});

// People Management Routes
Route::prefix('people-management')->group(function () {
    Route::get('/parties', [PeopleController::class, 'parties'])->name('people_management.parties');
    Route::get('/manufacturer', [PeopleController::class, 'manufacturer'])->name('people_management.manufacturer');
    Route::get('/supplier', [PeopleController::class, 'supplier'])->name('people_management.supplier');
    Route::get('/vendor', [PeopleController::class, 'vendor'])->name('people_management.vendor');
    Route::get('/employee', [PeopleController::class, 'employee'])->name('people_management.employee');
});

// Report Management Routes
Route::prefix('reports')->group(function () {
    Route::get('/sales', [ReportController::class, 'sales'])->name('reports.sales');
    Route::get('/items-wise-sales', [ReportController::class, 'itemsWiseSales'])->name('reports.items_wise_sales');
    Route::get('/purchase', [ReportController::class, 'purchase'])->name('reports.purchase');
    Route::get('/day-book', [ReportController::class, 'dayBook'])->name('reports.day_book');
    Route::get('/party-report', [ReportController::class, 'partyReport'])->name('reports.party_report');
    Route::get('/manufacturing', [ReportController::class, 'manufacturingReport'])->name('reports.manufacturing_report');
    Route::get('/manufacturer-report', [ReportController::class, 'manufacturerReport'])->name('reports.manufacturer_report');
    Route::get('/stock', [ReportController::class, 'stockReport'])->name('reports.stock_report');
    Route::get('/low-stock', [ReportController::class, 'lowStockReport'])->name('reports.low_stock_report');
    Route::get('/expense', [ReportController::class, 'expenseReport'])->name('reports.expense_report');
    Route::get('/profit-loss', [ReportController::class, 'profitLossReport'])->name('reports.profit_loss_report');
    Route::get('/account', [ReportController::class, 'accountReport'])->name('reports.account_report');
    Route::get('/vendor-report', [ReportController::class, 'vendorReport'])->name('reports.vendor_report');
    Route::get('/quotation-report', [ReportController::class, 'quotationReport'])->name('reports.quotation_report');
    Route::get('/employee-report', [ReportController::class, 'employeeReport'])->name('reports.employee_report');
    Route::get('/reports/vendor', [ReportController::class, 'vendorReport'])->name('reports.vendorReport');

});

// Admin Users Routes
Route::prefix('admin-users')->group(function () {
    Route::get('/super-admin', [AdminUserController::class, 'superAdmin'])->name('admin_users.super_admin');
    Route::get('/sub-admin', [AdminUserController::class, 'subAdmin'])->name('admin_users.sub_admin');
    Route::get('/manager', [AdminUserController::class, 'manager'])->name('admin_users.manager');
    Route::get('/sales', [AdminUserController::class, 'sales'])->name('admin_users.sales');
});

// Settings Routes
Route::prefix('settings')->group(function () {
    Route::get('/general', [SettingsController::class, 'generalSettings'])->name('settings.general');
    Route::get('/footer', [SettingsController::class, 'footerSettings'])->name('settings.footer');
    Route::get('/color', [SettingsController::class, 'colorSettings'])->name('settings.color');
    Route::get('/city', [SettingsController::class, 'city'])->name('settings.city');
    Route::get('/courier', [SettingsController::class, 'courier'])->name('settings.courier');
    Route::get('/comment', [SettingsController::class, 'comment'])->name('settings.comment');
    Route::get('/delivery-charge', [SettingsController::class, 'deliveryCharge'])->name('settings.delivery_charge');
    Route::get('/emergency-notice', [SettingsController::class, 'emergencyNotice'])->name('settings.emergency_notice');
});
