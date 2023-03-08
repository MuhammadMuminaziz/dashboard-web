<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h1 class="p-3">Create User</h1>
                <!-- <ul>
                    <li>name</li>
                    <li>email</li>
                    <li>password</li>
                    <li>password comfirm</li>
                </ul> -->
                <div class="col-md-5">
                    <form action="" method="post">
                        <div class="mb-2">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" autocomplete="off" placeholder="Ali Ikbal">
                        </div>
                        <div class="mb-2">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" autocomplete="off" placeholder="example@gmail.com">
                        </div>
                        <div class="mb-2">
                            <label for="password">Password</label>
                            <input type="text" name="password" id="password" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="password_confirm">Password Confirm</label>
                            <input type="text" name="password_confirm" id="password_confirm" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>