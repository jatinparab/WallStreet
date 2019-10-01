 <?php 
   $conn = mysqli_connect("localhost", "root", "", "dalal");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "SELECT * from stocks";
    $result = $conn->query($sql);
?>
<?php
                while($row = $result->fetch_assoc()){
                ?>
                <div class="col-sm-12 container-stock <?php if($row["delta"]==2){ echo 'greenfade'; }else if($row["delta"]==1){ echo 'redfade';} ?>">
                    <div class="col-sm-6"><h4 class="title-stock"><?php echo $row["stock_name"]; ?>
                        <?php if($row["delta"] == 2){ ?>
                        <i class="fa fa-arrow-up" aria-hidden="true"></i>
                    <?php 
                              }else if($row["delta"] == 1 ){
                    ?>
                    <i class="fa fa-arrow-down" aria-hidden="true"></i>
                        <?php
                }
                        ?> 
                        </h4>
                    </div>
                    <div class="col-sm-6"><h4>Rs. <?php echo $row["stock_price"]; ?>
<?php if($row["delta"] == 2){ ?>
                        <span class="green">(+<?php echo $row["delta_pc"]; ?>%)</span>
                        <?php }else if($row["delta"]==1){ ?>
                        <span class="red"> (<?php echo $row["delta_pc"]; ?>%) </span>
                        <?php } ?>
                        </h4></div>
                </div>
                <?php 
            }
    ?>
