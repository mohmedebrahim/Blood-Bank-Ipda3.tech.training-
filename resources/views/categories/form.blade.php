<div class="form-groub">
    <div class="row">
        <div class="col-6">
            <label for="name">Name</label>
            {{Form::text('name',$model->name,[
                'class' => 'form-control mb-2'
            ])}}
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-success" type="submit">Submit</button>
    </div>
</div>
