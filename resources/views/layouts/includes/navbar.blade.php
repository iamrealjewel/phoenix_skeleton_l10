@if(auth()->check())
<nav class="navbar navbar-vertical navbar-expand-lg">
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
      <!-- scrollbar removed-->
      <div class="navbar-vertical-content">
        <ul class="navbar-nav flex-column" id="navbarVerticalNav">
          <li class="nav-item">
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-home" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-home">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="pie-chart"></span></span><span class="nav-link-text">Home</span><span class="fa-solid fa-circle text-info ms-1 new-page-indicator" style="font-size: 6px"></span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-home">
                  <li class="collapsed-nav-item-title d-none">Home
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../index.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">E commerce</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../dashboard/project-management.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Project management</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../dashboard/crm.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">CRM</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../dashboard/travel-agency.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Travel agency</span><span class="badge ms-2 badge badge-phoenix badge-phoenix-warning ">New</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/social/feed.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Social feed</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <!-- label-->
            <p class="navbar-vertical-label">Apps
            </p>
            <hr class="navbar-vertical-line" />
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-e-commerce" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-e-commerce">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="shopping-cart"></span></span><span class="nav-link-text">E commerce</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-e-commerce">
                  <li class="collapsed-nav-item-title d-none">E commerce
                  </li>
                  <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-admin" data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-admin">
                      <div class="d-flex align-items-center">
                        <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Admin</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                    <div class="parent-wrapper">
                      <ul class="nav collapse parent show" data-bs-parent="#e-commerce" id="nv-admin">
                        <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/admin/add-product.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Add product</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/admin/products.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Products</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/admin/customers.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Customers</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/admin/customer-details.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Customer details</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/admin/orders.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Orders</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/admin/order-details.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Order details</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/admin/refund.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Refund</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-customer" data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-customer">
                      <div class="d-flex align-items-center">
                        <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Customer</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                    <div class="parent-wrapper">
                      <ul class="nav collapse parent show" data-bs-parent="#e-commerce" id="nv-customer">
                        <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/landing/homepage.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Homepage</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/landing/product-details.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Product details</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/landing/products-filter.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Products filter</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/landing/cart.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Cart</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/landing/checkout.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Checkout</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/landing/shipping-info.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Shipping info</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/landing/profile.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Profile</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/landing/favourite-stores.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Favourite stores</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/landing/wishlist.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Wishlist</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/landing/order-tracking.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Order tracking</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../apps/e-commerce/landing/invoice.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Invoice</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-CRM" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-CRM">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="phone"></span></span><span class="nav-link-text">CRM</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-CRM">
                  <li class="collapsed-nav-item-title d-none">CRM
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/crm/analytics.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Analytics</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/crm/deals.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Deals</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/crm/deal-details.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Deal details</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/crm/leads.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Leads</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/crm/lead-details.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Lead details</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/crm/reports.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Reports</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/crm/report-details.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Report details</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/crm/add-contact.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Add contact</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </div>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-project-management" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-project-management">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="clipboard"></span></span><span class="nav-link-text">Project management</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-project-management">
                  <li class="collapsed-nav-item-title d-none">Project management
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/project-management/create-new.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Create new</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/project-management/project-list-view.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Project list view</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/project-management/project-card-view.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Project card view</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/project-management/project-board-view.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Project board view</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/project-management/todo-list.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Todo list</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/project-management/project-details.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Project details</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </div>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-travel-agency" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-travel-agency">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="briefcase"></span></span><span class="nav-link-text">Travel agency</span><span class="fa-solid fa-circle text-info ms-1 new-page-indicator" style="font-size: 6px"></span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-travel-agency">
                  <li class="collapsed-nav-item-title d-none">Travel agency
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/landing.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Landing</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-hotel" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-hotel">
                      <div class="d-flex align-items-center">
                        <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Hotel</span><span class="fa-solid fa-circle text-info ms-1 new-page-indicator" style="font-size: 6px"></span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                    <div class="parent-wrapper">
                      <ul class="nav collapse parent" data-bs-parent="#travel-agency" id="nv-hotel">
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-hotel-admin" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-hotel-admin">
                            <div class="d-flex align-items-center">
                              <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Admin</span><span class="fa-solid fa-circle text-info ms-1 new-page-indicator" style="font-size: 6px"></span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                          <div class="parent-wrapper">
                            <ul class="nav collapse parent" data-bs-parent="#hotel" id="nv-hotel-admin">
                              <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/hotel/admin/add-property.html">
                                  <div class="d-flex align-items-center"><span class="nav-link-text">Add property</span>
                                  </div>
                                </a>
                                <!-- more inner pages-->
                              </li>
                              <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/hotel/admin/add-room.html">
                                  <div class="d-flex align-items-center"><span class="nav-link-text">Add room</span><span class="badge ms-2 badge badge-phoenix badge-phoenix-warning ">New</span>
                                  </div>
                                </a>
                                <!-- more inner pages-->
                              </li>
                              <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/hotel/admin/room-listing.html">
                                  <div class="d-flex align-items-center"><span class="nav-link-text">Room listing</span>
                                  </div>
                                </a>
                                <!-- more inner pages-->
                              </li>
                              <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/hotel/admin/room-search.html">
                                  <div class="d-flex align-items-center"><span class="nav-link-text">Search room</span><span class="badge ms-2 badge badge-phoenix badge-phoenix-warning ">New</span>
                                  </div>
                                </a>
                                <!-- more inner pages-->
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-hotel-customer" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-hotel-customer">
                            <div class="d-flex align-items-center">
                              <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Customer</span><span class="badge ms-2 badge badge-phoenix badge-phoenix-warning ">New</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                          <div class="parent-wrapper">
                            <ul class="nav collapse parent" data-bs-parent="#hotel" id="nv-hotel-customer">
                              <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/hotel/customer/homepage.html">
                                  <div class="d-flex align-items-center"><span class="nav-link-text">Homepage</span>
                                  </div>
                                </a>
                                <!-- more inner pages-->
                              </li>
                              <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/hotel/customer/hotel-details.html">
                                  <div class="d-flex align-items-center"><span class="nav-link-text">Hotel details</span>
                                  </div>
                                </a>
                                <!-- more inner pages-->
                              </li>
                              <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/hotel/customer/hotel-compare.html">
                                  <div class="d-flex align-items-center"><span class="nav-link-text">Hotel compare</span>
                                  </div>
                                </a>
                                <!-- more inner pages-->
                              </li>
                              <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/hotel/customer/checkout.html">
                                  <div class="d-flex align-items-center"><span class="nav-link-text">Checkout</span>
                                  </div>
                                </a>
                                <!-- more inner pages-->
                              </li>
                              <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/hotel/customer/payment.html">
                                  <div class="d-flex align-items-center"><span class="nav-link-text">Payment</span>
                                  </div>
                                </a>
                                <!-- more inner pages-->
                              </li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-flight" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-flight">
                      <div class="d-flex align-items-center">
                        <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Flight</span><span class="badge ms-2 badge badge-phoenix badge-phoenix-warning ">New</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                    <div class="parent-wrapper">
                      <ul class="nav collapse parent" data-bs-parent="#travel-agency" id="nv-flight">
                        <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/flight/homepage.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Homepage</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/flight/booking.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Booking</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../apps/travel-agency/flight/payment.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Payment</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item"><a class="nav-link nav-link-disable" href="../coming-soon.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Trip</span><span class="badge ms-2 badge badge-phoenix badge-phoenix-primary ">Next</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </div>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link label-1" href="../apps/chat.html" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="message-square"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Chat</span></span>
                </div>
              </a>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-email">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="mail"></span></span><span class="nav-link-text">Email</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-email">
                  <li class="collapsed-nav-item-title d-none">Email
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/email/inbox.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Inbox</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/email/email-detail.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Email detail</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/email/compose.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Compose</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </div>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-events" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-events">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="bookmark"></span></span><span class="nav-link-text">Events</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-events">
                  <li class="collapsed-nav-item-title d-none">Events
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/events/create-an-event.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Create an event</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/events/event-detail.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Event detail</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </div>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-kanban" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-kanban">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="trello"></span></span><span class="nav-link-text">Kanban</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-kanban">
                  <li class="collapsed-nav-item-title d-none">Kanban
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/kanban/kanban.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Kanban</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/kanban/boards.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Boards</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/kanban/create-kanban-board.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Create board</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </div>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-social" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-social">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="share-2"></span></span><span class="nav-link-text">Social</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-social">
                  <li class="collapsed-nav-item-title d-none">Social
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/social/profile.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Profile</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../apps/social/settings.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Settings</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </div>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link label-1" href="../apps/calendar.html" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="calendar"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Calendar</span></span>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item">
            <!-- label-->
            <p class="navbar-vertical-label">Pages
            </p>
            <hr class="navbar-vertical-line" />
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link label-1" href="../pages/starter.html" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="compass"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Starter</span></span>
                </div>
              </a>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-faq" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-faq">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="help-circle"></span></span><span class="nav-link-text">Faq</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-faq">
                  <li class="collapsed-nav-item-title d-none">Faq
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../pages/faq/faq-accordion.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Faq accordion</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../pages/faq/faq-tab.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Faq tab</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </div>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-landing" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-landing">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="globe"></span></span><span class="nav-link-text">Landing</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-landing">
                  <li class="collapsed-nav-item-title d-none">Landing
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../pages/landing/default.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Default</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../pages/landing/alternate.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Alternate</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </div>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-pricing" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-pricing">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="tag"></span></span><span class="nav-link-text">Pricing</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-pricing">
                  <li class="collapsed-nav-item-title d-none">Pricing
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../pages/pricing/pricing-column.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Pricing column</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../pages/pricing/pricing-grid.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Pricing grid</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </div>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link label-1" href="../pages/notifications.html" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="bell"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Notifications</span></span>
                </div>
              </a>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link label-1" href="../pages/members.html" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="users"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Members</span></span>
                </div>
              </a>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link label-1" href="../pages/timeline.html" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="clock"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Timeline</span></span>
                </div>
              </a>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-errors" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-errors">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="alert-triangle"></span></span><span class="nav-link-text">Errors</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-errors">
                  <li class="collapsed-nav-item-title d-none">Errors
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../pages/errors/404.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">404</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../pages/errors/403.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">403</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../pages/errors/500.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">500</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </div>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-authentication" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-authentication">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="lock"></span></span><span class="nav-link-text">Authentication</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-authentication">
                  <li class="collapsed-nav-item-title d-none">Authentication
                  </li>
                  <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-simple" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-simple">
                      <div class="d-flex align-items-center">
                        <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Simple</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                    <div class="parent-wrapper">
                      <ul class="nav collapse parent" data-bs-parent="#authentication" id="nv-simple">
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/sign-in.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Sign in</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/sign-up.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Sign up</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/sign-out.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Sign out</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/forgot-password.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Forgot password</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/reset-password.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Reset password</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/lock-screen.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Lock screen</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/2FA.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">2FA</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-split" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-split">
                      <div class="d-flex align-items-center">
                        <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Split</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                    <div class="parent-wrapper">
                      <ul class="nav collapse parent" data-bs-parent="#authentication" id="nv-split">
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/sign-in.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Sign in</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/sign-up.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Sign up</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/sign-out.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Sign out</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/forgot-password.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Forgot password</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/reset-password.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Reset password</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/lock-screen.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Lock screen</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/2FA.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">2FA</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-Card" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-Card">
                      <div class="d-flex align-items-center">
                        <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Card</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                    <div class="parent-wrapper">
                      <ul class="nav collapse parent" data-bs-parent="#authentication" id="nv-Card">
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/sign-in.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Sign in</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/sign-up.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Sign up</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/sign-out.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Sign out</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/forgot-password.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Forgot password</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/reset-password.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Reset password</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/lock-screen.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Lock screen</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/2FA.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">2FA</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-layouts" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-layouts">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="layout"></span></span><span class="nav-link-text">Layouts</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent show" data-bs-parent="#navbarVerticalCollapse" id="nv-layouts">
                  <li class="collapsed-nav-item-title d-none">Layouts
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../demo/vertical-sidenav.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Vertical sidenav</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../demo/dark-mode.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Dark mode</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../demo/sidenav-collapse.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Sidenav collapse</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../demo/darknav.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Darknav</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../demo/topnav-slim.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Topnav slim</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../demo/navbar-horizontal.html" target="_blank">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Navbar horizontal</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../demo/horizontal-slim.html" target="_blank">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Horizontal slim</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../demo/combo-nav.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Combo nav</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link active" href="../demo/combo-nav-slim.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Combo nav slim</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../demo/dual-nav.html" target="_blank">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Dual nav</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <!-- label-->
            <p class="navbar-vertical-label">Modules
            </p>
            <hr class="navbar-vertical-line" />
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-forms" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-forms">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="file-text"></span></span><span class="nav-link-text">Forms</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-forms">
                  <li class="collapsed-nav-item-title d-none">Forms
                  </li>
                  <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-basic" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-basic">
                      <div class="d-flex align-items-center">
                        <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Basic</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                    <div class="parent-wrapper">
                      <ul class="nav collapse parent" data-bs-parent="#forms" id="nv-basic">
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/form-control.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Form control</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/input-group.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Input group</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/select.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Select</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/checks.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Checks</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/range.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Range</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/floating-labels.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Floating labels</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/layout.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Layout</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-advance" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-advance">
                      <div class="d-flex align-items-center">
                        <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Advance</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                    <div class="parent-wrapper">
                      <ul class="nav collapse parent" data-bs-parent="#forms" id="nv-advance">
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/advance-select.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Advance select</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/date-picker.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Date picker</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/editor.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Editor</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/file-uploader.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">File uploader</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/range.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Range</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/rating.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Rating</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/emoji-button.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Emoji button</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/forms/validation.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Validation</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/forms/wizard.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Wizard</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </div>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-icons" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-icons">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="grid"></span></span><span class="nav-link-text">Icons</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-icons">
                  <li class="collapsed-nav-item-title d-none">Icons
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/icons/feather.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Feather</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/icons/font-awesome.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Font awesome</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/icons/unicons.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Unicons</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </div>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-tables" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-tables">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="columns"></span></span><span class="nav-link-text">Tables</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-tables">
                  <li class="collapsed-nav-item-title d-none">Tables
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/tables/basic-tables.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Basic tables</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/tables/advance-tables.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Advance tables</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/tables/bulk-select.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Bulk Select</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </div>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-ECharts" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-ECharts">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="bar-chart-2"></span></span><span class="nav-link-text">ECharts</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-ECharts">
                  <li class="collapsed-nav-item-title d-none">ECharts
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/echarts/line-charts.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Line charts</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/echarts/bar-charts.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Bar charts</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/echarts/candlestick-charts.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Candlestick charts</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/echarts/geo-map.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Geo map</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/echarts/scatter-charts.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Scatter charts</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/echarts/pie-charts.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Pie charts</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/echarts/gauge-chart.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Gauge chart</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/echarts/radar-charts.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Radar charts</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/echarts/heatmap-charts.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Heatmap charts</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/echarts/how-to-use.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">How to use</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </div>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-components" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-components">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="package"></span></span><span class="nav-link-text">Components</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-components">
                  <li class="collapsed-nav-item-title d-none">Components
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/components/accordion.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Accordion</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/components/avatar.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Avatar</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/components/alerts.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Alerts</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/components/badge.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Badge</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/components/breadcrumb.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Breadcrumb</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/components/button.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Buttons</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/components/calendar.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Calendar</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/components/card.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Card</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-carousel" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-carousel">
                      <div class="d-flex align-items-center">
                        <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Carousel</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                    <div class="parent-wrapper">
                      <ul class="nav collapse parent" data-bs-parent="#components" id="nv-carousel">
                        <li class="nav-item"><a class="nav-link" href="../modules/components/carousel/bootstrap.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Bootstrap</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/carousel/swiper.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Swiper</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/components/collapse.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Collapse</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/components/dropdown.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Dropdown</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/components/list-group.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">List group</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/components/modal.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Modals</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-navs-_and_-Tabs" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-navs-_and_-Tabs">
                      <div class="d-flex align-items-center">
                        <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Navs &amp; Tabs</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                    <div class="parent-wrapper">
                      <ul class="nav collapse parent" data-bs-parent="#components" id="nv-navs-_and_-Tabs">
                        <li class="nav-item"><a class="nav-link" href="../modules/components/navs-and-tabs/navs.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Navs</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/navs-and-tabs/navbar.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Navbar</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/navs-and-tabs/tabs.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Tabs</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/components/offcanvas.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Offcanvas</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/components/progress-bar.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Progress bar</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/components/placeholder.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Placeholder</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/components/pagination.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Pagination</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/components/popovers.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Popovers</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/components/scrollspy.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Scrollspy</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/components/sortable.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Sortable</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/components/spinners.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Spinners</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/components/toast.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Toast</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/components/tooltips.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Tooltips</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/components/typed-text.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Typed text</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/components/chat-widget.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Chat widget</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </div>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-utilities" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-utilities">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="tool"></span></span><span class="nav-link-text">Utilities</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-utilities">
                  <li class="collapsed-nav-item-title d-none">Utilities
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/utilities/background.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Background</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/utilities/borders.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Borders</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/utilities/colors.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Colors</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/utilities/display.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Display</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/utilities/flex.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Flex</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/utilities/stacks.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Stacks</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/utilities/float.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Float</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/utilities/grid.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Grid</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/utilities/interactions.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Interactions</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/utilities/opacity.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Opacity</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/utilities/overflow.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Overflow</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/utilities/position.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Position</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/utilities/shadows.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Shadows</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/utilities/sizing.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Sizing</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/utilities/spacing.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Spacing</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/utilities/typography.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Typography</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/utilities/vertical-align.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Vertical align</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../modules/utilities/visibility.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Visibility</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </div>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link label-1" href="../widgets.html" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="server"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Widgets</span></span>
                </div>
              </a>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-multi-level" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-multi-level">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="layers"></span></span><span class="nav-link-text">Multi level</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-multi-level">
                  <li class="collapsed-nav-item-title d-none">Multi level
                  </li>
                  <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-level-two" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-level-two">
                      <div class="d-flex align-items-center">
                        <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Level two</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                    <div class="parent-wrapper">
                      <ul class="nav collapse parent" data-bs-parent="#multi-level" id="nv-level-two">
                        <li class="nav-item"><a class="nav-link" href="../#!.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Item 1</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../#!.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Item 2</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-level-three" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-level-three">
                      <div class="d-flex align-items-center">
                        <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Level three</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                    <div class="parent-wrapper">
                      <ul class="nav collapse parent" data-bs-parent="#multi-level" id="nv-level-three">
                        <li class="nav-item"><a class="nav-link" href="../#!.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Item 3</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-item-4" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-item-4">
                            <div class="d-flex align-items-center">
                              <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Item 4</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                          <div class="parent-wrapper">
                            <ul class="nav collapse parent" data-bs-parent="#level-three" id="nv-item-4">
                              <li class="nav-item"><a class="nav-link" href="../#!.html">
                                  <div class="d-flex align-items-center"><span class="nav-link-text">Item 5</span>
                                  </div>
                                </a>
                                <!-- more inner pages-->
                              </li>
                              <li class="nav-item"><a class="nav-link" href="../#!.html">
                                  <div class="d-flex align-items-center"><span class="nav-link-text">Item 6</span>
                                  </div>
                                </a>
                                <!-- more inner pages-->
                              </li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-level-four" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-level-four">
                      <div class="d-flex align-items-center">
                        <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Level four</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                    <div class="parent-wrapper">
                      <ul class="nav collapse parent" data-bs-parent="#multi-level" id="nv-level-four">
                        <li class="nav-item"><a class="nav-link" href="../#!.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Item 6</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-item-7" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-item-7">
                            <div class="d-flex align-items-center">
                              <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Item 7</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                          <div class="parent-wrapper">
                            <ul class="nav collapse parent" data-bs-parent="#level-four" id="nv-item-7">
                              <li class="nav-item"><a class="nav-link" href="../#!.html">
                                  <div class="d-flex align-items-center"><span class="nav-link-text">Item 8</span>
                                  </div>
                                </a>
                                <!-- more inner pages-->
                              </li>
                              <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-item-9" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-item-9">
                                  <div class="d-flex align-items-center">
                                    <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Item 9</span>
                                  </div>
                                </a>
                                <!-- more inner pages-->
                                <div class="parent-wrapper">
                                  <ul class="nav collapse parent" data-bs-parent="#item-7" id="nv-item-9">
                                    <li class="nav-item"><a class="nav-link" href="../#!.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Item 10</span>
                                        </div>
                                      </a>
                                      <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="../#!.html">
                                        <div class="d-flex align-items-center"><span class="nav-link-text">Item 11</span>
                                        </div>
                                      </a>
                                      <!-- more inner pages-->
                                    </li>
                                  </ul>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <!-- label-->
            <p class="navbar-vertical-label">Documentation
            </p>
            <hr class="navbar-vertical-line" />
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link label-1" href="../documentation/getting-started.html" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="life-buoy"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Getting started</span></span>
                </div>
              </a>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-customization" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-customization">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="settings"></span></span><span class="nav-link-text">Customization</span><span class="fa-solid fa-circle text-info ms-1 new-page-indicator" style="font-size: 6px"></span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-customization">
                  <li class="collapsed-nav-item-title d-none">Customization
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../documentation/customization/configuration.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Configuration</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../documentation/customization/styling.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Styling</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../documentation/customization/color.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Color</span><span class="badge ms-2 badge badge-phoenix badge-phoenix-warning ">New</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../documentation/customization/dark-mode.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Dark mode</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../documentation/customization/plugin.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Plugin</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </div>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-layouts-doc" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-layouts-doc">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="table"></span></span><span class="nav-link-text">Layouts doc</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-layouts-doc">
                  <li class="collapsed-nav-item-title d-none">Layouts doc
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../documentation/layouts/vertical-navbar.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Vertical navbar</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../documentation/layouts/horizontal-navbar.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Horizontal navbar</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../documentation/layouts/combo-navbar.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Combo navbar</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="../documentation/layouts/dual-nav.html">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Dual nav</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                </ul>
              </div>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link label-1" href="../documentation/gulp.html" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fa-brands fa-gulp ms-1 me-1 fa-lg"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Gulp</span></span>
                </div>
              </a>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link label-1" href="../documentation/design-file.html" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="figma"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Design file</span></span>
                </div>
              </a>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link label-1" href="../changelog.html" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="git-merge"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Changelog</span></span>
                </div>
              </a>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper"><a class="nav-link label-1" href="../showcase.html" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="monitor"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Showcase</span></span>
                </div>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="navbar-vertical-footer">
      <button class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center"><span class="uil uil-left-arrow-to-left fs-8"></span><span class="uil uil-arrow-from-right fs-8"></span><span class="navbar-vertical-footer-text ms-2">Collapsed View</span></button>
    </div>
  </nav>
  <nav class="navbar navbar-top fixed-top navbar-slim justify-content-between navbar-expand-lg" id="navbarComboSlim" data-navbar-top="combo" data-move-target="#navbarVerticalNav">
    <div class="navbar-logo">

      <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
      <a class="navbar-brand navbar-brand" href="../index.html">phoenix <span class="text-body-highlight d-none d-sm-inline">slim</span></a>
    </div>
    <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
      <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="fs-8 me-2 fas fa-cog"></span>Manage</a>
            <ul class="dropdown-menu navbar-dropdown-caret">

                <li class="dropdown bg-secondary text-white p-1 text-center"><div class="mt-1 mb-1" id="faq" href="#"  data-bs-auto-close="outside">
                        <span><strong>Manage Access Controls</strong></span>
                    </div>
                </li>

                <li class="dropdown mt-2"><a class="dropdown-item dropdown-toggle" id="faq" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil fas fa-users-cog text-warning"></span>Users</span></div>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{route('users.index')}}">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil fas fa-users text-warning"></span>Browse Users
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('users.create')}}">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil fas fa-user-plus text-primary"></span>Create new user
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil fas fa-user-tie text-info"></span>Roles</span></div>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{route('roles.index')}}">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil fas fa-user-tie text-info"></span>Browse Roles
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('roles.create')}}">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil fas fa-plus-circle text-primary"></span>Create new Role
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil fas fa-tasks text-success"></span>Permission</span></div>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{route('permissions.index')}}">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil fas fa-tasks text-success"></span>Browse Permission
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('permissions.create')}}">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil fas fa-plus-circle text-primary"></span>Create new Permission
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-cube"></span>Apps</a>
          <ul class="dropdown-menu navbar-dropdown-caret">
            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</span></div>
              </a>
              <ul class="dropdown-menu">
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Admin</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/e-commerce/admin/add-product.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../apps/e-commerce/admin/products.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../apps/e-commerce/admin/customers.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../apps/e-commerce/admin/customer-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../apps/e-commerce/admin/orders.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../apps/e-commerce/admin/order-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../apps/e-commerce/admin/refund.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/e-commerce/landing/homepage.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../apps/e-commerce/landing/products-filter.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../apps/e-commerce/landing/cart.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../apps/e-commerce/landing/checkout.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../apps/e-commerce/landing/shipping-info.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../apps/e-commerce/landing/profile.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../apps/e-commerce/landing/favourite-stores.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../apps/e-commerce/landing/wishlist.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../apps/e-commerce/landing/order-tracking.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../apps/e-commerce/landing/invoice.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Invoice
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="phone"></span>CRM</span></div>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../apps/crm/analytics.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../apps/crm/deals.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../apps/crm/deal-details.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal details
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../apps/crm/leads.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../apps/crm/lead-details.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../apps/crm/reports.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../apps/crm/report-details.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Report details
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../apps/crm/add-contact.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="clipboard"></span>Project management</span></div>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../apps/project-management/create-new.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../apps/project-management/project-list-view.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../apps/project-management/project-card-view.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../apps/project-management/project-board-view.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../apps/project-management/todo-list.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../apps/project-management/project-details.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="travel-agency" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="briefcase"></span>Travel agency</span></div>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../apps/travel-agency/landing.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Landing
                    </div>
                  </a>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="hotel" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Hotel</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Admin</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../apps/travel-agency/hotel/admin/add-property.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add property
                            </div>
                          </a>
                        </li>
                        <li><a class="dropdown-item" href="../apps/travel-agency/hotel/admin/add-room.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add room
                            </div>
                          </a>
                        </li>
                        <li><a class="dropdown-item" href="../apps/travel-agency/hotel/admin/room-listing.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Room listing
                            </div>
                          </a>
                        </li>
                        <li><a class="dropdown-item" href="../apps/travel-agency/hotel/admin/room-search.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Search room
                            </div>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/homepage.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage
                            </div>
                          </a>
                        </li>
                        <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/hotel-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Hotel details
                            </div>
                          </a>
                        </li>
                        <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/hotel-compare.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Hotel compare
                            </div>
                          </a>
                        </li>
                        <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/checkout.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout
                            </div>
                          </a>
                        </li>
                        <li><a class="dropdown-item" href="../apps/travel-agency/hotel/customer/payment.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Payment
                            </div>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="flight" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Flight</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/travel-agency/flight/homepage.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../apps/travel-agency/flight/booking.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Booking
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../apps/travel-agency/flight/payment.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Payment
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li><a class="dropdown-item nav-link-disable" href="../coming-soon.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Trip
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li><a class="dropdown-item" href="../apps/chat.html">
                <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat
                </div>
              </a>
            </li>
            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="mail"></span>Email</span></div>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../apps/email/inbox.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../apps/email/email-detail.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../apps/email/compose.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../apps/events/create-an-event.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../apps/events/event-detail.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="trello"></span>Kanban</span></div>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../apps/kanban/kanban.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../apps/kanban/boards.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../apps/kanban/create-kanban-board.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create board
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="share-2"></span>Social</span></div>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../apps/social/profile.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../apps/social/settings.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li><a class="dropdown-item" href="../apps/calendar.html">
                <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar
                </div>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Pages</a>
          <ul class="dropdown-menu navbar-dropdown-caret">
            <li><a class="dropdown-item" href="../pages/starter.html">
                <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter
                </div>
              </a>
            </li>
            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="help-circle"></span>Faq</span></div>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../pages/faq/faq-accordion.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq accordion
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../pages/faq/faq-tab.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="globe"></span>Landing</span></div>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../pages/landing/default.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../pages/landing/alternate.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../pages/pricing/pricing-column.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../pages/pricing/pricing-grid.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li><a class="dropdown-item" href="../pages/notifications.html">
                <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications
                </div>
              </a>
            </li>
            <li><a class="dropdown-item" href="../pages/members.html">
                <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members
                </div>
              </a>
            </li>
            <li><a class="dropdown-item" href="../pages/timeline.html">
                <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline
                </div>
              </a>
            </li>
            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="alert-triangle"></span>Errors</span></div>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../pages/errors/404.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../pages/errors/403.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../pages/errors/500.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
              </a>
              <ul class="dropdown-menu">
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Simple</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/authentication/simple/sign-in.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../pages/authentication/simple/sign-up.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../pages/authentication/simple/sign-out.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../pages/authentication/simple/forgot-password.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../pages/authentication/simple/reset-password.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../pages/authentication/simple/lock-screen.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../pages/authentication/simple/2FA.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Split</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/authentication/split/sign-in.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../pages/authentication/split/sign-up.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../pages/authentication/split/sign-out.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../pages/authentication/split/forgot-password.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../pages/authentication/split/reset-password.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../pages/authentication/split/lock-screen.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../pages/authentication/split/2FA.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Card</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/authentication/card/sign-in.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../pages/authentication/card/sign-up.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../pages/authentication/card/sign-out.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../pages/authentication/card/forgot-password.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../pages/authentication/card/reset-password.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../pages/authentication/card/lock-screen.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../pages/authentication/card/2FA.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="layout"></span>Layouts</span></div>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../demo/vertical-sidenav.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../demo/dark-mode.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../demo/sidenav-collapse.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../demo/darknav.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../demo/topnav-slim.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../demo/navbar-horizontal.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar horizontal
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../demo/horizontal-slim.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../demo/combo-nav.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item active" href="../demo/combo-nav-slim.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../demo/dual-nav.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-puzzle-piece"></span>Modules</a>
          <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
            <div class="border-0 scrollbar" style="max-height: 60vh;">
              <div class="px-3 pt-4 pb-3 img-dropdown">
                <div class="row gx-4 gy-5">
                  <div class="col-12 col-sm-6 col-md-4">
                    <div class="dropdown-item-group"><span class="me-2" data-feather="file-text" style="stroke-width:2;"></span>
                      <h6 class="dropdown-item-title">Forms
                      </h6>
                    </div><a class="dropdown-link" href="../modules/forms/basic/form-control.html">Form control</a><a class="dropdown-link" href="../modules/forms/basic/input-group.html">Input group</a><a class="dropdown-link" href="../modules/forms/basic/select.html">Select</a><a class="dropdown-link" href="../modules/forms/basic/checks.html">Checks</a><a class="dropdown-link" href="../modules/forms/basic/range.html">Range</a><a class="dropdown-link" href="../modules/forms/basic/floating-labels.html">Floating labels</a><a class="dropdown-link" href="../modules/forms/basic/layout.html">Layout</a><a class="dropdown-link" href="../modules/forms/advance/advance-select.html">Advance select</a><a class="dropdown-link" href="../modules/forms/advance/date-picker.html">Date picker</a><a class="dropdown-link" href="../modules/forms/advance/editor.html">Editor</a><a class="dropdown-link" href="../modules/forms/advance/file-uploader.html">File uploader</a><a class="dropdown-link" href="../modules/forms/advance/range.html">Range</a><a class="dropdown-link" href="../modules/forms/advance/rating.html">Rating</a><a class="dropdown-link" href="../modules/forms/advance/emoji-button.html">Emoji button</a><a class="dropdown-link" href="../modules/forms/validation.html">Validation</a><a class="dropdown-link" href="../modules/forms/wizard.html">Wizard</a>
                    <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                      <h6 class="dropdown-item-title">Icons
                      </h6>
                    </div><a class="dropdown-link" href="../modules/icons/feather.html">Feather</a><a class="dropdown-link" href="../modules/icons/font-awesome.html">Font awesome</a><a class="dropdown-link" href="../modules/icons/unicons.html">Unicons</a>
                    <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="bar-chart-2" style="stroke-width:2;"></span>
                      <h6 class="dropdown-item-title">ECharts
                      </h6>
                    </div><a class="dropdown-link" href="../modules/echarts/line-charts.html">Line charts</a><a class="dropdown-link" href="../modules/echarts/bar-charts.html">Bar charts</a><a class="dropdown-link" href="../modules/echarts/candlestick-charts.html">Candlestick charts</a><a class="dropdown-link" href="../modules/echarts/geo-map.html">Geo map</a><a class="dropdown-link" href="../modules/echarts/scatter-charts.html">Scatter charts</a><a class="dropdown-link" href="../modules/echarts/pie-charts.html">Pie charts</a><a class="dropdown-link" href="../modules/echarts/gauge-chart.html">Gauge chart</a><a class="dropdown-link" href="../modules/echarts/radar-charts.html">Radar charts</a><a class="dropdown-link" href="../modules/echarts/heatmap-charts.html">Heatmap charts</a><a class="dropdown-link" href="../modules/echarts/how-to-use.html">How to use</a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4">
                    <div class="dropdown-item-group"><span class="me-2" data-feather="package" style="stroke-width:2;"></span>
                      <h6 class="dropdown-item-title">Components
                      </h6>
                    </div><a class="dropdown-link" href="../modules/components/accordion.html">Accordion</a><a class="dropdown-link" href="../modules/components/avatar.html">Avatar</a><a class="dropdown-link" href="../modules/components/alerts.html">Alerts</a><a class="dropdown-link" href="../modules/components/badge.html">Badge</a><a class="dropdown-link" href="../modules/components/breadcrumb.html">Breadcrumb</a><a class="dropdown-link" href="../modules/components/button.html">Buttons</a><a class="dropdown-link" href="../modules/components/calendar.html">Calendar</a><a class="dropdown-link" href="../modules/components/card.html">Card</a><a class="dropdown-link" href="../modules/components/carousel/bootstrap.html">Bootstrap</a><a class="dropdown-link" href="../modules/components/carousel/swiper.html">Swiper</a><a class="dropdown-link" href="../modules/components/collapse.html">Collapse</a><a class="dropdown-link" href="../modules/components/dropdown.html">Dropdown</a><a class="dropdown-link" href="../modules/components/list-group.html">List group</a><a class="dropdown-link" href="../modules/components/modal.html">Modals</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/navs.html">Navs</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="dropdown-link" href="../modules/components/offcanvas.html">Offcanvas</a><a class="dropdown-link" href="../modules/components/progress-bar.html">Progress bar</a><a class="dropdown-link" href="../modules/components/placeholder.html">Placeholder</a><a class="dropdown-link" href="../modules/components/pagination.html">Pagination</a><a class="dropdown-link" href="../modules/components/popovers.html">Popovers</a><a class="dropdown-link" href="../modules/components/scrollspy.html">Scrollspy</a><a class="dropdown-link" href="../modules/components/sortable.html">Sortable</a><a class="dropdown-link" href="../modules/components/spinners.html">Spinners</a><a class="dropdown-link" href="../modules/components/toast.html">Toast</a><a class="dropdown-link" href="../modules/components/tooltips.html">Tooltips</a><a class="dropdown-link" href="../modules/components/typed-text.html">Typed text</a><a class="dropdown-link" href="../modules/components/chat-widget.html">Chat widget</a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4">
                    <div class="dropdown-item-group"><span class="me-2" data-feather="columns" style="stroke-width:2;"></span>
                      <h6 class="dropdown-item-title">Tables
                      </h6>
                    </div><a class="dropdown-link" href="../modules/tables/basic-tables.html">Basic tables</a><a class="dropdown-link" href="../modules/tables/advance-tables.html">Advance tables</a><a class="dropdown-link" href="../modules/tables/bulk-select.html">Bulk Select</a>
                    <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool" style="stroke-width:2;"></span>
                      <h6 class="dropdown-item-title">Utilities
                      </h6>
                    </div><a class="dropdown-link" href="../modules/utilities/background.html">Background</a><a class="dropdown-link" href="../modules/utilities/borders.html">Borders</a><a class="dropdown-link" href="../modules/utilities/colors.html">Colors</a><a class="dropdown-link" href="../modules/utilities/display.html">Display</a><a class="dropdown-link" href="../modules/utilities/flex.html">Flex</a><a class="dropdown-link" href="../modules/utilities/stacks.html">Stacks</a><a class="dropdown-link" href="../modules/utilities/float.html">Float</a><a class="dropdown-link" href="../modules/utilities/grid.html">Grid</a><a class="dropdown-link" href="../modules/utilities/interactions.html">Interactions</a><a class="dropdown-link" href="../modules/utilities/opacity.html">Opacity</a><a class="dropdown-link" href="../modules/utilities/overflow.html">Overflow</a><a class="dropdown-link" href="../modules/utilities/position.html">Position</a><a class="dropdown-link" href="../modules/utilities/shadows.html">Shadows</a><a class="dropdown-link" href="../modules/utilities/sizing.html">Sizing</a><a class="dropdown-link" href="../modules/utilities/spacing.html">Spacing</a><a class="dropdown-link" href="../modules/utilities/typography.html">Typography</a><a class="dropdown-link" href="../modules/utilities/vertical-align.html">Vertical align</a><a class="dropdown-link" href="../modules/utilities/visibility.html">Visibility</a>
                  </div>
                </div>
              </div>
            </div>
          </ul>
        </li>
      </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons flex-row">
      <li class="nav-item">
        <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim">
            <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark" />
            <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><span class="me-1 icon" data-feather="moon"></span></span><span class="fs-9 fw-bold">Dark</span></label>
            <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><span class="me-1 icon" data-feather="sun"></span></span><span class="fs-9 fw-bold">Light</span></label>
        </div>
    </li>
      <li class="nav-item dropdown">
        <a class="nav-link lh-1 white-space-nowrap  ps-4 pe-2 bg-info-subtle rounded-1 pb-2 pt-1" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">{{ Auth::user()->name }} 
          <span class="d-inline-block" style="height:10.2px;width:10.2px;">
            <span class="fa-solid fa-chevron-down fs-10"></span>
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
            <div class="card position-relative border-0">
                <div class="card-body p-0">
                    <div class="text-center pt-4 pb-3">
                        <div class="avatar avatar-xl ">
                            @if(!isset(Auth::user()->avatar_path))
                                <img class="rounded-circle border border-light border" src={{ asset('assets/img/defaults/default-user-thumbnail.jpg') }} alt="" />
                            @else
                                <img class="rounded-circle border border-light border" src={{ asset('storage/' . Auth::user()->avatar_path) }} alt="" />
                            @endif
                        </div>
                        <h6 class="mt-2 text-body-emphasis">{{ Auth::user()->name }}</h6>
                    </div>
                </div>
                <div class="overflow-auto scrollbar" style="height: 10rem;">
                    <ul class="nav d-flex flex-column mb-2 pb-1">
                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="user"></span><span>Profile</span></a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="{{ route('users.changeOwnPassword', Auth::user()->id) }}"> <span class="me-2 text-body fas fa-edit" ></span>Change Password</a></li>
                     
                    </ul>
                    <div class="px-3">
                        <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"
                           onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"
                            {{ __('Logout') }}>
                            <span class="me-2" data-feather="log-out"> </span>Sign out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                    <div class="my-2 text-center fw-bold fs-10 text-body-quaternary">
                        <a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;
                        <a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;
                        <a class="text-body-quaternary ms-1" href="#!">Cookies</a>
                    </div>
                </div>
                <div class="card-footer p-0 border-top border-translucent">
                    
                </div>
            </div>
        </div>
    </li>
    </ul>
  </nav>
@endif
