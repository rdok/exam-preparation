<form class="form-horizontal" method="post">
    <fieldset>
        <legend>Legend</legend>
        <div class="form-group">
            <label for="inputName" class="col-lg-2 control-label">Name:</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Enter">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email:</label>
            <div class="col-lg-10">
                <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Enter">
            </div>
        </div>
        <div class="form-group">
            <label for="inputMessage" class="col-lg-2 control-label">Message:</label>
            <div class="col-lg-10">
                <textarea class="form-control" rows="3" id="inputMessage" name="inputMessage"></textarea>
                <span class="help-block">Enter</span>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
                <input type="submit" value="Send" class="btn btn-primary">
            </div>
        </div>
    </fieldset>
</form>
