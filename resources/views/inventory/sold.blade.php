<div class="modal fade" id="sellInventory" tabindex="-1" role="dialog" aria-labelledby="sellInventoryModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pārdod</h5>
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
                <form method="POST" id="soldInventory" action="{{ route('sellInventory')}}">
                    {{csrf_field()}}
                    <div class="form-row">
                        <div class="form-group col-md-6 col-lg-6">
                            <label for="soldUnits" class="col-form-label">Skaits</label>
                            <input type="integer" class="form-control" id="soldUnits" name="soldUnits">
                        </div>
                        <div class="form-group col-md-6 col-lg-6">
                            <label for="soldPrice" class="col-form-label">Cena</label>
                            <input type="text" class="form-control" id="soldPrice" name="soldPrice">
                        </div>
                        <div class="form-group col-md-12 col-lg-12">
                            <label for="soldFinance">Pieskaitīt</label>
                            <select id="soldFinance" class="form-control" name="soldFinance">
                                @foreach($finances as $finance)
                                    <option value="{{$finance->id}}">{{$finance->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @if($invent->name!==null)
                        <input type="hidden" id="inventoryName" name="inventoryName" value="{{$invent->name}}">
                        @endif
                    </div>
                </form>
                    <form method="POST" id="soldInventory2" action="{{ route('countUnits')}}">

                        {{csrf_field()}}
                        {{ method_field('PATCH') }}
                        <input type="hidden" id="inventory" name="inventory" value="{{$invent->id}}">

                    </form>
                <a type="button" id="submitSell" class="btn btn-primary">Saglabāt</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Aizvērt</button>
            </div>
        </div>
    </div>
</div>