<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
      <a class="nav-link " href="dashboard.php#">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-people-fill"></i><span>Customers</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="customer-list.php">
            <i class="bi bi-circle"></i><span>Customer List</span>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="sales.php">
        <i class="bi bi-journal-text"></i><span>Sales</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="transaction-history.php">
            <i class="bi bi-circle"></i><span>Sales History</span>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="product-list.php">
            <i class="bi bi-circle"></i><span>Product List</span>
          </a>
        </li>

        <a href="product-category.php">
          <i class="bi bi-circle"></i><span>Product Category</span>
        </a>
      </ul>
    </li>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-basket2"></i><span>Orders</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="order.php">
            <i class="bi bi-circle"></i><span>Order List</span>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="add_item.php#">
        <i class="bi bi-bag-plus"></i><span>Add Item</span></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Login</span>
      </a>
    </li>
  </ul>
</aside>