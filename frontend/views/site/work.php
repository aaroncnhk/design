<?php

/* @var $this yii\web\View */

// use yii\helpers\Html;
use yii\helpers\Url;
$this->title = '工作';
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


<div class="jumbotron jumbotron-m-work">
  <div class="jumbotron--content">
    <header class="page-header container">
      <h1>Client Work</h1>
      <p class="tagline">A small selection of our work, made with love.</p>
    </header>
  </div>
</div>

<section class="work" id="work">
    <article class="work-item">
      <figure>
        <div class="work-showcase">
          <img alt="SlimWiki" data-at2x="/statics/images/slimwiki_2x-cae7c321.jpg" src="/statics/images/slimwiki-cf4fadfb.jpg" />
        </div>
      </figure>
      <div class="work-item--info">
        <h2>SlimWiki</h2>
        <p class="tagline">Beautiful Team Wikis</p>
        <p>Wikis don’t have to be ugly, complex and hard to manage. 
Welcome to the future of the Wiki. Simple, versatile and 
powerful features and incredibly low friction content 
creation mean that your team spend their time focussing 
on your business.</p>

        <p class="subtext">Ruby on Rails, AngularJS, PostgreSQL, Amazon S3, Heroku
</p>
        <a target="_blank" href="https://slimwiki.com">https://slimwiki.com</a>
      </div>
    </article>
    <article class="work-item">
      <figure>
        <div class="work-showcase">
          <img alt="Greatly" data-at2x="/statics/images/greatly_2x-c6efb296.jpg" src="/statics/images/greatly-cce0c551.jpg" />
        </div>
      </figure>
      <div class="work-item--info">
        <h2>Greatly</h2>
        <p class="tagline">Curated Marketplaces</p>
        <p>A Marketplace curated just for you. Beautiful things hand-picked by Tastemakers, made by Makers.</p>

        <p class="subtext">Ruby on Rails, PostgreSQL, Amazon S3, Heroku
</p>
        <a target="_blank" href="http://great.ly">http://great.ly</a>
      </div>
    </article>
    <article class="work-item">
      <figure>
        <div class="work-showcase">
          <img alt="500 Startups" data-at2x="/statics/images/dashboard_2x-80be746b.jpg" src="/statics/images/dashboard-9f0ded84.jpg" />
        </div>
      </figure>
      <div class="work-item--info">
        <h2>500 Startups</h2>
        <p class="tagline">Dashboard Community</p>
        <p>Join your community of fellow startups and mentors, and 
have the knowledge of those who have been there before right 
at your fingertips. Get the tools and answers you need to 
grow your company.</p>

        <p class="subtext">Ruby on Rails, Amazon RDS, Amazon S3, EngineYard
</p>
        <a target="_blank" href="https://dashboard.io">https://dashboard.io</a>
      </div>
    </article>
    <article class="work-item">
      <figure>
        <div class="work-showcase">
          <img alt="Ship.io" data-at2x="/statics/images/shipio_2x-bb854b54.jpg" src="/statics/images/shipio-96c63877.jpg" />
        </div>
      </figure>
      <div class="work-item--info">
        <h2>Ship.io</h2>
        <p class="tagline">Automated Mobile Builds</p>
        <p>Purpose-built to support and streamline mobile development workflows. 
Use it to automate your build-test-deploy cycles, and ship quality 
Apps faster.</p>

        <p class="subtext">Ruby on Rails, PostgreSQL, Amazon S3
</p>
        <a target="_blank" href="https://ship.io">https://ship.io</a>
      </div>
    </article>
    <article class="work-item">
      <figure>
        <div class="work-showcase">
          <img alt="UpMySport" data-at2x="/statics/images/upmysport_2x-341ad98a.jpg" src="/statics/images/upmysport-3dca4c3c.jpg" />
        </div>
      </figure>
      <div class="work-item--info">
        <h2>UpMySport</h2>
        <p class="tagline">Find your instructor</p>
        <p>Reach your potential with hand-picked instructors and search 100s 
of activities with top instructors.</p>

        <p class="subtext">Ruby on Rails, Redis, PostgreSQL, Amazon S3
</p>
        <a target="_blank" href="https://www.upmysport.com">https://www.upmysport.com</a>
      </div>
    </article>
    <article class="work-item">
      <figure>
        <div class="work-showcase">
          <img alt="OurAddress" data-at2x="/statics/images/ouraddress_2x-c50ca752.jpg" src="/statics/images/ouraddress-763e36fa.jpg" />
        </div>
      </figure>
      <div class="work-item--info">
        <h2>OurAddress</h2>
        <p class="tagline">Connect. Share. Discuss.</p>
        <p>OurAddress enables residents &amp; managers of shared properties
such as condos and office buildings to create community websites
for their property and stay informed and in-touch —
anytime, anywhere.</p>

        <p class="subtext">Ruby on Rails, PostgreSQL, Amazon S3
</p>
        <a target="_blank" href="https://www.ouraddress.com">https://www.ouraddress.com</a>
      </div>
    </article>
    <article class="work-item">
      <figure>
        <div class="work-showcase">
          <img alt="KidKind" data-at2x="/statics/images/kidkind_2x-503f9a56.jpg" src="/statics/images/kidkind-683e4410.jpg" />
        </div>
      </figure>
      <div class="work-item--info">
        <h2>KidKind</h2>
        <p class="tagline">Find kid friendly places</p>
        <p>KidKind allows parents to discover great places to take their kids
with reviews and ratings written by other parents.</p>

        <p class="subtext">iOS, Ruby on Rails, PostgreSQL
</p>
        <a target="_blank" href="#"></a>
      </div>
    </article>
</section>




    <section class="talk">
      <div class="container">
        <h2>Want to talk? Advice is always free!</h2>
        <a class="button button-m-default" href="/contact">Get in touch</a>
      </div>
    </section>

  <section class="connect">
    <ul>
      <li class="connect--subscription-form">
        <h2><label for="mce-EMAIL">Subscribe to our newsletter</label></h2>

        <!-- Begin MailChimp Signup Form -->
        <form action="//oozou.us2.list-manage.com/subscribe/post?u=2d9367408e0f70bb0fef9928b&amp;id=280d8b6877" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;"><input type="text" name="b_2d9367408e0f70bb0fef9928b_280d8b6877" tabindex="-1" value=""></div>
          <input type="email" class="input-m-white-transparent required email" value="" name="EMAIL" id="mce-EMAIL" placeholder="Email Address">
          <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="button button-m-default">Sign Up</button>
        </form>
        <!--End mc_embed_signup-->

      </li>
    </ul>
  </section>
