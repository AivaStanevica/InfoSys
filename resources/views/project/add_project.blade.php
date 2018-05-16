<div class="modal fade" id="addProject" tabindex="-1" role="dialog" aria-labelledby="addProject" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pievienot jaunu projektu</h5>
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
                <form method="POST" action="{{ route('projectStore')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="projectName" class="col-form-label">Nosaukums</label>
                        <input type="text" class="form-control" id="projectName" name="projectName">
                    </div>
                    <div class="form-group">
                        <label for="projectDescription" class="col-form-label">Apraksts</label>
                        <textarea class="form-control" id=projectDescription" name="projectDescription"></textarea>
                    </div>
                    <div class="input-daterange input-group" id="datepicker">
                        <input type="text" class="input-sm form-control" name="start" />
                        <span class="input-group-addon">to</span>
                        <input type="text" class="input-sm form-control" name="end" />
                    </div>
                    <div class="form-group">
                        <label for="projectSum" class="col-form-label">Pieejamā summa</label>
                        <input type="text" class="form-control" id="projectSum" name="projectSum">
                    </div>
                    <div class="form-group">
                        <label for="">Atbildīgais</label>
                        <select id="responsible" class="form-control" name="responsible">
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Aizvērt</button>
                    <button type="submit" type="button" class="btn btn-primary">Saglabāt</button>
                </form>
            </div>
        </div>
    </div>
</div>