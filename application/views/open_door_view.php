<div class="span9">
    <h1 class="page-title">开门状态查看</h1>
    <div class="block">
      <p class="block-heading">开门状态查看<?php echo $all_count;?>条，目前第<?php echo $page;?>页：</p>
      <div class="block-body">
          <div class="row-fluid">
            <?php
              $table_header = <<<EOF
              <table class="table" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="50"><p align="center">ID</p></td>
                  <td width="300"><p align="center">刷卡卡号 </p></td>
                  <td width="100"><p align="center">是否开门 </p></td>
                  <td width="200"><p align="center">时间 </p></td>
                </tr>
EOF;
              echo $table_header;

              foreach ($open_door_list as $key => $open_door_detail) 
              {
                  echo "<tr>\n";
                  echo '<td width="50"><p align="center">'.$open_door_detail['id'].'</p></td>';
                  echo '<td width="300"><p align="center">'.$open_door_detail['card_id'].'</p></td>'."\n";
                  echo '<td width="100"><p align="center">';
                  if($open_door_detail['result']==1)echo "允许开门";else echo "不允许开门";
                  echo '</p></td>'."\n";
                  echo '<td width="200"><p align="center">'.$open_door_detail['time'].'</p></td>'."\n";
                  echo "</tr>\n";
              }

              echo '</table>';
            ?>
          </div>
      </div>
    </div>

    <div class="pagination">
       <?php echo $pagination?>
    </div>

</div>

</div>
