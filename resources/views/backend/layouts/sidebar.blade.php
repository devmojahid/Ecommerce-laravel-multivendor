<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.html" class="app-brand-link">
        <span class="app-brand-text demo menu-text fw-bolder ms-2">Advenced Ecom</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item active">
        <a href="index.html" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

      
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Product</span>
      </li>

      {{-- Banner Management --}}
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bxs-image-add"></i>
          <div data-i18n="Account Settings">Banner Management</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('banner.index') }}" class="menu-link">
              <div data-i18n="Account">All Banner</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('banner.create') }}" class="menu-link">
              <div data-i18n="Notifications">Add Banner</div>
            </a>
          </li>
        </ul>
      </li>
      {{-- Brand Management --}}
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bxs-image-add"></i>
          <div data-i18n="Account Settings">Brand Management</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('brand.index') }}" class="menu-link">
              <div data-i18n="Account">All Brand</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('brand.create') }}" class="menu-link">
              <div data-i18n="Notifications">Add Brand</div>
            </a>
          </li>
        </ul>
      </li>
      {{-- Category Management --}}
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bxs-purchase-tag"></i>
          <div data-i18n="Account Settings">Category Management</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('category.index') }}" class="menu-link">
              <div data-i18n="Account">All Category</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('category.create') }}" class="menu-link">
              <div data-i18n="Notifications">Add Category</div>
            </a>
          </li>
        </ul>
      </li>

      {{-- Product Management --}}
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-shopping-bag"></i>
          <div data-i18n="Account Settings">Product Management</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="pages-account-settings-account.html" class="menu-link">
              <div data-i18n="Account">All Product</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="pages-account-settings-notifications.html" class="menu-link">
              <div data-i18n="Notifications">Add Product</div>
            </a>
          </li>
        </ul>
      </li>

      {{-- Cart Management --}}
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bxs-cart-add"></i>
          <div data-i18n="Account Settings">Cart Management</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="pages-account-settings-account.html" class="menu-link">
              <div data-i18n="Account">All Cart</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="pages-account-settings-notifications.html" class="menu-link">
              <div data-i18n="Notifications">Add Cart</div>
            </a>
          </li>
        </ul>
      </li>

       {{-- Order Management --}}
       <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-dock-top"></i>
          <div data-i18n="Account Settings">Order Management</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="pages-account-settings-account.html" class="menu-link">
              <div data-i18n="Account">All Order</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="pages-account-settings-notifications.html" class="menu-link">
              <div data-i18n="Notifications">Add Order</div>
            </a>
          </li>
        </ul>
      </li>
       {{-- Post Management --}}
       <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-dock-top"></i>
          <div data-i18n="Account Settings">Post Management</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="pages-account-settings-account.html" class="menu-link">
              <div data-i18n="Account">All Post</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="pages-account-settings-notifications.html" class="menu-link">
              <div data-i18n="Notifications">Add Post</div>
            </a>
          </li>
        </ul>
      </li>
       {{-- Post catrgory --}}
       <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-dock-top"></i>
          <div data-i18n="Account Settings">Post catrgory</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="pages-account-settings-account.html" class="menu-link">
              <div data-i18n="Account">All Post catrgory</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="pages-account-settings-notifications.html" class="menu-link">
              <div data-i18n="Notifications">Add Post catrgory</div>
            </a>
          </li>
        </ul>
      </li>
       {{-- Post Tag --}}
       <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bxs-purchase-tag-alt"></i>
          <div data-i18n="Account Settings">Post Tag</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="pages-account-settings-account.html" class="menu-link">
              <div data-i18n="Account">All Post Tag</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="pages-account-settings-notifications.html" class="menu-link">
              <div data-i18n="Notifications">Add Post Tag</div>
            </a>
          </li>
        </ul>
      </li>

      {{-- User Management --}}
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bxs-user"></i>
          <div data-i18n="Account Settings">User Management</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="pages-account-settings-account.html" class="menu-link">
              <div data-i18n="Account">All User</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="pages-account-settings-notifications.html" class="menu-link">
              <div data-i18n="Notifications">Add User</div>
            </a>
          </li>
        </ul>
      </li>

      {{-- Coupon Management --}}
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bxs-discount"></i>
          <div data-i18n="Account Settings">Coupon Management</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="pages-account-settings-account.html" class="menu-link">
              <div data-i18n="Account">All Coupon</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="pages-account-settings-notifications.html" class="menu-link">
              <div data-i18n="Notifications">Add Coupon</div>
            </a>
          </li>
        </ul>
      </li>
      {{-- Review Management --}}
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bxs-star-half"></i>
          <div data-i18n="Account Settings">Review Management</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="pages-account-settings-account.html" class="menu-link">
              <div data-i18n="Account">All Review</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="pages-account-settings-notifications.html" class="menu-link">
              <div data-i18n="Notifications">Add Review</div>
            </a>
          </li>
        </ul>
      </li>
      {{-- Comments Management --}}
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bxs-comment-detail"></i>
          <div data-i18n="Account Settings">Comments Management</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="pages-account-settings-account.html" class="menu-link">
              <div data-i18n="Account">All Comments</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="pages-account-settings-notifications.html" class="menu-link">
              <div data-i18n="Notifications">Add Comments</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Settings -->
      <li class="menu-item active">
        <a href="index.html" class="menu-link">
          <i class="menu-icon tf-icons bx bx-cog"></i>
          <div data-i18n="Analytics">Settings</div>
        </a>
      </li>
      

    </ul>
  </aside>