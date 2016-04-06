<?php

/* @var $this yii\web\View */
use yii\bootstrap\BootstrapAsset;
use yii\helpers\Url;
use backend\assets\AppAsset;
$this->title = '文章列表';
AppAsset::register($this);
date_default_timezone_set("Asia/Shanghai");
$this->registerJsFile('@web/statics/js/plugins/jeditable/jquery.jeditable.js',['depends'=>['backend\assets\AppAsset']]);
$this->registerJsFile('@web/statics/js/plugins/dataTables/jquery.dataTables.js',['depends'=>['backend\assets\AppAsset']]);
$this->registerJsFile('@web/statics/js/plugins/dataTables/dataTables.bootstrap.js',['depends'=>['backend\assets\AppAsset']]);
// $this->registerJs("jQuery(document).ready(function() {App.init();Login.init();});",View::POS_END);
?>
<div class="row">
  <div class="col-sm-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>
        文章列表
        </h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up">
            </i>
          </a>
          <a class="dropdown-toggle" data-toggle="dropdown" href="table_data_tables.html#">
            <i class="fa fa-wrench">
            </i>
          </a>
          <ul class="dropdown-menu dropdown-user">
            <li>
              <a href="table_data_tables.html#">
                选项1
              </a>
            </li>
            <li>
              <a href="table_data_tables.html#">
                选项2
              </a>
            </li>
          </ul>
          <a class="close-link">
            <i class="fa fa-times">
            </i>
          </a>
        </div>
      </div>
      <div class="ibox-content">
        <div class="">
          <a onclick="fnClickAddRow();" href="javascript:void(0);" class="btn btn-primary ">
            添加行
          </a>
        </div>
        <div id="editable_wrapper" class="dataTables_wrapper form-inline" role="grid">
          <div class="row">
            <div class="col-sm-6">
              <div class="dataTables_length" id="editable_length">
                <label>
                  每页
                  <select name="editable_length" aria-controls="editable" class="form-control input-sm">
                    <option value="10">
                      10
                    </option>
                    <option value="25">
                      25
                    </option>
                    <option value="50">
                      50
                    </option>
                    <option value="100">
                      100
                    </option>
                  </select>
                  条记录
                </label>
              </div>
            </div>
            <div class="col-sm-6">
              <div id="editable_filter" class="dataTables_filter">
                <label>
                  搜索֒
                  <input type="search" class="form-control input-sm" aria-controls="editable">
                </label>
              </div>
            </div>
          </div>
          <table class="table table-striped table-bordered table-hover  dataTable"
          id="editable" aria-describedby="editable_info">
            <thead>
              <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="editable" rowspan="1"
                colspan="1" aria-sort="ascending" aria-label="渲染引擎：激活排序列升序" style="width: 175px;">
                  渲染引擎
                </th>
                <th class="sorting" tabindex="0" aria-controls="editable" rowspan="1"
                colspan="1" aria-label="浏览器：激活排序列升序" style="width: 313px;">
                  浏览器
                </th>
                <th class="sorting" tabindex="0" aria-controls="editable" rowspan="1"
                colspan="1" aria-label="平台：激活排序列升序" style="width: 292px;">
                  平台
                </th>
                <th class="sorting" tabindex="0" aria-controls="editable" rowspan="1"
                colspan="1" aria-label="引擎版本：激活排序列升序" style="width: 131px;">
                  引擎版本
                </th>
                <th class="sorting" tabindex="0" aria-controls="editable" rowspan="1"
                colspan="1" aria-label="CSS等级：激活排序列升序" style="width: 132px;">
                  CSS等级
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class="gradeA odd">
                <td class="sorting_1">
                  Gecko
                </td>
                <td class=" ">
                  Firefox 1.0
                </td>
                <td class=" ">
                  Win 98+ / OSX.2+
                </td>
                <td class="center ">
                  1.7
                </td>
                <td class="center ">
                  A
                </td>
              </tr>
              <tr class="gradeA even">
                <td class="sorting_1">
                  Gecko
                </td>
                <td class=" ">
                  Firefox 1.5
                </td>
                <td class=" ">
                  Win 98+ / OSX.2+
                </td>
                <td class="center ">
                  1.8
                </td>
                <td class="center ">
                  A
                </td>
              </tr>
              <tr class="gradeA odd">
                <td class="sorting_1">
                  Gecko
                </td>
                <td class=" ">
                  Firefox 2.0
                </td>
                <td class=" ">
                  Win 98+ / OSX.2+
                </td>
                <td class="center ">
                  1.8
                </td>
                <td class="center ">
                  A
                </td>
              </tr>
              <tr class="gradeA even">
                <td class="sorting_1">
                  Gecko
                </td>
                <td class=" ">
                  Firefox 3.0
                </td>
                <td class=" ">
                  Win 2k+ / OSX.3+
                </td>
                <td class="center ">
                  1.9
                </td>
                <td class="center ">
                  A
                </td>
              </tr>
              <tr class="gradeA odd">
                <td class="sorting_1">
                  Gecko
                </td>
                <td class=" ">
                  Camino 1.0
                </td>
                <td class=" ">
                  OSX.2+
                </td>
                <td class="center ">
                  1.8
                </td>
                <td class="center ">
                  A
                </td>
              </tr>
              <tr class="gradeA even">
                <td class="sorting_1">
                  Gecko
                </td>
                <td class=" ">
                  Camino 1.5
                </td>
                <td class=" ">
                  OSX.3+
                </td>
                <td class="center ">
                  1.8
                </td>
                <td class="center ">
                  A
                </td>
              </tr>
              <tr class="gradeA odd">
                <td class="sorting_1">
                  Gecko
                </td>
                <td class=" ">
                  Netscape 7.2
                </td>
                <td class=" ">
                  Win 95+ / Mac OS 8.6-9.2
                </td>
                <td class="center ">
                  1.7
                </td>
                <td class="center ">
                  A
                </td>
              </tr>
              <tr class="gradeA even">
                <td class="sorting_1">
                  Gecko
                </td>
                <td class=" ">
                  Netscape Browser 8
                </td>
                <td class=" ">
                  Win 98SE+
                </td>
                <td class="center ">
                  1.7
                </td>
                <td class="center ">
                  A
                </td>
              </tr>
              <tr class="gradeA odd">
                <td class="sorting_1">
                  Gecko
                </td>
                <td class=" ">
                  Netscape Navigator 9
                </td>
                <td class=" ">
                  Win 98+ / OSX.2+
                </td>
                <td class="center ">
                  1.8
                </td>
                <td class="center ">
                  A
                </td>
              </tr>
              <tr class="gradeA even">
                <td class="sorting_1">
                  Gecko
                </td>
                <td class=" ">
                  Mozilla 1.0
                </td>
                <td class=" ">
                  Win 95+ / OSX.1+
                </td>
                <td class="center ">
                  1
                </td>
                <td class="center ">
                  A
                </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th rowspan="1" colspan="1">
                  渲染引擎
                </th>
                <th rowspan="1" colspan="1">
                  浏览器
                </th>
                <th rowspan="1" colspan="1">
                  平台
                </th>
                <th rowspan="1" colspan="1">
                  引擎版本
                </th>
                <th rowspan="1" colspan="1">
                  CSS等级
                </th>
              </tr>
            </tfoot>
          </table>
          <div class="row">
            <div class="col-sm-6">
              <div class="dataTables_info" id="editable_info" role="alert" aria-live="polite"
              aria-relevant="all">
                每页10条，总计9999条
              </div>
            </div>
            <div class="col-sm-6">
              <div class="dataTables_paginate paging_simple_numbers" id="editable_paginate">
                <ul class="pagination">
                  <li class="paginate_button previous disabled" aria-controls="editable"
                  tabindex="0" id="editable_previous">
                    <a href="#">
                      首页
                    </a>
                  </li>
                  <li class="paginate_button active" aria-controls="editable" tabindex="0">
                    <a href="#">
                      1
                    </a>
                  </li>
                  <li class="paginate_button " aria-controls="editable" tabindex="0">
                    <a href="#">
                      2
                    </a>
                  </li>
                  <li class="paginate_button " aria-controls="editable" tabindex="0">
                    <a href="#">
                      3
                    </a>
                  </li>
                  <li class="paginate_button " aria-controls="editable" tabindex="0">
                    <a href="#">
                      4
                    </a>
                  </li>
                  <li class="paginate_button " aria-controls="editable" tabindex="0">
                    <a href="#">
                      5
                    </a>
                  </li>
                  <li class="paginate_button " aria-controls="editable" tabindex="0">
                    <a href="#">
                      6
                    </a>
                  </li>
                  <li class="paginate_button next" aria-controls="editable" tabindex="0"
                  id="editable_next">
                    <a href="#">
                      尾页
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){$(".dataTables-example").dataTable();var oTable=$("#editable").dataTable();oTable.$("td").editable("../example_ajax.php",{"callback":function(sValue,y){var aPos=oTable.fnGetPosition(this);oTable.fnUpdate(sValue,aPos[0],aPos[1])},"submitdata":function(value,settings){return{"row_id":this.parentNode.getAttribute("id"),"column":oTable.fnGetPosition(this)[2]}},"width":"90%","height":"100%"})});function fnClickAddRow(){$("#editable").dataTable().fnAddData(["Custom row","New row","New row","New row","New row"])};
</script>