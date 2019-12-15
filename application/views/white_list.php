<script type="text/javascript">   
  function check()
  {
    if(document.getElementById("card_id").value == ""){  
                alert("请输入要允许的卡号!"); 
      return false;  
      }
    else{ 
          return true;
      }  
  }
</script> 

<div class="span9">
    <h1 class="page-title">白名单管理页面</h1>
    <div class="row-fluid">
        <div class="span9">
          
          <div class="block">
              <p class="block-heading">可进行卡号添加：</p>
                <div class="block-body">
                  <div class="row-fluid">
                    <form id="tab" action="<?php echo site_url('white_list/add')?>" method="post" onSubmit="return check()">
                      <label>需要添加的卡号：</label>
                      <input type="text" name="card_id" id="card_id" value="" class="input-xlarge">
                      <input name="submit" type="submit" value="增加" class="btn btn-primary pull-letf">
                    </form>
                  </div>
              </div>
          </div>
                           
          <div class="well">
              <?php echo $table;?>
          </div>

      </div>

      <div class="span3">
        <div class="well toc">
        <h3>联系方式</h3>
        <h4>联系人：</h4>
          <p>方垣闰</p>
              <h4>联系电话：</h4>
              <p>13222059389</p>
              <h4>E-mail：</h4>
              <p>547805712@qq.com</p>
        </div>
      </div>

</div>

        </div>
    </div>
    
