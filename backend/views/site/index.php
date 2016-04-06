<?php

/* @var $this yii\web\View */
use yii\bootstrap\BootstrapAsset;
use yii\helpers\Url;
$this->title = '管理中心';
// $this->registerCssFile("/statics/style/dashboard.css",[BootstrapAsset::className()]);
date_default_timezone_set("Asia/Shanghai");
?>

<div class="ibox float-e-margins"> 
   <div class="ibox-title"> 
    <h5>系统概要信息</h5> 
    <div class="ibox-tools"> 
     <a class="collapse-link"> <i class="fa fa-chevron-up"></i> </a> 
     <a class="dropdown-toggle" data-toggle="dropdown" href="table_data_tables.html#"> <i class="fa fa-wrench"></i> </a> 
     <ul class="dropdown-menu dropdown-user"> 
      <li><a href="table_data_tables.html#">选项1</a> </li> 
      <li><a href="table_data_tables.html#">选项2</a> </li> 
     </ul> 
     <a class="close-link"> <i class="fa fa-times"></i> </a> 
    </div> 
   </div> 
   <div class="ibox-content"> 
    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline" role="grid"> 
     <div class="row"> 
      <div class="col-sm-6"> 
       <div id="DataTables_Table_0_filter" class="dataTables_filter"></div>
      </div>
     </div>
     <table class="table table-striped table-bordered table-hover dataTables-example dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info"> 
      <thead> 
       <tr role="row">
        <th>#</th>
                  <th>php版本</th>
                  <th>当前时间</th>
                  <th>技术支持</th>
                  <th>文章条数</th>
       </tr> 
      </thead> 
      <tbody> 
       <tr class="gradeA odd"> 
          <td>#</td>
          <td><?php echo 'php版本：'.phpversion();?></td>
          <th><?php echo date('Y-m-d H:i:s',time());?></th>
          <th>sun</th>
          <th>null</th>
       </tr>
      </tbody>
     </table>
    </div> 
   </div> 
  </div>