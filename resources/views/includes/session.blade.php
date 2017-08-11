@if(session()->has('message'))
    <div id="flash" class="modal">
        <div class="modal-content">
            <h4>Please Login first</h4>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">OK</a>
        </div>
    </div>
@endif