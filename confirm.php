<!-- ==============================
  confirm
============================== -->

<!-- == header ==================== -->
<?php include_once('parts/header.php'); ?>


<div id="confirm">

  <div id="section-form" class="section-form section-form--confirm">
    <div class="pageTitle">
      <div class="headingWrap">
        <h2 class="headingNormal">送信内容のご確認</h2>
        <p class="text">ご入力内容にお間違いがないかご確認ください。</p>
      </div>
    </div>
    <div class="container--m">
      <!-- formWrap -->
      <div class="formWrap">
        <form class="itemWrap" action="/thanks.php" method="POST">
          <!-- myname -->
          <div class="item item--myname item--normal">
            <label class="item__label" for="InputName">お名前</label>
            <p class="item__confirm"><?php echo $_POST['myname'] ?></p>
          </div>
          <!-- tel -->
          <div class="item item--tel item--normal">
            <label class="item__label" for="Inputphone">電話番号</label>
            <p class="item__confirm"><?php echo $_POST['tel'] ?></p>
          </div>
          <!-- email -->
          <div class="item item--email item--normal">
            <label class="item__label" for="InputEmail">メールアドレス</label>
            <p class="item__confirm"><?php echo $_POST['email'] ?></p>
          </div>
          <!-- reserve01 -->
          <div class="item item--reserve item--normal">
            <label class="item__label" for="InputReserve01">予約日時（第一希望）</label>
            <div class="addIcon">
              <p class="item__confirm"><?php echo $_POST['reserve01'] ?></p>
            </div>
          </div>
          <!-- reserve02 -->
          <div class="item item--reserve item--normal">
            <label class="item__label" for="InputReserve02">予約日時（第二希望）</label>
            <div class="addIcon">
              <p class="item__confirm"><?php echo $_POST['reserve02'] ?></p>
            </div>
          </div>
          <!-- reason -->
          <div class="item item--reason">
            <label class="item__label">ご希望理由を教えてください</label>
            <div class="addIcon">
              <p class="item__confirm"><?php echo $_POST['reason'] ?></p>
            </div>
          </div>
          <!-- terms -->
          <div class="item item--terms">
            <div class="terms__inner">
              <input class="item__input item__input--checkbox" type="checkbox" id="InputTerms" required>
              <label class="item__label" for="InputTerms">
                <a class="link" href="policy.php" target="_blank">プライバシーポリシー</a>を確認し、同意しました。
              </label>
            </div>
          </div>
          <!-- btn -->
          <div class="item item--btn item--btnGroup">
            <button type="button" class="btn btn--reverse" onclick="history.back()"><span class="btn__text">修正する</span></button>
            <button type="submit" class="btn"><span class="btn__text">送信する</span></button>
          </div>
          <!-- hidden values -->
          <input type="hidden" name="myname" value="<?php echo $_POST['myname']; ?>">
          <input type="hidden" name="tel" value="<?php echo $_POST['tel']; ?>">
          <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
          <input type="hidden" name="reserve01" value="<?php echo $_POST['reserve01']; ?>">
          <input type="hidden" name="reserve02" value="<?php echo $_POST['reserve02']; ?>">
          <input type="hidden" name="reason" value="<?php echo $_POST['reason']; ?>">
        </form>
      </div>
    </div>
  </div>

</div>


<!-- == footer ==================== -->
<?php include_once('parts/footer.php'); ?>
