// JavaScriptで記述
window.onload = function(){
  // 表にマウスが入ったとき、マウス下の行のCSSを変更
  var trs = document.getElementsByClassName("main__table_tr");
  var trs_cnt = trs.length;
  var trs_ary = [];
  for(i=1; i<=trs_cnt; i++){
    trs_ary.push(trs[i]); 
  };

  trs_ary.forEach(function(trs_ary_val){
    trs_ary_val.onmouseover = function(){
      this.style.backgroundColor = "rgb(255, 192, 203)";
      this.style.fontSize = "18px";
    };
    trs_ary_val.onmouseout = function(){
      this.style.backgroundColor = "rgb(255, 255, 255)";
      this.style.fontSize = "16px";
    };
  });
};

// jQueryで記述
$(document).ready(function(){

  // ボタンに動きを加える
  $(".main__btn_link").mouseenter(function(){
    $(this).stop();
    $(this).animate({width: "300px",},400);
  });
  $(".main__btn_link").mouseout(function(){
    $(this).stop();
    $(this).animate({width: "200px"}, 200);
    $(this).animate({width: "210px"}, 100);
    $(this).animate({width: "200px"}, 100);
  });

  // 動的に追加したボタンに対応
  $(document).on("mouseenter", ".add-dynamically-btn", function(){
    $(this).stop();
    $(this).animate({width: "300px",},400);
  });
  $(document).on("mouseout", ".add-dynamically-btn", function(){
    $(this).stop();
    $(this).animate({width: "200px"}, 200);
    $(this).animate({width: "210px"}, 100);
    $(this).animate({width: "200px"}, 100);
  });

  // 「トップへ」のボタンにアニメーション
  $(document).scroll(function(){
    var bottom_h = $(document).height() - $(window).height();
    if($(this).scrollTop() == 0){
      $(".btn-circle").animate({bottom: "40px"}, 200);
      $(".btn-circle").animate({bottom: "50px"}, 150);
    }else if($(this).scrollTop() == bottom_h){
      $(".btn-circle").animate({bottom: "60px"}, 200);
      $(".btn-circle").animate({bottom: "50px"}, 150);
    };
  });

  $(".btn-circle").mouseover(function(){
    $(this).stop();
    $(".btn-circle").animate({bottom: "60px"}, 200);
    $(".btn-circle").animate({bottom: "50px"}, 150);
  })

  $(".btn-circle").mouseout(function(){
    $(this).stop();
  })

  // フォームのバリデーションを設定
  const pattern_id = /^\d+$/;
  const pattern_name = /^(.+)\s(.+)$/;
  const pattern_tel = /(^(070|080|090)\-\d{4}\-\d{4}$)/;
  const pattern_enter = /(^(19|20)\d{2}\/([1-9]|1[0-2])\/([1-9]|[12][0-9]|3[01])$)/;
  const form_ids = ["form-id", "form-name", "form-tel", "form-enter"];
  const patterns = [pattern_id, pattern_name, pattern_tel, pattern_enter];
  const values = []
  
  $(".form").on("click", function() {
    var form_id = $(this).attr("id");
    var i = form_ids.indexOf(form_id);

    $("#"+form_ids[i]).on('blur',function(){
      var value = $("#"+form_ids[i]).val();
      var error;

      if(value == ""){
        error = true;
      }else if(!value.match(patterns[i])){
        error = true;
      }else{
        $(this).next().remove();
        $(this).css("borderColor", "rgb(85, 85, 85)");
        values.push(1);
      };
      
      if(error){
        $(this).next().remove();
        $(this).css("borderColor", "rgb(241, 63, 121)");
        $(this).after("<p class='main__form-wrapper_label font-error'>入力に誤りがあります</p>");
      };

      if((values).length >= 3 && $(".font-error").length == 0){
        $(".main__btn-msg").remove();
        $(".main__btn-flag").next().remove();
        $(".main__btn-flag").after("<input class='main__btn_link btn-large color-accent add-dynamically-btn' type='submit' value='登録'>");
      }else{
        $(".main__btn-flag").next().remove();
      };
    });
  });
});
