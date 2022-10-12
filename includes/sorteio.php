

<div class="container text-center text-danger">
  <br><br><br>
  <div class="row bg-info bg-gradient rounded px-3">

    <span class="fw-bold"><?php echo $Sortear->getName() . " | " . $Sortear->getDate(); ?></span>

    <?php 
    
      foreach ($result as $num )
      {

        echo $num;

      }

  ?>
    
  </div>
</div>


