<div class="modal fade" id="lendInventory" tabindex="-1" role="dialog" aria-labelledby="lendInventoryModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aizdod inventāru: {{$invent->name}}</h5>
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
                <form method="POST" id="lendInventory" action="{{ route('lendInventory')}}">
                    {{csrf_field()}}
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="lendName" class="col-form-label">Aizdod (vārds/uzvārds)</label>
                            <input type="text" class="form-control" id="lendName" name="lendName">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lendPhone" class="col-form-label">Telefons</label>
                            <input type="text" class="form-control" id="lendPhone" name="lendPhone">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lendEmail" class="col-form-label">Epasts</label>
                            <input type="email" class="form-control" id="lendEmail" name="lendEmail">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="lendComment" class="col-form-label">Komentārs</label>
                            <input type="text" class="form-control" id="lendComment" name="lendComment">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lendDate" class="col-form-label">Aizdots līdz:</label>
                            <input type="date" class="form-control" id="lendDate" name="lendDate">
                        </div>
                    </div>
                    <input type="hidden" name="inventoryId" value="{{$invent->id}}">
                </form>
                    <form method="POST" id="lendInventory2" action="{{ route('avaliable',$invent->id)}}">

                        {{csrf_field()}}
                        {{ method_field('PATCH') }}
                        <input type="hidden" id="inventory" name="inventory" value="{{$invent->id}}">
                        <input type="hidden" id="avaliable" name="avaliable" value="0">

                    </form>
                    <a type="button" id="submitLend" class="btn btn-primary">Saglabāt</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Aizvērt</button>

                </form>
            </div>
        </div>
    </div>
</div>