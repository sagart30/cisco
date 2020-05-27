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
    	</tr>
    <?php
  }
  ?>
  	</table>
  <?php
}
