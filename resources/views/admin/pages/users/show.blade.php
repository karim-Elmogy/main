@extends('admin.layouts.app')
@section('content')


    <!-- Content wrapper -->
    <div class="content-wrapper">

        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">


            <h4 class="py-3 mb-4">
                <span class="text-muted fw-light">User / View /</span> Account
            </h4>
            <div class="row">
                <!-- User Sidebar -->
                <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                    <!-- User Card -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="user-avatar-section">
                                <div class=" d-flex align-items-center flex-column">
                                    <img class="img-fluid rounded my-4" src="../../assets/img/avatars/10.png" height="110" width="110" alt="User avatar" />
                                    <div class="user-info text-center">
                                        <h4 class="mb-2">Violet Mendoza</h4>
                                        <span class="badge bg-label-secondary">Author</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-around flex-wrap my-4 py-3">
                                <div class="d-flex align-items-start me-4 mt-3 gap-3">
                                    <span class="badge bg-label-primary p-2 rounded"><i class='bx bx-check bx-sm'></i></span>
                                    <div>
                                        <h5 class="mb-0">1.23k</h5>
                                        <span>Tasks Done</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mt-3 gap-3">
                                    <span class="badge bg-label-primary p-2 rounded"><i class='bx bx-customize bx-sm'></i></span>
                                    <div>
                                        <h5 class="mb-0">568</h5>
                                        <span>Projects Done</span>
                                    </div>
                                </div>
                            </div>
                            <h5 class="pb-2 border-bottom mb-4">Details</h5>
                            <div class="info-container">
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <span class="fw-medium me-2">Username:</span>
                                        <span>violet.dev</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="fw-medium me-2">Email:</span>
                                        <span>vafgot@vultukir.org</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="fw-medium me-2">Status:</span>
                                        <span class="badge bg-label-success">Active</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="fw-medium me-2">Role:</span>
                                        <span>Author</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="fw-medium me-2">Tax id:</span>
                                        <span>Tax-8965</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="fw-medium me-2">Contact:</span>
                                        <span>(123) 456-7890</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="fw-medium me-2">Languages:</span>
                                        <span>French</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="fw-medium me-2">Country:</span>
                                        <span>England</span>
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-center pt-3">
                                    <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser" data-bs-toggle="modal">Edit</a>
                                    <a href="javascript:;" class="btn btn-label-danger suspend-user">Suspended</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /User Card -->
                    <!-- Plan Card -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <span class="badge bg-label-primary">Standard</span>
                                <div class="d-flex justify-content-center">
                                    <sup class="h5 pricing-currency mt-3 mb-0 me-1 text-primary">$</sup>
                                    <h1 class="display-5 mb-0 text-primary">99</h1>
                                    <sub class="fs-6 pricing-duration mt-auto mb-3">/month</sub>
                                </div>
                            </div>
                            <ul class="ps-3 g-2 my-4">
                                <li class="mb-2">10 Users</li>
                                <li class="mb-2">Up to 10 GB storage</li>
                                <li>Basic Support</li>
                            </ul>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span>Days</span>
                                <span>65% Completed</span>
                            </div>
                            <div class="progress mb-1" style="height: 8px;">
                                <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span>4 days remaining</span>
                            <div class="d-grid w-100 mt-4 pt-2">
                                <button class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Upgrade Plan</button>
                            </div>
                        </div>
                    </div>
                    <!-- /Plan Card -->
                </div>
                <!--/ User Sidebar -->


                <!-- User Content -->
                <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                    <!-- User Pills -->
                    <ul class="nav nav-pills flex-column flex-md-row mb-3">
                        <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i>Account</a></li>
                        <li class="nav-item"><a class="nav-link" href="app-user-view-security.html"><i class="bx bx-lock-alt me-1"></i>Security</a></li>
                        <li class="nav-item"><a class="nav-link" href="app-user-view-billing.html"><i class="bx bx-detail me-1"></i>Billing & Plans</a></li>
                        <li class="nav-item"><a class="nav-link" href="app-user-view-notifications.html"><i class="bx bx-bell me-1"></i>Notifications</a></li>
                        <li class="nav-item"><a class="nav-link" href="app-user-view-connections.html"><i class="bx bx-link-alt me-1"></i>Connections</a></li>
                    </ul>
                    <!--/ User Pills -->

                    <!-- Project table -->
                    <div class="card mb-4">
                        <h5 class="card-header">User's Projects List</h5>
                        <div class="table-responsive mb-3">
                            <table class="table datatable-project border-top">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Project</th>
                                    <th class="text-nowrap">Total Task</th>
                                    <th>Progress</th>
                                    <th>Hours</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <!-- /Project table -->

                    <!-- Activity Timeline -->
                    <div class="card mb-4">
                        <h5 class="card-header">User Activity Timeline</h5>
                        <div class="card-body">
                            <ul class="timeline">
                                <li class="timeline-item timeline-item-transparent">
                                    <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-primary"></span></span>
                                    <div class="timeline-event">
                                        <div class="timeline-header mb-1">
                                            <h6 class="mb-0">12 Invoices have been paid</h6>
                                            <small class="text-muted">12 min ago</small>
                                        </div>
                                        <p class="mb-2">Invoices have been paid to the company</p>
                                        <div class="d-flex">
                                            <a href="javascript:void(0)" class="me-3">
                                                <img src="../../assets/img/icons/misc/pdf.png" alt="PDF image" width="15" class="me-2">
                                                <span class="fw-medium text-body">invoices.pdf</span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item timeline-item-transparent">
                                    <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-warning"></span></span>
                                    <div class="timeline-event">
                                        <div class="timeline-header mb-1">
                                            <h6 class="mb-0">Client Meeting</h6>
                                            <small class="text-muted">45 min ago</small>
                                        </div>
                                        <p class="mb-2">Project meeting with john @10:15am</p>
                                        <div class="d-flex flex-wrap">
                                            <div class="avatar me-3">
                                                <img src="../../assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" />
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Lester McCarthy (Client)</h6>
                                                <span class="text-muted">CEO of ThemeSelection</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item timeline-item-transparent">
                                    <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-info"></span></span>
                                    <div class="timeline-event">
                                        <div class="timeline-header mb-1">
                                            <h6 class="mb-0">Create a new project for client</h6>
                                            <small class="text-muted">2 Day Ago</small>
                                        </div>
                                        <p class="mb-2">5 team members in a project</p>
                                        <div class="d-flex align-items-center avatar-group">
                                            <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy">
                                                <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                                            </div>
                                            <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Marrie Patty">
                                                <img src="../../assets/img/avatars/12.png" alt="Avatar" class="rounded-circle">
                                            </div>
                                            <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Jimmy Jackson">
                                                <img src="../../assets/img/avatars/9.png" alt="Avatar" class="rounded-circle">
                                            </div>
                                            <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kristine Gill">
                                                <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                                            </div>
                                            <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Nelson Wilson">
                                                <img src="../../assets/img/avatars/14.png" alt="Avatar" class="rounded-circle">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item timeline-item-transparent">
                                    <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-success"></span></span>
                                    <div class="timeline-event">
                                        <div class="timeline-header mb-1">
                                            <h6 class="mb-0">Design Review</h6>
                                            <small class="text-muted">5 days Ago</small>
                                        </div>
                                        <p class="mb-0">Weekly review of freshly prepared design for our new app.</p>
                                    </div>
                                </li>
                                <li class="timeline-end-indicator">
                                    <i class="bx bx-check-circle"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Activity Timeline -->

                    <!-- Invoice table -->
                    <div class="card mb-4">
                        <div class="table-responsive mb-3">
                            <table class="table datatable-invoice border-top">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th><i class='bx bx-trending-up'></i></th>
                                    <th>Total</th>
                                    <th>Issued Date</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <!-- /Invoice table -->
                </div>
                <!--/ User Content -->
            </div>

            <!-- Modal -->
            <!-- Edit User Modal -->
            <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                    <div class="modal-content p-3 p-md-5">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="text-center mb-4">
                                <h3>Edit User Information</h3>
                                <p>Updating user details will receive a privacy audit.</p>
                            </div>
                            <form id="editUserForm" class="row g-3" onsubmit="return false">
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditUserFirstName">First Name</label>
                                    <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="John" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditUserLastName">Last Name</label>
                                    <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="Doe" />
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="modalEditUserName">Username</label>
                                    <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control" placeholder="john.doe.007" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditUserEmail">Email</label>
                                    <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="example@domain.com" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditUserStatus">Status</label>
                                    <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select" aria-label="Default select example">
                                        <option selected>Status</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                        <option value="3">Suspended</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditTaxID">Tax ID</label>
                                    <input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="123 456 7890" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditUserPhone">Phone Number</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">+1</span>
                                        <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" placeholder="202 555 0111" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditUserLanguage">Language</label>
                                    <select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select select2-hidden-accessible" multiple>
                                        <option value="">Select</option>
                                        <option value="english" selected>English</option>
                                        <option value="spanish">Spanish</option>
                                        <option value="french">French</option>
                                        <option value="german">German</option>
                                        <option value="dutch">Dutch</option>
                                        <option value="hebrew">Hebrew</option>
                                        <option value="sanskrit">Sanskrit</option>
                                        <option value="hindi">Hindi</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditUserCountry">Country</label>
                                    <select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select" data-allow-clear="true">
                                        <option value="">Select</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Canada">Canada</option>
                                        <option value="China">China</option>
                                        <option value="France">France</option>
                                        <option value="Germany">Germany</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Korea">Korea, Republic of</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Russia">Russian Federation</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="switch">
                                        <input type="checkbox" class="switch-input">
                                        <span class="switch-toggle-slider">
                                         <span class="switch-on"></span>
                                         <span class="switch-off"></span>
                                        </span>
                                        <span class="switch-label">Use as a billing address?</span>
                                    </label>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Edit User Modal -->

            <!-- Add New Credit Card Modal -->
            <div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-simple modal-upgrade-plan">
                    <div class="modal-content p-3 p-md-5">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="text-center mb-4">
                                <h3>Upgrade Plan</h3>
                                <p>Choose the best plan for user.</p>
                            </div>
                            <form id="upgradePlanForm" class="row g-3" onsubmit="return false">
                                <div class="col-sm-9">
                                    <label class="form-label" for="choosePlan">Choose Plan</label>
                                    <select id="choosePlan" name="choosePlan" class="form-select" aria-label="Choose Plan">
                                        <option selected>Choose Plan</option>
                                        <option value="standard">Standard - $99/month</option>
                                        <option value="exclusive">Exclusive - $249/month</option>
                                        <option value="Enterprise">Enterprise - $499/month</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 d-flex align-items-end">
                                    <button type="submit" class="btn btn-primary">Upgrade</button>
                                </div>
                            </form>
                        </div>
                        <hr class="mx-md-n5 mx-n3">
                        <div class="modal-body">
                            <h6 class="mb-0">User current plan is standard plan</h6>
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <div class="d-flex justify-content-center me-2 mt-3">
                                    <sup class="h5 pricing-currency pt-1 mt-3 mb-0 me-1 text-primary">$</sup>
                                    <h1 class="display-3 mb-0 text-primary">99</h1>
                                    <sub class="h5 pricing-duration mt-auto mb-2">/month</sub>
                                </div>
                                <button class="btn btn-label-danger cancel-subscription mt-3">Cancel Subscription</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Add New Credit Card Modal -->

            <!-- /Modal -->
        </div>
        <!-- / Content -->


@endsection
