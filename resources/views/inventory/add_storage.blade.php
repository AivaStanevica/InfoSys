<div class="modal fade" id="addStorage" tabindex="-1" role="dialog" aria-labelledby="addStorageModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pievienot jaunu glabātuvi</h5>
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
                <form method="POST" action="{{ route('storageStore')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="storageName" class="col-form-label">Nosaukums</label>
                        <input type="text" class="form-control" id="storageName" name="storageName">
                    </div>
                    <div class="form-group">
                        <label for="storageDescription" class="col-form-label">Apraksts</label>
                        <textarea class="form-control" id=storageDescription" name="storageDescription"></textarea>
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Aizvērt</button>
                    <button type="submit" type="button" class="btn btn-primary">Saglabāt</button>
                </form>
            </div>
        </div>
    </div>
</div>