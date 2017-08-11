<div id="register" class="modal">
    <div class="modal-content">
        <div class="row">
            <form action = "{{ route('register') }}" method="POST">
                {{csrf_field()}}
                <div class="row">
                    <div class="input-field col s12">
                        <label for="uname">Username*</label>
                        <input id="uname" name="name" data-error=".errorTxt1" type="text" required >
                        <div class="errorTxt1"></div>
                    </div>
                    <div class="input-field col s12">
                        <label for="cemail">E-Mail *</label>
                        <input id="cemail" name="email" data-error=".errorTxt2" type="email" required >
                        <div class="errorTxt2"></div>
                    </div>
                    <div class="input-field col s12">
                        <label for="password">Password *</label>
                        <input id="password" name="password" data-error=".errorTxt3" type="password" required >
                        <div class="errorTxt3"></div>
                    </div>
                    <div class="input-field col s12">
                        <label for="cpassword">Confirm Password *</label>
                        <input id="cpassword" name="password_confirmation" data-error=".errorTxt4" type="password" required >
                        <div class="errorTxt4"></div>
                    </div>
                    {{--<div class="col s12">
                        <label for="tnc_select">Terms & Conditions *</label>
                        <p>
                            <input class="checkbox" id="cagree" name="cagree" data-error=".errorTxt9" type="checkbox">
                            <label for="cagree">Please agree to our policy</label>
                        </p>
                        <div class="input-field">
                            <div class="errorTxt6"></div>
                        </div>
                    </div>--}}

                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light right submit">Submit
                                <i class="mdi-content-send right"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>

    </div>
</div>