<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="" required>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <textarea name="body" id="body" cols="30" rows="10" class="form-control" required></textarea>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-secondary">Publish</button>
</div>

@include('partials.errors')