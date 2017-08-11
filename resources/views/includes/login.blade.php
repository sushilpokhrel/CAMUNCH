<div id="login" class="modal">
    <div class="modal-content">
        <div class="row">
            <form action = "{{ route('login') }}" method = "POST" class="col s12 m12 l12">
                {{csrf_field()}}
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" name = "email" type="email" class="validate" required >
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" name = "password" type="password" class="validate" required >
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <small class="left"><a href="#">forgot password?</a></small>
                    <small class="right "><a href="#register">Sign Up</a></small>
                </div>
                <div class="row center">
                    <button class="btn waves-effect waves-light">Login
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>