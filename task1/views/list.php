<div class="container">

<ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Non Ajax</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">With Ajax</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>Non Ajax</h3>
      

<?php
if(count($arr['record'])){
  ?>
  
    <table class="table">
    <thead>
      <tr>
      <th>sapid</th>
      <th>hostname</th>
      <th>loopback</th>
      <th>macaddress</th>
      <th>created</th>
      <th>modified</th>
      <th>Update</th>
      <th>Delete</th>
      </tr>
    </thead>
    <tbody>

  <?php
  foreach($arr['record'] as $key => $val){
    ?>
      <tr>
        <th><?php echo $val['sapid']; ?></th>
        <th><?php echo $val['hostname']; ?></th>
        <th><?php echo $val['loopback']; ?></th>
        <th><?php echo $val['macaddress']; ?></th>
        <th><?php echo $val['created']; ?></th>
        <th><?php echo $val['modified']; ?></th>
        <th><a href="../update/<?php echo $val['sapid']; ?>/" >Edit</a></th>
        <th><a href="../delete/<?php echo $val['sapid']; ?>/" >Delete</a></th>
      </tr>
    <?php
  }
  ?>
      </tbody>
    </table>


    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>With Ajax</h3>
      <table class="table">
        <thead>
          <tr>
          <th>sapid</th>
          <th>hostname</th>
          <th>loopback</th>
          <th>macaddress</th>
          <th>created</th>
          <th>modified</th>
          <th>Update</th>
          <th>Delete</th>
          </tr>
        </thead>
        <tbody id="ajaxDataElem">

    <tbody>
    </table>
    </div>
  </div>


  </div>
  <script>
  var baseurl = '<?php echo $BASE_PATH; ?>';
    $.get(baseurl+"/getlist/", function(data, status){
      //console.log("Data: ",data);
      $('#ajaxDataElem').html(data);
    });
  </script>
  <?php
}
