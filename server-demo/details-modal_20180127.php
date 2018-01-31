<?php
  require_once 'core/init.php';

  $sql="SELECT * FROM product where PRODUCT_ID = $_POST[PRODUCT_ID]; //featured =1";
  $featured=$db->query($sql);
?>



<!--<div class = "modal fade datails-1" id="details-modal" tableindex="-1" role="dialog" aria-labelledby="details" ariana hidden="true">-->
<div class="modal" id="details-modal">
  <input type="text" name="PRODUCT_ID" value=""/>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

    <div class="modal-header">
      <button class="close" type="button" data-dismiss="modal" arial-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center">Balon de fútbol</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <div class="center-block">
                <img src="images/adidas.png" alt="Levis Jeans" class="details img-responsive"/>
              </div>
            </div>
            <div class="col-sm-6" >
              <h4>Details</h4>
              <p>
                These Ball are Amazing, you must try and buy then. Get then while they last
              </p>
              <hr/>
              <p>Price: $29.99</p>
              <p>Brand:ball</p>

              <form action="add_cart.php" method="post">
                <div class="form group">
                  <div class="col-xs-3">
                    <label for="quantity" id="quantity-label">Quantity:</label>
                    <input type="text" class="form-control" id="quantity" name="quantity"/>
                  </div>
          <br/>
          <br/>
          <br/>


          </div>

            </form>
          </div>
        </div>
      </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-warning" data-dimiss="submit"><span class="glyphicon glyphicon-shopping-cart"> </span>Add to cart</button>
      </div>
    </div>
  </div>
</div>

<script>
$('mdetails-modal').on('show.bs.modal', function(e) {
    var PRODUCT_ID = $(e.relatedTarget).data('product-id');
    $(e.currentTarget).find('input[name="PRODUCT_ID"]').val(PRODUCT_ID);
});
</script>
