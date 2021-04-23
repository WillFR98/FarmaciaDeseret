<?php
	$found=true;
$products = ProductData::getAll();
foreach($products as $product){
	$q=OperationData::getQYesF($product->id);	
	if($q<=$product->inventary_min){
		$found=true;
		break;

	}
}
	?>
<div class="row">
	<div class="col-md-12">
		<h1>Bienvenido a Inventario Deseret</h1>
</div>
</div>
  <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo count(ProductData::getAll());?></h3>

              <p>Productos</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?php echo count(PersonData::getClients());?></h3>

              <p>Clientes</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
        
      </div>
      <!-- /.row -->
</div>