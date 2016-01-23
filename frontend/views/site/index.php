<?php
use yii\helpers\Url;
use yii\bootstrap\BootstrapAsset;
/* @var $this yii\web\View */

$this->registerCssFile("/statics/style/style-894e3466.css", [BootstrapAsset::className()]);
$this->title = '象记首页';
?>
<header class="jumbotron jumbotron-m-index">

  <div class="jumbotron--background">
  </div>

  <div class="jumbotron--content introduction">
    <h1 class="introduction--logo">Oozou</h1>
    <p class="what-we-do">
      We Handcraft
      <span class="what-we-do--emphasis"><strong>Web</strong> &amp; <strong>Mobile</strong></span>
      <span class="what-we-do--emphasis">Applications</span>
    </p>
    <hr>
    <p class="introduction--description">Expert Design &amp; Development</p>
    <a class="introduction--button button button-m-white-transparent js-scrollto" href="#welcome">Find out more</a>
    <div class="introduction--scroll-down">
      <a class='js-scrollto' href="#welcome"><span class="fa fa-angle-double-down"></span><span class="u-sr-only"></span></a>
    </div>
  </div>

</header>

<div class="navbar-container navbar-container-m-sticky js-sticky">
  <nav class="navbar navbar-m-gray">
    <div class="container">
      <div class="navbar--brand">
        <a href="/">象记</a>
      </div>
      <div class="navbar--menu">
        
<ul class="nav-menu">
  <li><a href="<?= Url::to(['site/work']);?>">工作</a></li>
  <li><a href="<?= Url::to(['site/contact']);?>">联系</a></li>
  <li><a href="<?= Url::to(['site/blog']);?>">象记</a></li>
</ul>

      </div>
    </div>
  </nav>
</div>


<section class="proem" id="welcome">
  <div class="container">
    <h2>
      About Us
    </h2>
    <p>
      At Oozou we firmly believe that the best people, tools and processes
      result in the best applications. With years of experience building
      high quality applications for companies large and small, we can provide
      great perspective on how to design and build your application.
    </p>

    <p>
      Our carefully chosen tools and refined processes ensure that your project
      progresses smoothly and launches successfully. Through iterative development,
      continuously tested deployments and a tight customer feedback loop, no time is wasted.
    </p>

    <br><br>
  </div>
</section>


<section class="expertise">
  <div class="container">
    <h2>Expertise</h2>
    <div class="expertise--contents">
        <div class="expertise--item-container">
          <div class="expertise-item expertise-item-m-icon-uxui">
            <h3>UI &amp; UX Design</h3>
            <p>Our designers can perfect the user<br> experience and make it look great.</p>
          </div>
        </div>
        <div class="expertise--item-container">
          <div class="expertise-item expertise-item-m-icon-web">
            <h3>Web</h3>
            <p>Using Ruby on Rails we can build web<br> applications faster than ever.</p>
          </div>
        </div>
        <div class="expertise--item-container">
          <div class="expertise-item expertise-item-m-icon-mobile">
            <h3>Mobile</h3>
            <p>iOS and Android development and<br> integration with back-end APIs.</p>
          </div>
        </div>
        <div class="expertise--item-container">
          <div class="expertise-item expertise-item-m-icon-agile">
            <h3>Agile</h3>
            <p>Small iterations, no confusion, no<br> surprises, clear deliverables.</p>
          </div>
        </div>
        <div class="expertise--item-container">
          <div class="expertise-item expertise-item-m-icon-test">
            <h3>Tested</h3>
            <p>New features should never break old<br> features, testing ensures this.</p>
          </div>
        </div>
        <div class="expertise--item-container">
          <div class="expertise-item expertise-item-m-icon-growth">
            <h3>Growth</h3>
            <p>Advice on how to grow your<br> application and drive engagement.</p>
          </div>
        </div>
    </div>
  </div>
</section>


<section class="how-we-work">
  <div class="container">
    <h2>Let's Get <strong>Started</strong></h2>
    <p class="tagline">What stage are you at?</p>
    <ul>
      <li class="you-have you-have-m-idea">An <strong>idea</strong> that <br><em>needs building</em></li>
      <li class="you-have you-have-m-design">A <strong>design</strong> that <br><em>needs development</em></li>
      <li class="you-have you-have-m-unfinapp">An <strong>unfinished app</strong> that <br><em>needs rescuing</em></li>
      <li class="you-have you-have-m-morefeature">An <strong>existing app</strong> that <br><em>needs features</em></li>
    </ul>
    <div class="how-we-work--lines"></div>
  </div>
</section>

<div class="magic-circle" id="magic-circle">
  <svg width="14" height="14">
    <circle r="6" cx="7" cy="7" stroke="none" fill="#00afe5"></circle>
  </svg>
</div>

<section class="magic">
  <h2>Great, let’s take a look at how we work</h2>
</section>

<section class="process">
  <div class="process--line-begin"></div>
  <div class="container">
    <section class="process-step">
      <h3>Onboarding &amp; Discovery</h3>
      <p class="tagline">Let’s start the conversation</p>
      <p class="process-step--description">
        This part of the process is where we get a clear understanding of what your requirements are and you get an understanding of how we work. This ensures that we can both work together to successfully deliver your application.
        Additionally in this phase we can get the legal mumbo jumbo out of the way and move on to the fun stuff.
      </p>
      <div class="step-figures step-figures-m-double">
        <figure>
          <img data-at2x="images/img-knowyou_2x-dd2a5f85.jpg" src="/statics/images/img-knowyou-a16e1935.jpg" />
          <figcaption>Getting to know you</figcaption>
        </figure>
        <figure>
          <img data-at2x="images/img-knowus_2x-cf66a5c0.jpg" src="/statics/images/img-knowus-e8f6db78.jpg" />
          <figcaption>Getting to know us</figcaption>
        </figure>
      </div>
    </section>
    <section class="process-step">
      <h3>Wireframes &amp; UX Design</h3>
      <p class="tagline">From idea to featureset</p>
      <p class="process-step--description">
        This is where we empty your brain onto paper and produce a click flow. A click flow is a text representation of the journey that a user takes through your application. From the click flow we can produce low fidelity wireframe mockups which give a more visual representation of the user interface. With the wireframe in hand we can begin the story carding process. Each story card is a description of a single interaction or feature within your application.
      </p>
      <div class="step-figures step-figures-m-triple">
        <figure>
          <img data-at2x="images/img-clickflow_2x-9faf915e.jpg" src="/statics/images/img-clickflow-b49d8836.jpg" />
          <figcaption>Click Flow</figcaption>
        </figure>
        <figure>
          <img data-at2x="images/img-wireframing_2x-da013fae.jpg" src="/statics/images/img-wireframing-ea128e87.jpg" />
          <figcaption>Wireframes</figcaption>
        </figure>
        <figure>
          <img data-at2x="images/img-card_2x-335f0b68.jpg" src="/statics/images/img-card-e95cccf0.jpg" />
          <figcaption>Story Cards</figcaption>
        </figure>
      </div>
    </section>
    <section class="process-step">
      <h3>Branding &amp; UI Design</h3>
      <p class="tagline">First lick of paint</p>
      <p class="process-step--description">
        During this phase our designers start to bring your branding and identity to the key pages of your application breathing life into it. These initial designs will set the tone for the rest of the UI design and development process.
      </p>
      <div class="step-figures">
        <figure>
          <img data-at2x="images/img-design_2x-fadc1e54.jpg" src="/statics/images/img-design-aa4bf33d.jpg" />
          <figcaption>Making it Beautiful</figcaption>
        </figure>
      </div>
    </section>
    <section class="process-step">
      <h3>Development</h3>
      <p class="tagline">Where the magic happens</p>
      <p class="process-step--description">
        We begin to code, test and review. Working in 1 or 2 week iterations, our developers can now take the clearly defined features and implement them in the order that makes sense to you. Starting with the core features and then moving on to prioritised features that you want to deliver first to your customers. You will be an integral part of this process every step of the way and will be able to control priorities and sign-off features.
      </p>
      <div class="step-figures">
        <figure>
          <img data-at2x="images/img-develop_2x-47a51eab.jpg" src="/statics/images/img-develop-4a81a663.jpg" />
          <figcaption>Create the Code</figcaption>
        </figure>
      </div>
    </section>
  </div>
  <div class="process--line-end"></div>
</section>

<section class="launch">
  <div class="container">
    <h2>Launch, Measure &amp; Improve</h2>
    <p class="launch--tagline">3…2…1… Liftoff!</p>
    <div class="launch-image">
      <div class="launch-image--circle"></div>
      <div class="launch-image--smoke"></div>
      <div class="launch-image--rocket"></div>
    </div>
    <p class="launch--image">
      <img data-at2x="images/img-rocket_2x-f44011bb.png" src="/statics/images/img-rocket-28f83bb5.png" />
    </p>
    <p class="launch--description">
      Our involvement doesn't have to end here. <br>We can assist you in gathering user feedback, generating and understanding behavioral analytics, optimizing performance and adding new features to continue to build upon your success. <br>We also offer support plans to keep things ticking along smoothly.
    </p>
  </div>
</section>
    <section class="talk talk-m-large">
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
