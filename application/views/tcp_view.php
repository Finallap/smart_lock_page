<div class="span9">
    <h1 class="page-title">TCP记录查看</h1>
    <div class="block">
      <p class="block-heading">TCP消息列表，共<?php echo $all_count;?>条，目前第<?php echo $page;?>页：</p>
      <div class="block-body">
          <div class="row-fluid">
            <?php
              $table_header = <<<EOF
              <table class="table" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="50"><p align="center">ID</p></td>
                  <td width="300"><p align="center">收到的报文 </p></td>
                  <td width="100"><p align="center">返回的报文 </p></td>
                  <td width="200"><p align="center">时间 </p></td>
                </tr>
EOF;
              echo $table_header;

              foreach ($tcp_list as $key => $tcp_detail) 
              {
                  echo "<tr>\n";
                  echo '<td width="50"><p align="center">'.$tcp_detail['id'].'</p></td>';
                  echo '<td width="300"><p align="center">'.$tcp_detail['content'].'</p></td>'."\n";
                  echo '<td width="100"><p align="center">'.$tcp_detail['response'].'</p></td>'."\n";
                  echo '<td width="200"><p align="center">'.$tcp_detail['time'].'</p></td>'."\n";
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
