<div class="modal fade" id="addFinance" tabindex="-1" role="dialog" aria-labelledby="addFinanceModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pievienot jaunu avotu</h5>
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
                <form method="POST" action="{{ route('financeStore')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="financeName" class="col-form-label">Nosaukums</label>
                        <input type="text" class="form-control" id="financeName" name="financeName">
                    </div>
                    <div class="form-group">
                        <label for="financeDescription" class="col-form-label">Apraksts</label>
                        <textarea class="form-control" id=financeDescription" name="financeDescription"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="financeSum" class="col-form-label">Pieejamā summa</label>
                        <input type="text" class="form-control" id="financeSum" name="financeSum">
                    </div>

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Aizvērt</button>
                <button type="submit" type="button" class="btn btn-primary">Saglabāt</button>
                </form>
            </div>
        </div>
    </div>
</div>