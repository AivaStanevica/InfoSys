<div class="modal fade" id="addFolder" tabindex="-1" role="dialog" aria-labelledby="addFinanceModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pievienot jaunu mapi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <form method="POST" action="{{ route('folderStore')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="folderName" class="col-form-label">Nosaukums</label>
                        <input type="text" class="form-control" id="folderName" name="folderName">
                    </div>
                    <div class="form-group">
                        <label for="folderDescription" class="col-form-label">Apraksts</label>
                        <textarea class="form-control" id=folderDescription" name="folderDescription"></textarea>
                    </div>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Aizvērt</button>
                    <button type="submit" type="button" class="btn btn-primary">Saglabāt</button>
                </form>
            </div>
        </div>
    </div>
</div>