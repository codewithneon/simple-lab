<header>
    <nav class="navbar navbar-expand bg-warning justify-content-end px-2">
        <button
            type="button"
            data-bs-toggle="modal"
            data-bs-target="#logoutConfirm"
            class="btn btn-sm btn-outline-dark">
            <i class="nav_icon fa-solid fa-right-from-bracket"></i>
            <b class="text-uppercase">Sign Out</b>
        </button>
    </nav>
</header>
<form
    method="post"
    tabindex="-1"
    class="modal fade"
    id="logoutConfirm"
    aria-hidden="true"
    data-bs-keyboard="false"
    data-bs-backdrop="static"
    action="{{route('account.logout')}}">@csrf
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img class="img-fluid" src="{{asset('assets/images/logout.png')}}" alt="Logout Confirm">
                Are you sure to confirm logout?
            </div>
            <div class="modal-footer justify-content-between p-0">
                <button type="button" class="btn btn-sm btn-success" data-bs-dismiss="modal">
                    Get Back
                </button>
                <button type="submit" class="btn btn-sm btn-danger">
                    Sign Out
                </button>
            </div>
        </div>
    </div>
</form>
