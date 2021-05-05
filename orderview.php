<div class="myaccount-content">
    <h5>Orders Detials</h5>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
               <strong> <label>User Name : </label></strong>
                <?=$orderRow->order_name?>
            </div>
              <div class="col-md-4">
                <strong> <label>Email :  </label></strong>
                <?=$orderRow->order_email?>
            </div>
              <div class="col-md-4">
                <strong> <label>Mobile No. :  </label></strong>
                <?=$orderRow->order_mobile?>
            </div>
             <div class="col-md-4">
                <strong> <label>Address : </label></strong>
                <?=$orderRow->order_address?>
            </div>
             <div class="col-md-4">
                <strong> <label>City : </label></strong>
                <?=$orderRow->order_city?>
            </div>
             <div class="col-md-4">
                <strong> <label>Pincode : </label></strong>
                <?=$orderRow->order_pincode?>
            </div>
             <div class="col-md-4">
                <strong> <label>Order Date / Time : </label></strong>
                <?=\App\Libraries\Timedate::formatDate($orderRow->order_updated_at,'timestampOut')?>
            </div>
            <div class="col-md-4">
                <strong> <label>Order Status : </label></strong>
                <?=\App\Libraries\Arraylib::$orderStatus[$orderRow->order_status]?>
            </div>
             <div class="col-md-4">
                <strong> <label>Total Order Amount : </label></strong>
                <?=$orderRow->order_total_amount?>
            </div>
        </div>
    </div>
</div>
<div class="myaccount-content">
                                                    <h5>Orders Items</h5>
                                                    <div class="myaccount-table table-responsive text-center">
                                                        <table class="table table-bordered">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th>Sr. No.</th>
                                                                    <th>Item</th>
                                                                    <th>Price</th>
                                                                     <th>Qty</th>
                                                                    <th>Total</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php 
                                                                $sr = 1;
                                                                foreach($orderItems as $key =>$vk)
                                                                {
                                                                   
                                                                    $decode = urlencode(base64_encode($vk->order_id));;
                                                                     $realAmount = $vk->p_sell;
       $disAmount = ($vk->p_dis != '0.0')?($vk->p_sell - (($vk->p_sell*$vk->p_dis)/100)):'';
       $price = !empty($disAmount)?$disAmount:$vk->p_sell;
                                                                ?>

                                                                <tr>
                                                                    <td><?=$sr++?></td>
                                                                    <td><?=$vk->p_name?></td>
                                                                    <td><?=!empty($vk->multi_order_price)?$vk->multi_order_price:$price?></td>
                                                                       <td><?=$vk->multi_order_qty?></td>
                                                                          <td><?=(!empty($vk->multi_order_price)?$vk->multi_order_price:$price)*$vk->multi_order_qty?></td>
                                                                  
                                                                
                                                                <?php } ?>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
