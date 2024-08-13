<!-- resources/views/partials/sidebar.blade.php -->
<nav class="navbar ps-2 navbar-light bg-grey sidebar bg-grey">
    <div id="sidebarMenu">
        <ul class="navbar-nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <img src="{{ asset('images/dummy-logo-5b2.png') }}" alt="Logo" class="img-fluid">
                </a>
            </li>

            <!-- Dashboard -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}" data-bs-toggle="tooltip" title="Dashboard">
                    <i class="fas fs-5 fa-tachometer-alt"></i>
                </a>
            </li>

            <!-- Order Manage -->
            <li class="nav-item">
                <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#orderManageSubmenu" data-bs-toggle="collapse" data-bs-toggle="tooltip" title="Order Manage">
                    <span><i class="fas fa-shopping-cart"></i></span>
                </a>
                <div id="orderManageSubmenu" class="collapse">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('orders.index') }}">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('manual.invoice') }}">Manual Invoice</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('manual.challan') }}">Manual Challan</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Quotations -->
            <li class="nav-item">
                <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#quotationsSubmenu" data-bs-toggle="collapse" data-bs-toggle="tooltip" title="Quotations">
                    <span><i class="fas fa-file-alt"></i></span>
                </a>
                <div id="quotationsSubmenu" class="collapse">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('quotations.index') }}">Quotations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('estimate.index') }}">Estimates</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Products -->
            <li class="nav-item">
                <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#productsSubmenu" data-bs-toggle="collapse" data-bs-toggle="tooltip" title="Products">
                    <span><i class="fas fa-box"></i></span>
                </a>
                <div id="productsSubmenu" class="collapse">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.in_stock') }}">In Stock</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.purchase') }}">Purchase</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Product Management -->
            <li class="nav-item">
                <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#productManagementSubmenu" data-bs-toggle="collapse" data-bs-toggle="tooltip" title="Product Management">
                    <span><i class="fas fa-cogs"></i></span>
                </a>
                <div id="productManagementSubmenu" class="collapse">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('product_management.all_products') }}">All Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('product_management.category') }}">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('product_management.sub_category') }}">Sub Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('product_management.sub_sub_category') }}">Sub Sub Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('product_management.variant') }}">Variant</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('product_management.attribute') }}">Attribute</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Manufacturing -->
            <li class="nav-item">
                <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#manufacturingSubmenu" data-bs-toggle="collapse" data-bs-toggle="tooltip" title="Manufacturing">
                    <span><i class="fas fa-industry"></i></span>
                </a>
                <div id="manufacturingSubmenu" class="collapse">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('manufacturing.manufacture') }}">Manufacture</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Manage Purchase -->
            <li class="nav-item">
                <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#managePurchaseSubmenu" data-bs-toggle="collapse" data-bs-toggle="tooltip" title="Manage Purchase">
                    <span><i class="fas fa-shopping-basket"></i></span>
                </a>
                <div id="managePurchaseSubmenu" class="collapse">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('purchase_management.materials') }}">Materials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('purchase_management.product_purchase') }}">Product Purchase</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Accounts -->
            <li class="nav-item">
                <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#accountsSubmenu" data-bs-toggle="collapse" data-bs-toggle="tooltip" title="Accounts">
                    <span><i class="fas fa-wallet"></i></span>
                </a>
                <div id="accountsSubmenu" class="collapse">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('accounts.pay_slip') }}">Pay Slip</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('accounts.credit') }}">Credit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('accounts.debit') }}">Debit</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Suppliers -->
            <li class="nav-item">
                <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#suppliersSubmenu" data-bs-toggle="collapse" data-bs-toggle="tooltip" title="Suppliers">
                    <span><i class="fas fa-truck"></i></span>
                </a>
                <div id="suppliersSubmenu" class="collapse">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('suppliers.index') }}">Suppliers</a> --}}
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Customers -->
            <li class="nav-item">
                <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#customersSubmenu" data-bs-toggle="collapse" data-bs-toggle="tooltip" title="Customers">
                    <span><i class="fas fa-user"></i></span>
                </a>
                <div id="customersSubmenu" class="collapse">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('customers.index') }}">Customers</a> --}}
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Settings -->
            <li class="nav-item">
                <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#settingsSubmenu" data-bs-toggle="collapse" data-bs-toggle="tooltip" title="Settings">
                    <span><i class="fas fa-cog"></i></span>
                </a>
                <div id="settingsSubmenu" class="collapse">
                    <ul class="nav flex-column">
                        <li><a class="nav-link {{ request()->routeIs('settings.general') ? 'active' : '' }}" href="{{ route('settings.general') }}">General Settings</a></li>
                        <li><a class="nav-link {{ request()->routeIs('settings.footer') ? 'active' : '' }}" href="{{ route('settings.footer') }}">Footer Settings</a></li>
                        <li><a class="nav-link {{ request()->routeIs('settings.color') ? 'active' : '' }}" href="{{ route('settings.color') }}">Color Settings</a></li>
                        <li><a class="nav-link {{ request()->routeIs('settings.city') ? 'active' : '' }}" href="{{ route('settings.city') }}">City</a></li>
                        <li><a class="nav-link {{ request()->routeIs('settings.courier') ? 'active' : '' }}" href="{{ route('settings.courier') }}">Courier</a></li>
                        <li><a class="nav-link {{ request()->routeIs('settings.comment') ? 'active' : '' }}" href="{{ route('settings.comment') }}">Comment</a></li>
                        <li><a class="nav-link {{ request()->routeIs('settings.delivery_charge') ? 'active' : '' }}" href="{{ route('settings.delivery_charge') }}">Delivery Charge</a></li>
                        <li><a class="nav-link {{ request()->routeIs('settings.emergency_notice') ? 'active' : '' }}" href="{{ route('settings.emergency_notice') }}">Emergency Notice</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize Bootstrap tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });

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
