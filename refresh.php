<?php 
  $data = func::getdata();
  $key = array_rand($data);
  $value = $data[$key];
  $keys = array_keys($value);
  session_start();
  $_SESSION['curr'] = $value;
  $_SESSION['keys'] = $keys;
  ?>
  <div class="inner cover">
    <h1 id="heading" class="cover-heading">
    <?php echo ($value[$keys[1]] == '');
     if($value[$keys[0]] == ''): ?>
      <?php echo $value[$keys[1]]; ?>  
    <?php else: ?>
      <?php echo $value[$keys[0]]; ?>              
      <span style="left:<?php echo $value[$keys[2]];?>px;"><?php echo $value[$keys[1]];?></span>
    <?php endif; ?>
    </h1>
    <p class="lead"><?php echo ucfirst($value[$keys[4]]); ?></p>
    <form id="form1" class="col-sm-6 col-sm-offset-3">
      <p class="lead">
        <div class="form-group">
          <label for="verbinput">Guess the て-form</label>
          <input type="input" class="form-control input-lg" id="verbinput" autocomplete="off" placeholder="Guess">
        </div>
      </p>
      <p class="lead">
        <a href="#" class="btn btn-lg btn-default show-btn">Show answer</a> 
        <a href="#" class="btn btn-lg btn-default next-btn">Next word</a>
      </p>
    </form>
  </div>