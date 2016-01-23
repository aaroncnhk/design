<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

// use yii\helpers\Html;
// use yii\bootstrap\ActiveForm;
// use yii\captcha\Captcha;
use yii\helpers\Url;
use yii\bootstrap\BootstrapAsset;
$this->registerCssFile("/statics/style/all-18bb1055.css", [BootstrapAsset::className()]);
$this->registerCssFile("/statics/style/family=Lato&subset=latin,latin-ext.css", [BootstrapAsset::className()]);
$this->registerCssFile("/statics/style/family.css", [BootstrapAsset::className()]);
$this->title = '象记';
$this->params['breadcrumbs'][] = $this->title;
?>
 <div id="main" role="main">
      <nav>
<a href="/">          <img width="200" class="logo" src="/statics/images/oozou-5a43422c.gif" />
</a>        <h1 class='blog-title'>Welcome to the Oozou Blog</h1>
        <p>Edited by the marvellous people of <a href="http://oozou.com">Oozou</a></p>
      </nav>
        <div class="article-summary">
    <h4><a href="an-intro-to-otp-in-elixir.html">Towards a More Maintainable CSS</a></h4>
    <p>Or, what I learned from building our new Oozou website.</p>
    <div class="article-info">
      <img width="30" src="/statics/images/Thai-1fcc6e94.png" />
      By <span class="author">Thai Pangsakulyanont</span> - <span>March  3, 2015</span>
      <span class="tags"><a href="an-intro-to-otp-in-elixir.html">css</a></span>
    </div>
  </div>
  <div class="article-summary">
    <h4><a href="/an-intro-to-otp-in-elixir/">An intro to OTP in Elixir</a></h4>
    <p>In this installment in our series of introductory Elixir blog posts we'll convert the FizzBuzz server from last time into an OTP app.</p>
    <div class="article-info">
      <img width="30" src="/statics/images/Michael-73a73147.png" />
      By <span class="author">Michael Kohl</span> - <span>February 13, 2015</span>
      <span class="tags"><a href="an-intro-to-otp-in-elixir.html">elixir</a>, <a href="an-intro-to-otp-in-elixir.html">polyglot</a></span>
    </div>
  </div>
  <div class="article-summary">
    <h4><a href="/never-skip-a-callback-in-your-tests/">Never Skip a Callback in Your Tests</a></h4>
    <p>What I learned tracking one hard-to-catch bug in our specs.</p>
    <div class="article-info">
      <img width="30" src="/statics/images/Thai-1fcc6e94.png" />
      By <span class="author">Thai Pangsakulyanont</span> - <span>February 11, 2015</span>
      <span class="tags"><a href="an-intro-to-otp-in-elixir.html">rails</a>, <a href="an-intro-to-otp-in-elixir.html">testing</a></span>
    </div>
  </div>
  <div class="article-summary">
    <h4><a href="an-intro-to-otp-in-elixir.html">Exploring Elixir processes</a></h4>
    <p>In this blog post we'll look at processes in Elixir by turning the FizzBuzz example from last time into a simple server.</p>
    <div class="article-info">
      <img width="30" src="/statics/images/Michael-73a73147.png" />
      By <span class="author">Michael Kohl</span> - <span>December 16, 2014</span>
      <span class="tags"><a href="an-intro-to-otp-in-elixir.html">elixir</a>, <a href="an-intro-to-otp-in-elixir.html">polyglot</a></span>
    </div>
  </div>
  <div class="article-summary">
    <h4><a href="an-intro-to-otp-in-elixir.html">Adding per-tag Atom feeds to Middleman</a></h4>
    <p>Today we decided to add per-tag feeds to our blog. Middleman proved to be flexible enough to make this pretty easy.</p>
    <div class="article-info">
      <img width="30" src="/statics/images/Michael-73a73147.png" />
      By <span class="author">Michael Kohl</span> - <span>December 12, 2014</span>
      <span class="tags"><a href="an-intro-to-otp-in-elixir.html">ruby</a>, <a href="an-intro-to-otp-in-elixir.html">middleman</a></span>
    </div>
  </div>
  <div class="article-summary">
    <h4><a href="an-intro-to-otp-in-elixir.html">The Art of MVP Testing</a></h4>
    <p>Testing to avoid a downfall</p>
    <div class="article-info">
      <img width="30" src="/statics/images/Dev-7c4706cd.png" />
      By <span class="author">Dev A.</span> - <span>December 11, 2014</span>
      <span class="tags"><a href="an-intro-to-otp-in-elixir.html">testing</a>, <a href="/tags/mvp/">mvp</a></span>
    </div>
  </div>
  <div class="article-summary">
    <h4><a href="an-intro-to-otp-in-elixir.html">LOL Errors</a></h4>
    <p>A ruby gem to record your facial expressions when app errors occur during development</p>
    <div class="article-info">
      <img width="30" src="/statics/images/Jeep-bbd9aba0.png" />
      By <span class="author">Jeep Kiddee</span> - <span>December  4, 2014</span>
      <span class="tags"><a href="an-intro-to-otp-in-elixir.html">fun</a></span>
    </div>
  </div>
  <div class="article-summary">
    <h4><a href="an-intro-to-otp-in-elixir.html">Working with Multiple Values in a Promise Chain using Stateful Context</a></h4>
    <p>When we do asynchronous operations involving multiple values or objects using promises, sometimes our code could become messy. This article proposes an approach that could make the code more clean.</p>
    <div class="article-info">
      <img width="30" src="/statics/images/Thai-1fcc6e94.png" />
      By <span class="author">Thai Pangsakulyanont</span> - <span>November 21, 2014</span>
      <span class="tags"><a href="an-intro-to-otp-in-elixir.html">javascript</a></span>
    </div>
  </div>
  <div class="article-summary">
    <h4><a href="an-intro-to-otp-in-elixir.html">Why we are excited about Elixir</a></h4>
    <p>After more than 3.5 years of work, the Elixir team released version 1.0.0 on September 18th 2014. Congrats guys!</p>
    <div class="article-info">
      <img width="30" src="/statics/images/Michael-73a73147.png" />
      By <span class="author">Michael Kohl</span> - <span>November 18, 2014</span>
      <span class="tags"><a href="an-intro-to-otp-in-elixir.html">elixir</a>, <a href="/tags/polyglot/">polyglot</a></span>
    </div>
  </div>
  <div class="article-summary">
    <h4><a href="an-intro-to-otp-in-elixir.html">CSS Oozou Logo</a></h4>
    <p>Our logo carefully crafted in CSS.</p>
    <div class="article-info">
      <img width="30" src="/statics/images/Phat-e9f9b53f.png" />
      By <span class="author">Phat Wangrungarun</span> - <span>January 24, 2014</span>
      <span class="tags"><a href="an-intro-to-otp-in-elixir.html">css</a>, <a href="an-intro-to-otp-in-elixir.html">fun</a></span>
    </div>
  </div>
  <div class="article-summary">
    <h4><a href="an-intro-to-otp-in-elixir.html">Online Banking sites suck.</a></h4>
    <p>It is a sad fact that most online banking sites are excruciatingly painful to use and generally make your eyes bleed.</p>
    <div class="article-info">
      <img width="30" src="/statics/images/Jan-ecf7d1d9.png" />
      By <span class="author">Jan Jones</span> - <span>January 10, 2014</span>
      <span class="tags"><a href="an-intro-to-otp-in-elixir.html">ux</a>,<a href="an-intro-to-otp-in-elixir.html">ui</a></span>
    </div>
  </div>
  <div class="article-summary">
    <h4><a href="an-intro-to-otp-in-elixir.html">A Warm Welcome</a></h4>
    <p>Welcome to our new blog.</p>
    <div class="article-info">
      <img width="30" src="/statics/images/Jan-ecf7d1d9.png" />
      By <span class="author">Jan Jones</span> - <span>January 10, 2014</span>
      <span class="tags"><a href="an-intro-to-otp-in-elixir.html">news</a></span>
    </div>
  </div>

    </div>
