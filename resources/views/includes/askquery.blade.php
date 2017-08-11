<div id="askquery" class="modal">
    <div class="row">
        <h4><i class="material-icons left">question_answer</i> Ask Query</h4>
    </div>
    <div class="modal-content">
        <div class="row">
            @if(Auth::user())
            <form action = "/question" method = "post" class="col s12 m12 l12">
                {{csrf_field()}}
                <input type="hidden" name = "user_id" value = "{{Auth::user()->id}}">
                <input type="hidden" name = "isApproved" value = "0">
                <div class="row">
                    <div class="input-field col s12">
                        <textarea name = "question" id="question" class="materialize-textarea"></textarea>
                        <label for="question">Question Title</label>
                    </div>
                </div>
                <div class="row center">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    </button>
                </div>
            </form>
                @endif

        </div>
    </div>
</div>