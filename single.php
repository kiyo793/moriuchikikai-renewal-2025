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
          <p class="p-pageHead__en">NEWS</p>
          <p class="p-pageHead__ja">お知らせ</p>
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

    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <section class="p-singleNews" data-animation="fade-in">
      <div class="p-singleNews__inner l-inner--sm">
        <div class="p-singleNews__head">
          <time class="p-singleNews__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d') ?></time>
          <h1 class="p-singleNews__title">
            <?php the_title(); ?>
          </h1>
        </div>

        <article class="p-singleNews__body">
          <?php the_content(); ?>
        </article>

        <!-- ページネーション -->
        <?php
          $prev_post = get_previous_post(false);
          $next_post = get_next_post(false);
        ?>
        <nav
          class="p-singleNews__postnav"
          aria-label="記事の前後ナビゲーション">
          <ul class="c-postnav">

            <?php if($next_post): ?>
            <li class="c-postnav__icon">
              <a
                class="c-postnav__pagerBtn c-postnav__pagerBtn--next"
                href="<?php echo get_permalink($next_post); ?>"
                aria-label="次のページ">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="8"
                  height="14"
                  viewBox="0 0 8 14"
                  fill="none">
                  <path
                    d="M6.46369 0.982533L0.781626 6.81153C0.681829 6.91391 0.625977 7.05123 0.625977 7.1942C0.625977 7.33718 0.681829 7.4745 0.781626 7.57688L6.46369 13.4081C6.51018 13.4558 6.56576 13.4938 6.62715 13.5197C6.68855 13.5456 6.75451 13.5589 6.82115 13.5589C6.88779 13.5589 6.95375 13.5456 7.01514 13.5197C7.07654 13.4938 7.13212 13.4558 7.17861 13.4081C7.27425 13.3102 7.3278 13.1787 7.3278 13.0418C7.3278 12.905 7.27425 12.7735 7.17861 12.6756L1.83536 7.1942L7.17861 1.7139C7.27393 1.61604 7.32727 1.48483 7.32727 1.34822C7.32727 1.2116 7.27393 1.08039 7.17861 0.982533C7.13212 0.934787 7.07654 0.896839 7.01514 0.870927C6.95375 0.845015 6.88779 0.831665 6.82115 0.831665C6.75451 0.831665 6.68855 0.845015 6.62715 0.870927C6.56576 0.896839 6.51018 0.934787 6.46369 0.982533Z"
                    fill="white" />
                </svg>
              </a>
            </li>
            <?php endif; ?>

            <li class="c-postnav__icon c-postnav__icon--center">
              <a
                href="<?php home_url(); ?>/news"
                class="c-button c-button--white c-button--postnav"
                aria-current="page">一覧に戻る</a>
            </li>

            <?php if($prev_post): ?>
            <li class="c-postnav__icon">
              <a
                class="c-postnav__pagerBtn c-postnav__pagerBtn--prev"
                href="<?php echo get_permalink($prev_post); ?>"
                aria-label="前のページ">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="8"
                  height="14"
                  viewBox="0 0 8 14"
                  fill="none">
                  <path
                    d="M1.49041 0.982533L7.17248 6.81153C7.27227 6.91391 7.32812 7.05123 7.32812 7.1942C7.32812 7.33718 7.27227 7.4745 7.17248 7.57688L1.49041 13.4081C1.44393 13.4558 1.38834 13.4938 1.32695 13.5197C1.26556 13.5456 1.19959 13.5589 1.13295 13.5589C1.06632 13.5589 1.00035 13.5456 0.938958 13.5197C0.877563 13.4938 0.821983 13.4558 0.775496 13.4081C0.679848 13.3102 0.6263 13.1787 0.6263 13.0418C0.6263 12.905 0.679848 12.7735 0.775496 12.6756L6.11874 7.1942L0.775496 1.7139C0.680176 1.61604 0.626835 1.48483 0.626835 1.34822C0.626835 1.2116 0.680176 1.08039 0.775496 0.982533C0.821983 0.934787 0.877563 0.896839 0.938958 0.870927C1.00035 0.845015 1.06632 0.831665 1.13295 0.831665C1.19959 0.831665 1.26556 0.845015 1.32695 0.870927C1.38834 0.896839 1.44393 0.934787 1.49041 0.982533Z"
                    fill="white" />
                </svg>
              </a>
            </li>
            <?php endif; ?>



          </ul>
        </nav>
      </div>
    </section>
    <?php endwhile; endif;?>

<?php get_footer(); ?>