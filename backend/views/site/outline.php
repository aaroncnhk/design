<?php

/* @var $this yii\web\View */
use yii\bootstrap\BootstrapAsset;
use yii\helpers\Url;
$this->title = '管理中心';
// $this->registerCssFile("/statics/style/dashboard.css",[BootstrapAsset::className()]);
date_default_timezone_set("Asia/Shanghai");
?>

<h2 class="sub-header">环境支持</h2>
          <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>php版本</th>
                  <th>当前时间</th>
                  <th>技术支持</th>
                  <th>文章条数</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#</td>
                  <td><?php echo 'php版本：'.phpversion();?></td>
                  <th><?php echo date('Y-m-d H:i:s',time());?></th>
                  <th>sun</th>
                  <th>123</th>
                </tr>
              </tbody>
            </table>  