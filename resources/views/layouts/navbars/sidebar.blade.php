<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __("Tee's 3D Printing") }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'products') class="active " @endif>
                <a href="{{ route('pages.products') }}">
                    <i class="tim-icons icon-app"></i>
                    <p>{{ __('Products') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'orders') class="active " @endif>
                <a href="{{ route('pages.orders') }}">
                    <i class="tim-icons icon-cart"></i>
                    <p>{{ __('Orders') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'customers') class="active " @endif>
                <a href="{{ route('pages.customers') }}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>{{ __('Customers') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'transactions') class="active " @endif>
                <a href="{{ route('pages.transactions') }}">
                    <i class="tim-icons icon-credit-card"></i>
                    <p>{{ __('Transactions') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'reports') class="active " @endif>
                <a href="{{ route('pages.reports') }}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ __('Reports') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
