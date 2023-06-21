//ステップ2
$("#next_btn").on("click",function(){
    $("#form").css({transform: "translate(-100vw, 0)"});
    $("#li_2").removeClass('active');
    $("#li_3").addClass('active');
  });

  $("#back_btn").on("click",function(){
      $("#form").css({transform: "translate(0, 0)"});
      $("#li_2").removeClass('active');
      $("#li_1").addClass('active');
  });

//ステップ3
  $("#back_btn2").on("click",function(){
      $("#form").css({transform: "translate(-100vw, 0)"});
      $("#li_3").removeClass('active');
      $("#li_2").addClass('active');
  });
  $("input[type='radio']").on("click",function(){
      $("#form").css({transform: "translate(-300vw, 0)"});
      $("#li_3").removeClass('active');
      $("#li_4").addClass('active');
  });

// チェックボックスの状態が変わったら（クリックされたら）
$("input[type='checkbox']").on('change', function () {
    // チェックされているチェックボックスの数
    if ($(".jobtype:checked").length > 0) {
    // ボタン有効化
    $("#next_btn").prop("disabled", false);
    } else {
    // ボタン無効化
    $("#next_btn").prop("disabled", true);
    }
});
