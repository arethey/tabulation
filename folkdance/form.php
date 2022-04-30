<div class="form-group">
    <label for="choreography">Choreography 30%</label>
    <input type="number" class="form-control" id="choreography" name="choreography" min='1' max='100'
        value="<?php if(isset($row)) { echo $row['choreography']; } ?>" required />
    <small id="emailHelp" class="form-text text-muted">Variety in steps, visual effect, and precision.</small>
</div>
<div class="form-group">
    <label for="skills">Technical skills 30%</label>
    <input type="number" class="form-control" id="skills" name="skills" min='1' max='100'
        value="<?php if(isset($row)) { echo $row['skills']; } ?>" required />
    <small id="emailHelp" class="form-text text-muted">Style, control, and body placement/posture.</small>
</div>
<div class="form-group">
    <label for="costume">Costume 20%</label>
    <input type="number" class="form-control" id="costume" name="costume" min='1' max='100'
        value="<?php if(isset($row)) { echo $row['costume']; } ?>" required />
</div>
<div class="form-group">
    <label for="time">Adherence to Time 10%</label>
    <input type="number" class="form-control" id="time" name="time" min='1' max='100'
        value="<?php if(isset($row)) { echo $row['time']; } ?>" required />
</div>
<div class="form-group">
    <label for="overall">Overall impression 10%</label>
    <input type="number" class="form-control" id="overall" name="overall" min='1' max='100'
        value="<?php if(isset($row)) { echo $row['overall']; } ?>" required />
</div>
