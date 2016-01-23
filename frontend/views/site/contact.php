<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

// use yii\helpers\Html;
// use yii\bootstrap\ActiveForm;
// use yii\captcha\Captcha;
use yii\helpers\Url;

$this->title = '联系';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="navbar-container navbar-container-m-sticky js-sticky">
  <nav class="navbar navbar-m-inverted">
    <div class="container">
      <div class="navbar--brand">
        <a href="/">Oozou</a>
      </div>
      <div class="navbar--menu">
        
<ul class="nav-menu">
  <li><a href="<?= Url::to(['site/work'])?>">工作</a></li>
  <li><a href="<?= Url::to(['site/contact'])?>">联系</a></li>
  <li><a href="<?= Url::to(['site/blog'])?>">象记</a></li>
</ul>
      </div>
    </div>
  </nav>
</div>


<div class="jumbotron jumbotron-m-contact">
  <div class="jumbotron--content container">
    <header class="page-header">
      <h1>联系我们</h1>
      <p class="tagline">感谢您对我们的欣赏，相信我们会友好与对彼此交谈</p>
    </header>
  </div>
</div>

<section class="contact-section" id="contact">
  <div class="container">
    <form class="contact-form" method="post" action="https://formkeep.com/f/c30087e3952a">
      <div class="contact-form--row">
        <label for="contact-form--name">还请您递上联络方式</label>
        <div class="contact-form--split">
          <div class="contact-form--split-item">
            <input class="js-required" name="first_name" id="contact-form--first--name" placeholder="姓" type="text">
          </div>
          <div class="contact-form--split-item">
            <input class="js-required" name="last_name" id="contact-form--last--name" placeholder="名" type="text">
          </div>
        </div>
      </div>
      <div class="contact-form--row">
        <div class="contact-form--split">
          <div class="contact-form--split-item">
            <input class="js-required" name="email" id="contact-form--email" placeholder="邮箱" type="email">
          </div>
          <div class="contact-form--split-item">
            <label>
              <input class="js-required" name="phone" id="contact-form--phone" placeholder="手机号码" type="tel">
            </label>
          </div>
        </div>
      </div>
      <div class="contact-form--row">
        <label for="contact-form--idea">您需要什么样的帮助?</label>
        <textarea class="js-required" name="message" id="contact-form--idea" placeholder="您想要我/我们帮您做点什么？"></textarea>
      </div>
      <div class="contact-form--row">
        <label for="contact-form--budget">您的费用预算是?</label>
        <select name="budget" id="contact-form--budget">
          <option value="$20k to $50k">$200 USD or ￥1000 RMB</option>
          <option value="$50k to $100k">$400 USD or ￥2500 RMB</option>
          <option value="$100k to $200k">$600 USD or ￥3888 RMB</option>
          <option value="$200k or more">$800 USD or more</option>
        </select>
      </div>
      <div class="contact-form--row">
        <label for="contact-form--source">您是从哪里知道我们?</label>
        <select name="source" id="contact-form--source">
          <option value="Google">谷歌</option>
          <option value="Baidu">百度</option>
          <option value="Sina">新浪</option>
          <option value="Linkedin">领英</option>
          <option value="Qzone">QQ空间</option>
          <option value="yiwan">弈万网络</option>
          <option value="lofter">网易lofter</option>
          <option value="Other">其他</option>
        </select>
      </div>
      <div class="contact-form--row-m-submit">
        <button class="contact-form--submit-button" type="submit">发送</button>
      </div>
    </form>
  </div>
</section>

