
       <?php
	    $id=$_GET['id'];
        include 'des_include/header.php';
        include 'des_include/nav.php';
        include 'des_include/sidebar.php';
        // include 'function/connection.php';
	  $count=1;
	  $select_all="SELECT p_name ,image, id ,price,discount,stock,description  FROM products WHERE id='$id'";
	  $result_all=$connection->query($select_all);
	  foreach($result_all as $key_product)
	  {
		  $name=$key_product['p_name'];
		  $id=$key_product['id'];
          $image=$key_product['image'];
		  $price=$key_product['price'];
		  $discount=$key_product['discount'];
		  $stock=$key_product['stock'];
		  $description=$key_product['description'];
		}

	  ?>
	  

	

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Products</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Products</h1>
			</div>
		</div><!--/.row-->
				
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"> Product details</h1>
			</div>
		</div><!--/.row-->
		
		
		<table class="table table-hover " >
  <thead>
    <tr>
      <th scope="col">#</th>
	  <th scope="col">name</th>
	  <th scope="col">id</th>
      <th scope="col">image</th>
      <th scope="col">price</th>
      <th scope="col">dicount</th>
	  <th scope="col">stock</th>
	  <th scope="col">description</th>
    </tr>
  </thead>
  <tbody>
	  
    <tr>
      <th scope="row"><?php echo $count++ ; ?></th>
      <td><?php echo $name; ?>  </td>
      <td> <img src="images/<?php echo $image; ?>"></td>
	  <td><?php echo $id; ?>  </td>
	  <td><?php echo $price; ?>  </td>
	  <td><?php echo $discount; ?>  </td>
	  <td><?php echo $stock; ?>  </td>
	  <td><?php echo $description; ?>  </td>
    </tr>
 
  </tbody>
</table>
		<?php
			include 'des_include/footer.php';
			
			?>