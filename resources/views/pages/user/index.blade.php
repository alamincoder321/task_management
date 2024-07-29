@extends("master")

@section("title", "User Entry")

@section('content')
<div class="row">
    <div class="col-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <form class="form-inline">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="mb-1 row">
                                <label class="form-label col-4 col-md-3" for="name">Name</label>
                                <div class="col-8 col-md-9">
                                    <input class="form-control form-control-sm" autocomplete="off" id="name" type="text">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label class="form-label col-4 col-md-3" for="address">Description</label>
                                <div class="col-8 col-md-9">
                                    <textarea class="form-control form-control-sm" autocomplete="off" id="address" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-1 row">
                                <label class="form-label col-4 col-md-3" for="email">Email</label>
                                <div class="col-8 col-md-9">
                                    <input class="form-control form-control-sm" autocomplete="off" id="email" type="email" placeholder="name@example.com">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label class="form-label col-4 col-md-3" for="address">Description</label>
                                <div class="col-8 col-md-9">
                                    <textarea class="form-control form-control-sm" autocomplete="off" id="address" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="mt-1 text-end">
                                <button class="btn btn-raised-danger" type="button">Reset</button>
                                <button class="btn btn-raised-success" type="button">Success</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-12">

    </div>
</div>
@endsection