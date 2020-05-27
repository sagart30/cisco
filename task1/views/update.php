<div class="container">
  <h2>Update Route</h2>
  <form method="post" action="">
    <div class="form-group">
      <label for="hostname">Hostname:</label>
      <input type="hostname" class="form-control" id="hostname" value="<?php echo $row['hostname']; ?>" placeholder="Enter hostname" name="hostname" required>
    </div>
    <div class="form-group">
      <label for="loopback">Loopback:</label>
      <input type="text" class="form-control" id="loopback" value="<?php echo $row['loopback']; ?>" placeholder="Enter loopback" name="loopback" required>
    </div>
    <div class="form-group">
      <label for="macaddress">Macaddress:</label>
      <input type="text" class="form-control" id="macaddress" value="<?php echo $row['macaddress']; ?>" placeholder="Enter macaddress" name="macaddress" required>
      <input type="hidden" id="sapid" value="<?php echo $row['sapid']; ?>" name="sapid">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

