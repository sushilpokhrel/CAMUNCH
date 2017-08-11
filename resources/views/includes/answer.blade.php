<div id="answer" class="modal">
    <div class="row">
        <h4><i class="material-icons left">question_answer</i> Answer</h4>
    </div>
    <div class="modal-content">
        <div class="row">
            @if(Auth::user())
                <form action = "/answer/{{$question->id}}" method = "post" class="col s12 m12 l12">
                    {{csrf_field()}}
                    <input type="hidden" name = "user_id" value = "{{Auth::user()->id}}">
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea name = "answer" id="question" class="materialize-textarea"></textarea>
                            <label for="question">Answer</label>
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