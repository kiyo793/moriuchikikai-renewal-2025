<?php
/*
Template Name: 採用情報
*/
?>

<?php get_header(); ?>

    <div class="p-pageHead">
      <div class="p-pageHead__bg">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/content/company/page-header-company.webp"
          alt="company-head"
          width="2880"
          height="2672" />
      </div>

      <div class="p-pageHead__inner">
        <div class="p-pageHead__body" data-animation="fade-in">
          <p class="p-pageHead__en">RECRUIT</p>
          <h1 class="p-pageHead__ja">採用情報</h1>
        </div>
      </div>
    </div>

    <?php if ( function_exists( 'bcn_display' ) ) : ?>
      <nav class="c-breadcrumb" aria-label="パンくずリスト">
        <ol class="c-breadcrumb__list">
          <?php bcn_display(); ?>
        </ol>
      </nav>
    <?php endif; ?>

    <section class="p-message">
      <div class="p-message__inner l-inner">
        <div class="p-message__heading">
          <div class="c-sectionTitle" data-animation="fade-in">
            <p class="c-sectionTitle__en">MESSAGE</p>
            <h2 class="c-sectionTitle__ja c-sectionTitle__ja--small">
              この工場で学べば、<wbr />一生ものの技術が手に入る。
            </h2>
          </div>
        </div>

        <div class="p-message__body">
          <div class="p-message__image" data-animation="fade-in">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/content/recruit/img_1.webp"
              alt="工場で働く2人の若手作業員"
              width="2160"
              height="1000" />
          </div>

          <div class="p-message__text" data-animation="fade-in">
            <p>
              森内機械製作所は、鉄やステンレスを用いたコンベア・ホッパーなどの設備製作を行う、小さな町工場です。<br />
              長年積み重ねてきた確かな技術は、どこへ行っても通用する本物の力として、多くの現場で評価されてきました。
            </p>
            <p>
              経験は問いません。大切なのは、「やってみたい」「技術を身につけたい」という気持ち。<br />
              高い技術力に、最初は「難しそう」と感じるかもしれません。でも、誰もが最初は未経験。やる気とものづくりが好きな気持ちがあれば大丈夫です。ここで本気で学べば、一生食べていける技術が手に入ります。
            </p>
            <p>
              実際に、未経験からスタートし、未経験からスタートして長く働き続けている社員が多く、離職率の低さも自慢のひとつです。<br />
              必要なのは、やる気と、ものづくりを楽しむ気持ちだけ。
            </p>
            <p>
              若くて元気な方、技術を身につけたい方、コツコツと成長したい方――<br />
              私たちと一緒に、ものづくりの世界へ飛び込んでみませんか？
            </p>
          </div>
        </div>
      </div>
    </section>

    <div class="p-recruit">
      <div class="p-recruit__inner l-inner">
        <div class="p-recruit__heading">
          <div class="c-sectionTitle" data-animation="fade-in">
            <p class="c-sectionTitle__en c-sectionTitle__en--small">
              JOB <br class="u-hidden-pc" />DESCRIPTION
            </p>
            <h2 class="c-sectionTitle__ja">募集要項</h2>
          </div>
        </div>

        <div class="p-recruit__body" data-animation="fade-in">
          <dl class="c-definitionList">
            <div class="c-definitionList__row">
              <dt class="c-definitionList__term">募集要項</dt>
              <dd class="c-definitionList__desc">
                CADオペレーター、製造スタッフ、旋盤工・フライス工
              </dd>
            </div>

            <div class="c-definitionList__row">
              <dt class="c-definitionList__term">雇用形態</dt>
              <dd class="c-definitionList__desc" itemprop="founder">
                正社員
              </dd>
            </div>

            <div class="c-definitionList__row">
              <dt class="c-definitionList__term">就業場所</dt>
              <dd class="c-definitionList__desc" itemprop="address">
                〒566-0052　大阪府摂津市鳥飼本町5-9-3<br />
                【最寄り駅】<br />
                大阪モノレール南摂津駅から徒歩20分<br />
                阪急バス西鳥飼バス停から徒歩８分
              </dd>
            </div>

            <div class="c-definitionList__row">
              <dt class="c-definitionList__term">休日休暇</dt>
              <dd class="c-definitionList__desc">
                夏季休暇、年末年始休暇、GW休暇、有給休暇、慶弔休暇
              </dd>
            </div>

            <div class="c-definitionList__row">
              <dt class="c-definitionList__term">福利厚生</dt>
              <dd class="c-definitionList__desc">
                社会保険完備、マイカー通勤可（駐車スペースあり）
              </dd>
            </div>

            <div class="c-definitionList__row">
              <dt class="c-definitionList__term">応募条件</dt>
              <dd class="c-definitionList__desc">未経験OK、経験者優遇</dd>
            </div>

            <div class="c-definitionList__row">
              <dt class="c-definitionList__term">応募方法</dt>
              <dd class="c-definitionList__desc">
                お問い合わせフォーム、電話
              </dd>
            </div>
          </dl>
        </div>
      </div>
    </div>

<?php get_footer(); ?>