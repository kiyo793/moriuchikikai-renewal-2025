<?php
/*
Template Name: お問い合わせ
*/
?>

<?php get_header(); ?>

    <div class="p-pageHead">
      <div class="p-pageHead__bg">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/content/contact/page-header-contact.webp"
          alt="company-head"
          width="2880"
          height="2672" />
      </div>

      <div class="p-pageHead__inner">
        <div class="p-pageHead__body" data-animation="fade-in">
          <h2 class="p-pageHead__en">CONTACT</h2>
          <div class="p-pageHead__ja">お問い合わせ</div>
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

    <section class="p-contact" data-animation="fade-in">
      <div class="p-contact__inner l-inner--sm">
        <div class="p-contact__lead">
          <p>森内機械製作所へのお問い合わせは、以下のフォームまたは<wbr>お電話にて承っております。</p>
          <p>製品のご相談、ご依頼、採用に関するご質問など、お気軽にご連絡ください。</p>
        </div>

        <div class="p-contact__telBox">
          <p class="p-contact__telLead">お電話でのお問い合わせ</p>
          <p class="p-contact__telNum">
            <a href="tel:0726533109"> 072-653-3109 </a>
          </p>
          <p class="p-contact__telTime">受付時間：平日8時〜17時</p>
        </div>

        <div class="p-contact__head">
          <h2>お問い合わせフォーム</h2>
        </div>

        <form class="p-contact__form" id="contactForm" action="" method="post">
          <div class="p-contact__formItem">
            <label class="p-contact__label" for="company">貴社名</label>
            <input
              type="text"
              id="company"
              name="company"
              class="p-contact__input"
              placeholder="○○株式会社"
              autocomplete="organization" />
          </div>

          <div class="p-contact__formItem is-required">
            <label class="p-contact__label" for="your-name">
              お名前<span class="p-contact__required">必須</span>
            </label>
            <input
              type="text"
              id="your-name"
              name="your-name"
              class="p-contact__input"
              placeholder="田中 太郎"
              autocomplete="name"
              required />
          </div>

          <div class="p-contact__formItem is-required">
            <label class="p-contact__label" for="your-kana">
              ふりがな<span class="p-contact__required">必須</span>
            </label>
            <input
              type="text"
              id="your-kana"
              name="your-kana"
              class="p-contact__input"
              placeholder="たなか　たろう"
              inputmode="kana"
              required />
          </div>

          <div class="p-contact__formItem">
            <label class="p-contact__label" for="address">ご住所</label>
            <input
              type="text"
              id="address"
              name="address"
              class="p-contact__input"
              placeholder="○○県○○市○○町1-1-1"
              autocomplete="street-address" />
          </div>

          <div class="p-contact__formItem is-required">
            <label class="p-contact__label" for="your-email">
              メールアドレス<span class="p-contact__required">必須</span>
            </label>
            <input
              type="email"
              id="your-email"
              name="your-email"
              class="p-contact__input"
              placeholder="sample@example.com"
              autocomplete="email"
              required />
          </div>

          <div class="p-contact__formItem is-required">
            <label class="p-contact__label" for="tel">
              電話番号 <span class="p-contact__required">必須</span>
            </label>
            <input
              type="tel"
              id="tel"
              name="tel"
              class="p-contact__input"
              placeholder="000-0000-0000"
              autocomplete="tel"
              pattern="[\d\-+\s]{8,}"
              title="半角数字とハイフンで入力してください（例: 000-0000-0000）"
              required />
          </div>

          <div class="p-contact__formItem">
            <label class="p-contact__label" for="fax">FAX番号</label>
            <input
              type="tel"
              id="fax"
              name="fax"
              class="p-contact__input"
              placeholder="000-0000-0000"
              inputmode="tel" />
          </div>

          <div class="p-contact__formItem is-required">
            <label class="p-contact__label" for="message">
              お問い合わせ内容<span class="p-contact__required">必須</span>
            </label>
            <textarea
              id="message"
              name="message"
              class="p-contact__textarea"
              placeholder="お問い合わせの内容をご記入ください。"
              rows="6"
              required></textarea>
          </div>

          <div class="p-contact__policy">
            <label class="p-contact__label" for="message">
              プライバシーポリシー<span class="p-contact__required">必須</span>
            </label>
            <div class="p-contact__policyBox" tabindex="-1">
              <div class="p-contact__policyWrap">
                <p class="p-contact__policyText">
                  株式会社森内機械製作所（以下、「当社」という。）は、本ウェブサイト上で提供するサービスにおける、ユーザーの個人情報について以下のとおりプライバシーポリシー（以下、「本ポリシー」という。）を定めます。<br />
                  本ポリシーは、当社がどのような個人情報を取得し、どのように利用・共有するか、ユーザーがどのようにご自身の個人情報を管理できるかをご説明するものとなります。
                </p>
                <p class="p-contact__policyText">
                  ■個人情報<br />
                  当社の定める個人情報とは、個人情報保護法にいう生存する個人に関する情報であって、当該情報に含まれる氏名、生年月日、住所、電話番号、メールアドレス及びその他の記述等により特定の個人を識別することが出来るものを言います。又、他の情報と容易に照合することが出来、それにより特定の個人を識別することが出来るものを含みます。
                </p>
                <p class="p-contact__policyText">
                  ■法令・規範の遵守<br />
                  当社は、本ポリシーの運用に当たり個人情報保護法に関する法令及びその他の規範を遵守いたします。
                </p>
                <p class="p-contact__policyText">
                  ■個人情報の収集<br />
                  当社は、適正かつ公正な手段によって、個人情報を収集いたします。お問い合わせフォームの送信時には、氏名・電話番号・メールアドレスを取得させていただきます。
                </p>
                <div class="p-contact__policyText">
                  <p>
                    ■個人情報の利用目的<br />
                    当社は、個人情報を以下に定める利用目的の達成に必要な範囲内で使用いたします。
                    下記以外の目的で個人情報を利用する場合は、あらかじめお客様の同意を得た上で行います。
                  </p>
                  <ul class="p-contact__policyList">
                    <li>お問い合わせに対する回答及び資料送付</li>
                    <li>ご依頼内容に対する回答及び適切な対応</li>
                    <li>商品・サービスに関する情報提供</li>
                    <li>求人時の連絡、情報のご提供および採用選考等</li>
                  </ul>
                </div>
                <div class="p-contact__policyText">
                  <p>
                    個人情報の第三者提供<br />
                    当社は、法令に定める場合を除き個人情報を事前に本人の同意を得ることなく第三者に提供いたしません。ただし下記の場合には、お客様の事前の同意なく当社はお客様の個人情報を開示できるものとします。
                  </p>
                  <ul class="p-contact__policyList">
                    <li>
                      警察や裁判所、その他の政府機関から召喚状、令状、命令等によって要求された場合
                    </li>
                    <li>
                      人の生命、身体または財産の保護のために必要がある場合であって、お客様の同意を得ることが困難である場合
                    </li>
                  </ul>
                </div>
                <p class="p-contact__policyText">
                  ■個人情報の開示・訂正・利用停止・消去<br />
                  当社は、本人が自己の個人情報について開示・訂正・利用停止・消去等を求める権利を有していることを確認し、これらの請求がある場合には、異議なく速やかに対応いたします。
                </p>
                <p class="p-contact__policyText">
                  ■継続的改善<br />
                  当社では、個人情報保護管理者を選任し、個人情報の適正な管理を実施いたします。又、日常業務における個人情報の適正な取り扱いを周知徹底させ実施・維持し、継続的に改善いたします。
                </p>
                <p class="p-contact__policyText">
                  ■リンク先<br />
                  本ウェブサイト上のリンク先での個人情報の利用については、当社のプライバシーの考え方ではなく、リンク先サイト自身のプライバシーの考え方に従って行われます。
                </p>
                <p class="p-contact__policyText">
                  ■Cookieについて<br />
                  Cookieとは、ウェブサーバーからウェブブラウザに送信されるデータのことです。ウェブサーバーがCookieを参照することでユーザーのパソコンを識別でき、効率的に本ウェブサイトを利用することができます。本ウェブサイトがCookieとして送るファイルは、個人を特定するような情報は含んでおりません。お使いのウェブブラウザの設定により、Cookieを無効にすることも可能です。
                </p>
                <p class="p-contact__policyText">
                  ■アクセス解析ツールについて<br />
                  本ウェブサイトでは、Googleによるアクセス解析ツール（Googleアナリティクス）を使用しています。これはデータの収集のためにCookieを使用しています。データは匿名で収集されており、個人を特定するものではありません。
                </p>
                <p class="p-contact__policyText">
                  ■免責事項<br />
                  本ウェブサイトに掲載されている情報の正確性には万全を期していますが、利用者が本ウェブサイトの情報を用いて行う一切の行為に関して、一切の責任を負わないものとします。当社は、ユーザーが本ウェブサイトを利用したことにより生じたユーザーの損害及びユーザーが第三者に与えた損害に関して、一切の責任を負わないものとします。
                </p>
                <p class="p-contact__policyText">
                  ■著作権・肖像権<br />
                  本ウェブサイト内の文章や画像、すべてのコンテンツは著作権・肖像権等により保護されています。また無断での使用や転用は禁止されています。
                </p>
                <p class="p-contact__policyText">
                  ■プライバシーポリシーの変更<br />
                  本ポリシーの内容は、法令その他本ポリシーに別段の定めのある事項を除いて、ユーザーに通知することなく、変更することができるものとします。当社が別途定める場合を除いて、変更後のプライバシーポリシーは、本ウェブサイトに掲載したときから効力を生じるものとします。
                </p>
                <p class="p-contact__policyText">
                  ■お問い合わせ<br />
                  当社のポリシープライバシーに関するお問い合わせは下記までお願いいたします。<br />
                  株式会社森内機械製作所<br />
                  TEL：072-653-3109
                </p>
              </div>
            </div>
            <div class="p-contact__formItem is-required">
              <label class="p-contact__checkboxLabel" for="privacy-consent">
                <input
                  type="checkbox"
                  id="privacy-consent"
                  name="privacy-consent"
                  class="p-contact__checkbox"
                  required />
                <span class="p-contact__checkboxText">プライバシーポリシーに同意する</span>
              </label>
            </div>
          </div>

          <div class="p-contact__formItem p-contact__submit">
            <button type="submit" id="submitBtn" class="c-button c-button--contact" disabled>
              送信する
            </button>
          </div>
        </form>
      </div>
    </section>

<?php get_footer(); ?>