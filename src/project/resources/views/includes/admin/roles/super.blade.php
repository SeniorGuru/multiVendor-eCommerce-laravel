<li>
    <a href="#menu2" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
        <i class="fas fa-tags"></i><span>{{ __('Product Management') }}</span>
    </a>
    <ul class="collapse list-unstyled" id="menu2" data-parent="#accordion">
        {{--            <li>--}}
        {{--                <a href="{{ route('admin-prod-types') }}"><span>{{ __('Add New Product') }}</span></a>--}}
        {{--            </li>--}}
        <li>
            <a href="{{ route('admin-prod-index') }}"><span>{{ __('All Products') }}</span></a>
        </li>
        {{--            <li>--}}
        {{--                <a href="{{ route('admin-prod-deactive') }}"><span>{{ __('Deactivated Product') }}</span></a>--}}
        {{--            </li>--}}
        <li>
            <a href="{{ route('admin-prod-catalog-index') }}"><span>{{ __('Product Catalogs') }}</span></a>
        </li>
        <li>
            <a href="{{ route('admin-rating-index') }}"><span>{{ __('Product Reviews') }}</span></a>
        </li>
        <li>
            <a href="{{ route('admin-comment-index') }}"><span>{{ __('Comments') }}</span></a>
        </li>
    </ul>
</li>
<!--<li>
    <a href="#affiliateprod" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
        <i class="icofont-cart"></i><span>{{ __('Flash Sale') }}</span>
    </a>
    <ul class="collapse list-unstyled" id="affiliateprod" data-parent="#accordion">


    </ul>
</li>-->
<li>
    <a href="#menu5" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false"><i
            class="fas fa-sitemap"></i><span>{{ __('Manage Categories') }}</span></a>
    <ul class="collapse list-unstyled
        @if(request()->is('admin/attribute/*/manage') && request()->input('type')=='category')
        show
@elseif(request()->is('admin/attribute/*/manage') && request()->input('type')=='subcategory')
        show
@elseif(request()->is('admin/attribute/*/manage') && request()->input('type')=='childcategory')
        show
@endif" id="menu5" data-parent="#accordion">
        <li class="@if(request()->is('admin/attribute/*/manage') && request()->input('type')=='category') active @endif">
            <a href="{{ route('admin-cat-index') }}"><span>{{ __('Main Category') }}</span></a>
        </li>
        <li class="@if(request()->is('admin/attribute/*/manage') && request()->input('type')=='subcategory') active @endif">
            <a href="{{ route('admin-subcat-index') }}"><span>{{ __('Sub Category') }}</span></a>
        </li>
        <li class="@if(request()->is('admin/attribute/*/manage') && request()->input('type')=='childcategory') active @endif">
            <a href="{{ route('admin-childcat-index') }}"><span>{{ __('Child Category') }}</span></a>
        </li>
    </ul>
</li>
<li>
    <a href="#vendor" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
        <i class="icofont-ui-user-group"></i><span>{{ __('Vendors') }}</span>
    </a>
    <ul class="collapse list-unstyled" id="vendor" data-parent="#accordion">
        {{--        <li>--}}
        {{--            <a href="{{ route('admin-vendor-index') }}"><span>{{ __('Vendors List') }}</span></a>--}}
        {{--        </li>--}}
        <li>
            <a href="{{ route('admin-vendor-withdraw-index') }}"><span>{{ __('Withdraws') }}</span></a>
        </li>
        <li>
            <a href="{{ route('admin-vendor-subs') }}"><span>{{ __('Vendor Subscriptions') }}</span></a>
        </li>
        <li>
            <a href="{{ route('admin-vendor-color') }}"><span>{{ __('Default Background') }}</span></a>
        </li>
        <li>
            <a href="{{ route('admin-vr-index') }}"><span>{{ __('All Verifications') }}</span></a>
        </li>
        <li>
            <a href="{{ route('admin-vr-pending') }}"><span>{{ __('Pending Verifications') }}</span></a>
        </li>
        <li>
            <a href="{{ route('admin-subscription-index') }}"
               class=" wave-effect"><span>{{ __('Vendor Subscription Plans') }}</span></a>
        </li>
    </ul>
</li>

<li>
    <a href="#users" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false"><i
            class="fa fa-users"></i><span>{{ __('Users') }}</span></a>
    <ul class="collapse list-unstyled" id="users" data-parent="#accordion">
        <li>
            <a href="{{ route('admin-vendor-index') }}"><span>{{ __('Vendors') }}</span></a>
        </li>
        <li>
            <a href="{{ route('admin-user-index') }}"><span>{{ __('Customers') }}</span></a>
        </li>
    </ul>
</li>

<li>
    <a href="#order" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false"><i
            class="fas fa-cart-plus"></i><span>{{ __('Sales & Orders') }}</span></a>
    <ul class="collapse list-unstyled" id="order" data-parent="#accordion">
        <li>
            <a href="{{route('admin-order-index')}}"> {{ __('All Orders') }}</a>
        </li>
        <li>
            <a href="{{route('admin-order-pending')}}"> {{ __('Pending Orders') }}</a>
        </li>
        <li>
            <a href="{{route('admin-order-processing')}}"> {{ __('Processing Orders') }}</a>
        </li>
        <li>
            <a href="{{route('admin-order-transactions')}}"> {{ __('Transactions') }}</a>
        </li>
        <li>
            <a href="{{ route('admin-import-create') }}"><span>{{ __('Add Flash Sales') }}</span></a>
        </li>
        <li>
            <a href="{{ route('admin-import-index') }}"><span>{{ __('All Flash Sales') }}</span></a>
        </li>
        <li>
            <a href="{{route('admin-order-declined')}}"> {{ __('Declined Orders') }}</a>
        </li>
        <li>
            <a href="{{ route('admin-coupon-index') }}" class=" wave-effect">{{ __('Set Coupons') }}</a>
        </li>
         <li>
            <a href="{{route('admin-order-completed')}}"> {{ __('Completed Orders') }}</a>
        </li>
    </ul>
</li>


<li>
    <a href="#menu3" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
        <i class="fas fa-users"></i><span>{{ __('Customers') }}</span>
    </a>
    <ul class="collapse list-unstyled" id="menu3" data-parent="#accordion">
        {{--        <li>--}}
        {{--            <a href="{{ route('admin-user-index') }}"><span>{{ __('Customers List') }}</span></a>--}}
        {{--        </li>--}}
        <li>
            <a href="{{ route('admin-withdraw-index') }}"><span>{{ __('Withdraws') }}</span></a>
        </li>
        <li>
            <a href="{{ route('admin-user-image') }}"><span>{{ __('Customer Default Image') }}</span></a>
        </li>
    </ul>
</li>

<li>
    <a href="#menu4" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
        <i class="fas fa-chalkboard-teacher"></i><span>{{ __('Accounting') }}</span>
    </a>
    <ul class="collapse list-unstyled" id="menu4" data-parent="#accordion">
        <li>
            <a href="{{ route('admin-currency-index') }}"><span>{{ __('Currency Rates') }}</span></a>
        </li>
        <li>
            <a href="{{ route('admin.accounting.taxes') }}"><span>{{ __('Taxes') }}</span></a>
        </li>

    </ul>
</li>

<li>
    <a href="#appearance" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
        <i class="fa fa-paint-brush"></i><span>{{ __('Appearance') }}</span>
    </a>
    <ul class="collapse list-unstyled" id="appearance" data-parent="#accordion">
        <li>
            <a href="{{ route('admin.appearance.themes') }}"><span>{{ __('Themes') }}</span></a>
        </li>
    </ul>
</li>


<li>
    <a href="{{ route('admin-prod-import') }}"><i class="fas fa-upload"></i><span>{{ __('CSV Product Upload') }}</span></a>
</li>


<li>
    <a href="#blog" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
        <i class="fas fa-fw fa-newspaper"></i><span>{{ __('Blog') }}</span>
    </a>
    <ul class="collapse list-unstyled" id="blog" data-parent="#accordion">
        <li>
            <a href="{{ route('admin-cblog-index') }}"><span>{{ __('Categories') }}</span></a>
        </li>
        <li>
            <a href="{{ route('admin-blog-index') }}"><span>{{ __('Posts') }}</span></a>
        </li>
    </ul>
</li>

<li>
    <a href="#msg" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
        <i class="fab fa-telegram-plane"></i><span>{{ __('Messages') }}</span>
    </a>
    <ul class="collapse list-unstyled" id="msg" data-parent="#accordion">
        <li>
            <a href="{{ route('admin-message-index') }}"><span>{{ __('Tickets') }}</span></a>
        </li>
        <li>
            <a href="{{ route('admin-message-dispute') }}"><span>{{ __('Disputes') }}</span></a>
        </li>
    </ul>
</li>

<!--<li>-->
<!--    <a href="#seoTools" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">-->
<!--        <i class="fas fa-wrench"></i><span>{{ __('SEO Tools') }}</span>-->
<!--    </a>-->
<!--    <ul class="collapse list-unstyled" id="seoTools" data-parent="#accordion">-->
<!--        <li>-->
<!--            <a href="{{ route('admin-prod-popular',30) }}"><span>{{ __('Popular Products') }}</span></a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="{{ route('admin-seotool-analytics') }}"><span>{{ __('Google Analytics') }}</span></a>-->
<!--        </li-->
<!--        >-->
<!--        <li>-->
<!--            <a href="{{ route('admin-seotool-keywords') }}"><span>{{ __('Website Meta Keywords') }}</span></a>-->
<!--        </li>-->
<!--    </ul>-->
<!--</li>-->
<li>
    <a href="{{ route('admin-report-index') }}" class=" wave-effect"><i
            class="fa fa-bar-chart"></i><span>{{ __('Reports') }}</span></a>
</li>
<li>
    <a href="{{ route('admin-staff-index') }}" class=" wave-effect"><i
            class="fas fa-user-secret"></i><span>{{ __('Manage Staffs') }}</span></a>
</li>
<li>
    <a href="#newsletter" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
        <i class="fas fa-users-cog mr-2"></i><span>{{ __('Newsletter & SMS') }}</span>
    </a>
    <ul class="collapse list-unstyled" id="newsletter" data-parent="#accordion">
        <li>
            <a href="{{ route('admin-gs-popup') }}"><span>{{ __('Newsletter regional settings') }}</span></a>
        </li>
        <li>
            <a href="{{ route('admin-subs-index') }}" class=" wave-effect"><span>{{ __('Subscribers') }}</span></a>
        </li>
    </ul>
</li>


<li>
    <a href="{{ route('admin-role-index') }}" class=" wave-effect"><i
            class="fas fa-user-tag"></i><span>{{ __('Manage Roles') }}</span></a>
</li>
<li>
    <a href="{{ route('admin-gs-logo') }}" id="sidebar_menu_settings" class=" wave-effect"><i
            class="fa fa-cogs"></i><span>{{ __('Settings') }}</span></a>
</li>
<li>
    <a href="{{ route('admin-cache-clear') }}" class=" wave-effect"><i
            class="fas fa-sync"></i><span>{{ __('Clear Cache') }}</span></a>
</li>
<li>
    <a href="{{ route('admin.profile') }}"><i class="fas fa-user"></i> {{ __('Edit Profile') }}</a>
</li>
<li>
    <a href="{{ route('admin.password') }}"><i class="fas fa-cog"></i> {{ __('Change Password') }}</a>
</li>
<li>
    <a href="{{ route('admin.logout') }}"><i class="fas fa-power-off"></i> {{ __('Logout') }}</a>
</li>

<!--<li>-->
<!--    <a href="#sactive" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">-->
<!--        <i class="fas fa-cog"></i>{{ __('System Activation') }}-->
<!--    </a>-->
<!--    <ul class="collapse list-unstyled" id="sactive" data-parent="#accordion">-->

<!--        <li><a href="{{route('admin-activation-form')}}"> {{ __('Activation') }}</a></li>-->
<!--        <li><a href="{{route('admin-generate-backup')}}"> {{ __('Generate Backup') }}</a></li>-->
<!--    </ul>-->
<!--</li>-->
