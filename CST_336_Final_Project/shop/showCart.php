<?php
session_start();
$product_ids = array();

 //include '../inc/dbConnection.php';
 $conn = mysqli_connect('localhost','root','','finalProject');
 //hardcoded 
 
if(filter_input(INPUT_POST,'add_to_cart'))
 {    
      //add items to the existing cart array
      if(isset($_SESSION['shopping_cart']))  
      {   
           //tracks products in shopping cart 
           $count = count($_SESSION['shopping_cart']);  //count() starts from 1, array keys start from 0
           
           //create sequential for matching array keys to product id's
           $product_ids = array_column($_SESSION['shopping_cart'],'id'); 
           
           //if the product being added to the cart does NOT exist in the array
           if(!in_array(filter_input(INPUT_GET,'id'), $product_ids))  
           {     
                //fill the $_SESSION shopping cart array with GET id variable and POST form values
                $_SESSION['shopping_cart'][$count] = array //add next array key based on session count
                (  
                     'id'        =>  filter_input(INPUT_GET,'id'),  
                     'name'      =>  filter_input(INPUT_POST,'name'),  
                     'price'     =>  filter_input(INPUT_POST,'price'),    
                     'stock'  =>  filter_input(INPUT_POST,'stock')  
                );  
           }  
           else  //product already exists, increase quantity
           {  
                //match array key to id of the product being added to the cart
                for ($i = 0; $i < count($product_ids); $i++)
                {
                    if ($product_ids[$i] == filter_input(INPUT_GET,'id'))
                    {
                        //add item quantity to the existing product in the array
                        $_SESSION['shopping_cart'][$i]['stock'] += filter_input(INPUT_POST,'stock');
                    }
                } 
           } 
      }  
      else  //if shopping cart doesn't exist, create first product with array key 0
      {  
           //create array using submitted form data, starting from key 0 and fill it with values
            $_SESSION['shopping_cart'][0] = array
            (  
                 'id'        =>  filter_input(INPUT_GET,'id'),  
                 'name'      =>  filter_input(INPUT_POST,'name'),  
                 'price'     =>  filter_input(INPUT_POST,'price'),    
                 'stock'  =>  filter_input(INPUT_POST,'stock')  
            );   
      }  
 }  
 
 //removes products 
 if(filter_input(INPUT_GET,'action'))  
 {  
      if(filter_input(INPUT_GET,'action') == 'delete')  
      {   
           //loops thourgh the products til they match 
           foreach($_SESSION['shopping_cart'] as $key => $product)  
           {  
                if($product['id'] == filter_input(INPUT_GET,'id'))  
                {  
                     //remove product  when id's match 
                     unset($_SESSION['shopping_cart'][$key]);  
                }  
           }
           //reset session array keys
           $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
      }  
 }  
 
 
 function pre_r($array)
 {
     echo '<pre>';
     print_r($array);
     echo '</pre>';
 }
?>  
 

<!DOCTYPE html>
<html>
    <head>
        <title> Shopping Cart </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/shopping-cart.css">
    </head>
    <body>  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Store 336</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="women.php">Women<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="men.php">Men<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="showCart.php">Cart<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../signout_process.php">Sign out</a>
                    </li>
                </ul>
            </div>
        </nav>        
        
    <br />  
    <div class="container">  
         <?php  
         $query = 'SELECT * FROM items ORDER BY id ASC';  
         $result = mysqli_query($conn, $query);  
         if ($result): //checks to make sure the items table is not empty
         if(mysqli_num_rows($result) > 0): 
              while($product = mysqli_fetch_array($result)): 
         ?>
         <div class="col-sm-4 col-md-3">  
            <form method="post" action="showCart.php?action=add&id=<?php echo $product['id']; ?>">  
                <div class="products">  
                     <img src="<?php echo '../'.$product['imageURL']; ?>" class="img-responsive" /><br />  
                     <h4 class="text-info"><?php echo $product['name']; ?></h4>  
                     <h4>$ <?php echo $product['price']; ?></h4>  
                     <input type="text" name="stock" class="form-control" value="1" />  
                     <input type="hidden" name="name" value="<?php echo $product['name']; ?>" />  
                     &nbsp;
                     <input type="hidden" name="price" value="<?php echo $product['price']; ?>" />  
                     <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" 
                            value="Add to Cart" />  
                </div>  
            </form>  
         </div>  
         <?php  
              endwhile;
         endif;   
         endif;
         ?>   
        <div style="clear:both"></div>  
        <br />  
        <div class="table-responsive">  
        <table class="table">  
            <tr><th colspan="5"><h3>Order Details</h3></th></tr>   
        <tr>  
             <th width="40%">Product Name</th>  
             <th width="10%">Stock</th>   
             <th width="20%">Price</th>  
             <th width="15%">Total</th>  
             <th width="5%">Action</th>  
        </tr>  
        <?php   
        if(!empty($_SESSION['shopping_cart'])):  
            
             $total = 0;  
        
             foreach($_SESSION['shopping_cart'] as $key => $product): 
        ?>  
        <tr>  
           <td><?php echo $product['name']; ?></td>  
           <td><?php echo $product['stock']; ?></td>  
           <td>$ <?php echo $product['price']; ?></td>  
           <td>$ <?php echo number_format($product['stock'] * $product['price'], 2); ?></td>  
           <td>
               <a href="showCart.php?action=delete&id=<?php echo $product['id']; ?>">
                    <div class="btn-danger">Remove</div>
               </a>
           </td>  
        </tr>  
        <?php  
                  $total = $total + ($product['stock'] * $product['price']);  
             endforeach;  
        ?>  
        <tr>  
             <td colspan="3" align="right">Total</td>  
             <td align="right">$ <?php echo number_format($total, 2); ?></td>  
             <td></td>  
        </tr>  
        <tr>
            <!-- Show checkout button only if the shopping cart is not empty -->
            <td colspan="5">
             <?php 
                if (isset($_SESSION['shopping_cart'])):
                if (count($_SESSION['shopping_cart']) > 0):
             ?>
                <a href="checkout.php" class="button">Checkout</a>
             <?php endif; endif; ?>
            </td>
        </tr>
        <?php  
        endif;
        ?>  
        </table>  
         </div> 
        </div>  
      </body>  
 </html>