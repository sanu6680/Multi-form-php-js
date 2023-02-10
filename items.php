<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="div-result">

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li role="presentation" class="active"><a href="#photo" aria-controls="home" role="tab" data-toggle="tab">صورة</a></li>
  <li role="presentation"><a href="#productInfo" aria-controls="profile" role="tab" data-toggle="tab">معلومات الصورة</a></li>    
</ul>

<!-- Tab panes -->
<div class="tab-content">

    
  <div role="tabpanel" class="tab-pane active" id="photo">
      <form action="php_action/editProductImage.php" method="POST" id="updateProductImageForm" class="form-horizontal" enctype="multipart/form-data">

      <br />
      <div id="edit-productPhoto-messages"></div>

      <div class="form-group">
          <div class="col-sm-8">							    				   
            <img src="" id="getProductImage" class="thumbnail" style="width:250px; height:250px;" />
          </div>
          <label for="editProductImage" class="col-sm-3 control-label">صورة المذكرة</label>

  </div> <!-- /form-group-->	     	           	       
      
    <div class="form-group">
          <div class="col-sm-8">
              <!-- the avatar markup -->
                  <div id="kv-avatar-errors-1" class="center-block" style="display:none;"></div>							
              <div class="kv-avatar center-block">					        
                  <input type="file" class="form-control" id="editProductImage" placeholder="الصنف" name="editProductImage" class="file-loading" style="width:auto;"/>
              </div>
            
          </div>
          <label for="editProductImage" class="col-sm-3 control-label">إختيار صورة </label>

  </div> <!-- /form-group-->	     	           	       

  <div class="modal-footer editProductPhotoFooter">
      <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
      
      <!-- <button type="submit" class="btn btn-success" id="editProductImageBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button> -->
    </div>
    <!-- /modal-footer -->
    </form>
    <!-- /form -->
  </div>
  <!-- product image -->
  <div role="tabpanel" class="tab-pane" id="productInfo">
      <form class="form-horizontal" id="editProductForm" action="php_action/editProduct.php" method="POST">				    
      <br />

      <div id="edit-product-messages"></div>

      <div class="form-group">
          <div class="col-sm-8">
            <input type="text" class="form-control" id="editProductName" placeholder="الصنف" name="editProductName" autocomplete="off">
          </div>
          <label for="editProductName" class="col-sm-3 control-label">الصنف </label>

  </div> <!-- /form-group-->	    

  <div class="form-group">
          <div class="col-sm-8">
            <input type="text" class="form-control" id="editQuantity" placeholder="اجمالي الكمية" name="editQuantity" autocomplete="off">
          </div>
          <label for="editQuantity" class="col-sm-3 control-label">الكمية </label>

  </div> <!-- /form-group-->	        	 

  <div class="form-group">
          <div class="col-sm-8">
            <input type="text" class="form-control" id="editRate" placeholder="وحدات صغرى" name="editRate" autocomplete="off">
          </div>
          <label for="editRate" class="col-sm-3 control-label">وحدة التخصيم</label>

  </div> <!-- /form-group-->	     	        

  <div class="form-group">
          <div class="col-sm-8">
            <select class="form-control" id="editBrandName" name="editBrandName">
                <option value="">~~إختيار~~</option>
                <?php 
                $sql = "SELECT brand_id, brand_name, brand_active, brand_status FROM brands WHERE brand_status = 1 AND brand_active = 1";
                      $result = $connect->query($sql);

                      while($row = $result->fetch_array()) {
                          echo "<option value='".$row[0]."'>".$row[1]."</option>";
                      } // while
                      
                ?>
            </select>
          </div>
          <label for="editBrandName" class="col-sm-3 control-label">إسم التاجر </label>

  </div> <!-- /form-group-->	

  <div class="form-group">
          <div class="col-sm-8">
            <select type="text" class="form-control" id="editCategoryName" name="editCategoryName" >
                <option value="">~~إختيار~~</option>
                <?php 
                $sql = "SELECT categories_id, categories_name, categories_active, categories_status FROM categories WHERE categories_status = 1 AND categories_active = 1";
                      $result = $connect->query($sql);

                      while($row = $result->fetch_array()) {
                          echo "<option value='".$row[0]."'>".$row[1]."</option>";
                      } // while
                      
                ?>
            </select>
          </div>
          <label for="editCategoryName" class="col-sm-3 control-label">الجهة</label>

  </div> <!-- /form-group-->					        	         	       

  <div class="form-group">
          <div class="col-sm-8">
            <select class="form-control" id="editProductStatus" name="editProductStatus">
                <option value="">~~إختيار~~</option>
                <option value="1">معمول به</option>
                <option value="2">غير معمول به</option>
            </select>
          </div>
          <label for="editProductStatus" class="col-sm-3 control-label">الحالة</label>

  </div> <!-- /form-group-->	         	        

  <div class="modal-footer editProductFooter">
      <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> إغلاق</button>
      
      <button type="submit" class="btn btn-success" id="editProductBtn" data-loading-text="تحميل..."> <i class="glyphicon glyphicon-ok-sign"></i>حفظ التعديل</button>
    </div> <!-- /modal-footer -->				     
  </form> <!-- /.form -->				     	
  </div>    
  <!-- /product info -->
</div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script>
const triggerTabList = document.querySelectorAll('#myTab button')
triggerTabList.forEach(triggerEl => {
  const tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', event => {
    event.preventDefault()
    tabTrigger.show()
  })
});
</script>
</body>
</html>