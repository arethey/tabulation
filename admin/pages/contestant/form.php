<div class="form-group">
    <label for="num">Contestant #</label>
    <input type="number" class="form-control" id="num" name="num" value="<?php if(isset($row)) { echo $row['num']; } ?>"
        required />
</div>
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name"
        value="<?php if(isset($row)) { echo $row['name']; } ?>" required />
</div>
