@extends("master")

@section("title", "User Entry")

@section('content')
<div class="row" id="user">
    <div class="col-12 col-md-12">
        <div class="card">
            <div class="card-header ripple-info">
                <h2 class="card-title">{{__('user.formTitle')}}</h2>
            </div>
            <div class="card-body">
                <form @submit.prevent="saveUser">
                    <div class="row">
                        <div class="col-12 col-md-5">
                            <div class="mb-1 row">
                                <label class="form-label col-4 col-md-3" for="name">{{__('user.name')}}</label>
                                <div class="col-8 col-md-9">
                                    <input type="text" class="form-control form-control-sm" autocomplete="off" id="name" name="name" />
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label class="form-label col-4 col-md-3" for="email">{{__('user.email')}}</label>
                                <div class="col-8 col-md-9">
                                    <input type="email" class="form-control form-control-sm" autocomplete="off" id="email" name="email" />
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label class="form-label col-4 col-md-3" for="mobile">{{__('user.mobile')}}</label>
                                <div class="col-8 col-md-9">
                                    <input type="text" class="form-control form-control-sm" autocomplete="off" id="mobile" name="mobile" />
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="mb-1 row">
                                <label class="form-label col-4 col-md-3" for="role">{{__('user.role')}}</label>
                                <div class="col-8 col-md-9">
                                    <select class="form-select form-select-sm" id="role" name="role">
                                        <option value="">Select Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="manager">Manager</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label class="form-label col-4 col-md-3" for="username">{{__('user.username')}}</label>
                                <div class="col-8 col-md-9">
                                    <input type="text" class="form-control form-control-sm" autocomplete="off" id="username" name="username" />
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label class="form-label col-4 col-md-3" for="password">{{__('user.password')}}</label>
                                <div class="col-8 col-md-9 password position-relative">
                                    <input type="password" class="form-control form-control-sm" autocomplete="off" id="password" name="password" />
                                    <i class="fa fa-eye" style="position: absolute;top: 26%;right: 30px;cursor:pointer;" onclick="passwordShow(event)"></i>
                                </div>
                            </div>
                            <div class="mt-1 text-end">
                                <button class="btn btn-sm btn-raised-danger" type="button">Reset</button>
                                <button class="btn btn-sm btn-raised-success" type="submit" :disabled="onProgress">
                                    <span v-if="onProgress" class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span> Save
                                </button>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            Image here
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-12 mt-1">
        <vue-good-table :columns="columns" :rows="users" :fixed-header="false" :pagination-options="{
                enabled: true,
                perPage: 100,
            }" :search-options="{ enabled: true }" :line-numbers="true" styleClass="vgt-table condensed" max-height="550px">
            <template #table-row="props">
                <span class="d-flex gap-2 justify-content-end" v-if="props.column.field == 'before'">
                    <a href="" title="edit" @click.prevent="editData(props.row)">
                        <span class="material-icons text-info" style="font-size:18px;">
                            edit
                        </span>
                    </a>
                    <a href="" title="delete" @click.prevent="deleteData(props.row.id)">
                        <span class="material-icons text-danger" style="font-size:18px;">
                            delete_outline
                        </span>
                    </a>
                </span>
            </template>
        </vue-good-table>
    </div>
</div>
@endsection

@push("js")
<script>
    new Vue({
        el: "#user",
        data() {
            return {
                columns: [{
                        label: "{{__('user.sl')}}",
                        field: 'sl'
                    },
                    {
                        label: "{{__('user.code')}}",
                        field: 'code'
                    },
                    {
                        label: "{{__('user.name')}}",
                        field: 'name'
                    },
                    {
                        label: "{{__('user.username')}}",
                        field: 'username'
                    },
                    {
                        label: "{{__('user.email')}}",
                        field: 'email'
                    },
                    {
                        label: "{{__('user.mobile')}}",
                        field: 'phone'
                    },
                    {
                        label: "{{__('user.role')}}",
                        field: 'role'
                    },
                    {
                        label: "{{__('user.status')}}",
                        field: 'statusTxt'
                    },
                    {
                        label: "{{__('user.action')}}",
                        field: "before"
                    }
                ],
                user: {
                    name: '',
                    email: '',
                    phone: '',
                    role: '',
                    username: '',
                    password: '',
                },
                users: [],

                onProgress: false,
            }
        },

        created() {
            this.getUser();
        },

        methods: {
            getUser() {
                axios.get('/get-user')
                    .then(res => {
                        this.users = res.data.map((item, index) => {
                            item.sl = index + 1;
                            item.statusTxt = item.status == 'a' ? 'Active' : 'Deactive';
                            return item;
                        });
                    })
            },
            saveUser() {
                this.onProgress = true;
                setTimeout(() => {
                    this.onProgress = false
                }, 2000)
            }
        },
    })


    // show password
    function passwordShow(event) {
        let password = $(".password").find('input').prop('type');
        if (password == 'password') {
            $(".password").find('i').removeProp('class').prop('class', 'fa fa-eye-slash')
            $(".password").find('input').removeProp('type').prop('type', 'text');
        } else {
            $(".password").find('i').removeProp('class').prop('class', 'fa fa-eye')
            $(".password").find('input').removeProp('type').prop('type', 'password');
        }
    }
</script>
@endpush