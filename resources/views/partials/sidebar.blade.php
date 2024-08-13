<!-- resources/views/partials/sidebar.blade.php -->
<!-- resources/views/partials/sidebar.blade.php -->
<nav class="navbar ps-2 navbar-expand-md navbar-light bg-grey sidebar bg-grey">
    <div class="" id="sidebarMenu">
        <ul class="navbar-nav flex-column ">
            <div>
                <img src="{{ asset('images/dummy-logo-5b.png') }}" alt="Logo" class="p-4 pt-0 img-fluid">

            </div>

            <!-- Dashboard -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
            </li>

            <!-- Order Manage -->
<li class="nav-item">
    <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#orderManageSubmenu" data-bs-toggle="collapse" aria-expanded="{{ request()->routeIs('orders.*') || request()->routeIs('manual.invoice') || request()->routeIs('manual.challan') ? 'true' : 'false' }}">
        <span><i class="fas fa-shopping-cart"></i> Order Manage</span>
        <i class="fa-solid fa-circle-chevron-down"></i>
    </a>
    <ul class="collapse bg-white list-unstyled {{ request()->routeIs('orders.*') || request()->routeIs('manual.invoice') || request()->routeIs('manual.challan') ? 'show' : '' }}" id="orderManageSubmenu">
        <li><a class="nav-link ps-5 {{ request()->routeIs('orders.index') ? 'active' : '' }}" href="{{ route('orders.index') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Orders</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('manual.invoice') ? 'active' : '' }}" href="{{ route('manual.invoice') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Manual Invoice</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('manual.challan') ? 'active' : '' }}" href="{{ route('manual.challan') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Manual Challan</a></li>
    </ul>
</li>

           <!-- Quotation -->
<li class="nav-item">
    <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#quotationManageSubmenu" data-bs-toggle="collapse" aria-expanded="{{ request()->routeIs('quotations.*') || request()->routeIs('estimate.index') ? 'true' : 'false' }}">
        <span><i class="fas fa-file-alt"></i> Quotation</span>
        <i class="fa-solid fa-circle-chevron-down"></i>
    </a>
    <ul class="collapse bg-white list-unstyled {{ request()->routeIs('quotations.*') || request()->routeIs('estimate.index') ? 'show' : '' }}" id="quotationManageSubmenu">
        <li><a class="nav-link ps-5 {{ request()->routeIs('quotations.index') ? 'active' : '' }}" href="{{ route('quotations.index') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Quotation</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('estimate.index') ? 'active' : '' }}" href="{{ route('estimate.index') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Estimate</a></li>
    </ul>
</li>

            <!-- Product Manage -->
<li class="nav-item">
    <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#productManageSubmenu" data-bs-toggle="collapse" aria-expanded="{{ request()->routeIs('products.*') ? 'true' : 'false' }}">
        <span><i class="fas fa-box"></i> Product Manage</span>
        <i class="fa-solid fa-circle-chevron-down"></i>
    </a>
    <ul class="collapse bg-white list-unstyled {{ request()->routeIs('products.*') ? 'show' : '' }}" id="productManageSubmenu">
        <li><a class="nav-link ps-5 {{ request()->routeIs('products.index') ? 'active' : '' }}" href="{{ route('products.index') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> All Products</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('products.in_stock') ? 'active' : '' }}" href="{{ route('products.in_stock') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Stock</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('products.purchase') ? 'active' : '' }}" href="{{ route('products.purchase') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Purchase</a></li>
    </ul>
</li>


  <!-- Product Manage -->
<li class="nav-item">
    <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#productSubmenu" data-bs-toggle="collapse" aria-expanded="{{ request()->routeIs('product_management.*') ? 'true' : 'false' }}">
        <span><i class="fas fa-cube"></i> Product</span>
        <i class="fa-solid fa-circle-chevron-down"></i>
    </a>
    <ul class="collapse bg-white list-unstyled {{ request()->routeIs('product_management.*') ? 'show' : '' }}" id="productSubmenu">
        <li><a class="nav-link ps-5 {{ request()->routeIs('product_management.all_products') ? 'active' : '' }}" href="{{ route('product_management.all_products') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> All Products</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('product_management.category') ? 'active' : '' }}" href="{{ route('product_management.category') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Category</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('product_management.sub_category') ? 'active' : '' }}" href="{{ route('product_management.sub_category') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Sub Category</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('product_management.sub_sub_category') ? 'active' : '' }}" href="{{ route('product_management.sub_sub_category') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Sub Sub Category</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('product_management.variant') ? 'active' : '' }}" href="{{ route('product_management.variant') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Variant</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('product_management.attribute') ? 'active' : '' }}" href="{{ route('product_management.attribute') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Attribute</a></li>
    </ul>
</li>


        <!-- Manufacturing -->
<li class="nav-item">
    <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#ManufacturingSubmenu" data-bs-toggle="collapse" aria-expanded="{{ request()->routeIs('manufacturing.*') ? 'true' : 'false' }}">
        <span><i class="fas fa-industry"></i> Manufacturing</span>
        <i class="fa-solid fa-circle-chevron-down ms-2"></i>
    </a>
    <ul class="collapse bg-white list-unstyled {{ request()->routeIs('manufacturing.*') ? 'show' : '' }}" id="ManufacturingSubmenu">
        <li><a class="nav-link ps-5 {{ request()->routeIs('manufacturing.manufacture') ? 'active' : '' }}" href="{{ route('manufacturing.manufacture') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Manufacture</a></li>
    </ul>
</li>


           <!-- Purchase Manage -->
<li class="nav-item">
    <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#purchaseManageSubmenu" data-bs-toggle="collapse" aria-expanded="{{ request()->routeIs('purchase_management.*') ? 'true' : 'false' }}">
        <span><i class="fas fa-clipboard-check"></i> Purchase Manage</span>
        <i class="fa-solid fa-circle-chevron-down ms-2"></i>
    </a>
    <ul class="collapse bg-white list-unstyled {{ request()->routeIs('purchase_management.*') ? 'show' : '' }}" id="purchaseManageSubmenu">
        <li><a class="nav-link ps-5 {{ request()->routeIs('purchase_management.materials') ? 'active' : '' }}" href="{{ route('purchase_management.materials') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Materials Purchase</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('purchase_management.product_purchase') ? 'active' : '' }}" href="{{ route('purchase_management.product_purchase') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Product Purchase</a></li>
    </ul>
</li>


            <!-- Accounts -->
<li class="nav-item">
    <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#accountsSubmenu" data-bs-toggle="collapse" aria-expanded="{{ request()->routeIs('accounts.*') ? 'true' : 'false' }}">
        <span><i class="fas fa-money-check-alt"></i> Accounts</span>
        <i class="fa-solid fa-circle-chevron-down ms-2"></i>
    </a>
    <ul class="collapse bg-white list-unstyled {{ request()->routeIs('accounts.*') ? 'show' : '' }}" id="accountsSubmenu">
        <li><a class="nav-link ps-5 {{ request()->routeIs('accounts.pay_slip') ? 'active' : '' }}" href="{{ route('accounts.pay_slip') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Pay Slip</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('accounts.credit') ? 'active' : '' }}" href="{{ route('accounts.credit') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Credit</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('accounts.debit') ? 'active' : '' }}" href="{{ route('accounts.debit') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Debit</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('accounts.due') ? 'active' : '' }}" href="{{ route('accounts.due') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Due</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('accounts.fund_transfer') ? 'active' : '' }}" href="{{ route('accounts.fund_transfer') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Fund Transfer</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('accounts.account_purpose') ? 'active' : '' }}" href="{{ route('accounts.account_purpose') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Account Purpose</a></li>
    </ul>
</li>


            <!-- People Manage -->
<li class="nav-item">
    <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#peopleManageSubmenu" data-bs-toggle="collapse" aria-expanded="{{ request()->routeIs('people_management.*') ? 'true' : 'false' }}">
        <span><i class="fas fa-users"></i> People Manage</span>
        <i class="fa-solid fa-circle-chevron-down ms-2"></i>
    </a>
    <ul class="collapse bg-white list-unstyled {{ request()->routeIs('people_management.*') ? 'show' : '' }}" id="peopleManageSubmenu">
        <li><a class="nav-link ps-5 {{ request()->routeIs('people_management.parties') ? 'active' : '' }}" href="{{ route('people_management.parties') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> All Party</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('people_management.manufacturer') ? 'active' : '' }}" href="{{ route('people_management.manufacturer') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Manufacturer</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('people_management.supplier') ? 'active' : '' }}" href="{{ route('people_management.supplier') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Supplier</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('people_management.vendor') ? 'active' : '' }}" href="{{ route('people_management.vendor') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Vendor</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('people_management.employee') ? 'active' : '' }}" href="{{ route('people_management.employee') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Employee</a></li>
    </ul>
</li>


            <!-- Reports -->
<li class="nav-item">
    <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#reportsSubmenu" data-bs-toggle="collapse" aria-expanded="{{ request()->routeIs('reports.*') ? 'true' : 'false' }}">
        <span><i class="fas fa-chart-line"></i> Reports</span>
        <i class="fa-solid fa-circle-chevron-down ms-2"></i>
    </a>
    <ul class="collapse bg-white list-unstyled {{ request()->routeIs('reports.*') ? 'show' : '' }}" id="reportsSubmenu">
        <li><a class="nav-link ps-5 {{ request()->routeIs('reports.sales') ? 'active' : '' }}" href="{{ route('reports.sales') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Sales Report</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('reports.items_wise_sales') ? 'active' : '' }}" href="{{ route('reports.items_wise_sales') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Items Wise Sales</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('reports.purchase') ? 'active' : '' }}" href="{{ route('reports.purchase') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Purchase Report</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('reports.day_book') ? 'active' : '' }}" href="{{ route('reports.day_book') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Day Book</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('reports.party_report') ? 'active' : '' }}" href="{{ route('reports.party_report') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Party Report</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('reports.manufacturing_report') ? 'active' : '' }}" href="{{ route('reports.manufacturing_report') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Manufacturing Report</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('reports.manufacturer_report') ? 'active' : '' }}" href="{{ route('reports.manufacturer_report') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Manufacturer Report</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('reports.stock_report') ? 'active' : '' }}" href="{{ route('reports.stock_report') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Stock Report</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('reports.low_stock_report') ? 'active' : '' }}" href="{{ route('reports.low_stock_report') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Low Stock Report</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('reports.expense_report') ? 'active' : '' }}" href="{{ route('reports.expense_report') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Expense Report</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('reports.profit_loss_report') ? 'active' : '' }}" href="{{ route('reports.profit_loss_report') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Profit & Loss Report</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('reports.account_report') ? 'active' : '' }}" href="{{ route('reports.account_report') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Account Report</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('reports.vendorReport') ? 'active' : '' }}" href="{{ route('reports.vendorReport') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Vendor Report</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('reports.quotation_report') ? 'active' : '' }}" href="{{ route('reports.quotation_report') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Quotation Report</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('reports.employee_report') ? 'active' : '' }}" href="{{ route('reports.employee_report') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Employee Report</a></li>
    </ul>
</li>


          <!-- Admin Users -->
<li class="nav-item">
    <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#adminUsersSubmenu" data-bs-toggle="collapse" aria-expanded="{{ request()->routeIs('admin_users.*') ? 'true' : 'false' }}">
        <span><i class="fas fa-user-shield"></i> Admin Users</span>
        <i class="fa-solid fa-circle-chevron-down ms-2"></i>
    </a>
    <ul class="collapse bg-white list-unstyled {{ request()->routeIs('admin_users.*') ? 'show' : '' }}" id="adminUsersSubmenu">
        <li><a class="nav-link ps-5 {{ request()->routeIs('admin_users.super_admin') ? 'active' : '' }}" href="{{ route('admin_users.super_admin') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Super Admin</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('admin_users.sub_admin') ? 'active' : '' }}" href="{{ route('admin_users.sub_admin') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Sub Admin</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('admin_users.manager') ? 'active' : '' }}" href="{{ route('admin_users.manager') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Manager</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('admin_users.sales') ? 'active' : '' }}" href="{{ route('admin_users.sales') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Sales</a></li>
    </ul>
</li>

            <!-- Settings -->
<li class="nav-item">
    <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#settingsSubmenu" data-bs-toggle="collapse" aria-expanded="{{ request()->routeIs('settings.*') ? 'true' : 'false' }}">
        <span><i class="fas fa-cogs"></i> Settings</span>
        <i class="fa-solid fa-circle-chevron-down ms-2"></i>
    </a>
    <ul class="collapse bg-white list-unstyled {{ request()->routeIs('settings.*') ? 'show' : '' }}" id="settingsSubmenu">
        <li><a class="nav-link ps-5 {{ request()->routeIs('settings.general') ? 'active' : '' }}" href="{{ route('settings.general') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> General Settings</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('settings.footer') ? 'active' : '' }}" href="{{ route('settings.footer') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Footer Settings</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('settings.color') ? 'active' : '' }}" href="{{ route('settings.color') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Color Settings</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('settings.city') ? 'active' : '' }}" href="{{ route('settings.city') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> City</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('settings.courier') ? 'active' : '' }}" href="{{ route('settings.courier') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Courier</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('settings.comment') ? 'active' : '' }}" href="{{ route('settings.comment') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Comment</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('settings.delivery_charge') ? 'active' : '' }}" href="{{ route('settings.delivery_charge') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Delivery Charge</a></li>
        <li><a class="nav-link ps-5 {{ request()->routeIs('settings.emergency_notice') ? 'active' : '' }}" href="{{ route('settings.emergency_notice') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i> Emergency Notice</a></li>
    </ul>
</li>

        </ul>
    </div>
</nav>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        var collapseElements = document.querySelectorAll('.collapse');

        collapseElements.forEach(function (collapseElement) {
            collapseElement.addEventListener('shown.bs.collapse', function () {
                this.previousElementSibling.classList.add('expanded');
            });

            collapseElement.addEventListener('hidden.bs.collapse', function () {
                this.previousElementSibling.classList.remove('expanded');
            });
        });
    });
</script>
