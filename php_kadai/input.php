<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>課題テンプレート</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <img src="img/FV_banner.png" alt="FV画像">
    <div class="each-form  step1">
        <div class="fukidashi_text">
        <p style="margin-bottom: 0px;">名前とふりがなを記入してください。</p>
        </div>
        <div id="form" class="step_flex">
        <form action="write.php" method="post" id="myForm">
                    名前: <input type="text" id="name" name="name">
                    <br>
            <div class="each-form">
                    フリガナ：<input type="text" id="kana" name="kana">
                    </div>
            
                    <div class="pager_wrap" style="margin-top: 100px;">
                        <div class="pager_inner">
                            <button  type="button" id="next_btn1" class="next_step_btn"><span>次へ進む</span></button>
                        </div>
                    </div>
        </div>
         </div>
    </div>


        <div class="each-form step2" style="display:none">
        <div class="fukidashi_text">
        <p style="margin-bottom: 0px;">生年月日とメールアドレスを記入してください。</p>
        </div>
        生年月日: <input type="date" id="birthday" name="birthday" value="1992-09-10">
        <br>
        メールアドレス: <input type="email" id="mail" name="mail">
        <br>
        <div class="pager_wrap" style="margin-top: 100px;">
                        <div class="pager_inner">
                            <button type="button" id="next_btn2" class="next_step_btn"><span>次へ進む（残り2問）</span></button>
                        </div>
                    </div>
                </div>
         </div>


        </div>





        <div class="each-form step3" style="display:none">
        <div class="fukidashi_text">
        <p style="margin-bottom: 0px;">障害種別と手帳の有無、希望する情報を選択してください。</p>
        </div>

        障害種別: 
        <select id="types" name="types">
            <option name="types"> 精神 </option>
            <option name="types"> 身体 </option>
            <option name="types"> 発達 </option>
            <option name="types"> 知的 </option>
        </select>
            <br>
        手帳の有無: 
        <select id="techo" name="techo">
            <option name="techo"> - </option>
            <option name="techo"> 有り </option>
            <option name="techo"> 無し </option>
            <option name="techo"> 申請中 </option>
        </select>
            <br>
         希望する情報: 
        <select id="info" name="info">
            <option name="info"> 全ての情報 </option>
            <option name="info"> 就転職情報のみ </option>
            <option name="info"> 福祉サービス情報のみ </option>
        </select>
            <br>


            <div class="pager_wrap" style="margin-top: 100px;">
                        <div class="pager_inner">
                            <button type="button" id="next_btn3" class="next_step_btn"><span>最後の質問に進む</span></button>
                        </div>
                    </div>
                </div>
         </div>
        </div>

        <div class="step4" style="display:none">
        <div class="fukidashi_text">
        <p style="margin-bottom: 0px;">最後にお住まいの地域を入力してください。※郵便番号を入力すると、自動的に入力されます。</p>
        </div>

        <table>
        <tbody>
            <tr>
                <th>郵便番号</th>
                <td class="zipcode-cell">
                    <input id="zipcode" class="zipcode" type="text" name="zipcode" value="" placeholder="例)8120012">
                    <button id="search" type="button">住所検索</button>
                    <p id="error"></p>
                </td>
            </tr>

            <tr>
                <th>都道府県</th>
                <td><input id="address1" type="text" name="address1" value=""></td>
            </tr>

            <tr>
                <th>市区町村</th>
                <td><input id="address2" type="text" name="address2" value=""></td>
            </tr>

            <tr>
                <th>町域</th>
                <td><input id="address3" type="text" name="address3" value=""></td>
            </tr>
        </tbody>
        </table>

    <div class="submit-button">
    <input type="submit" value="送信">
    </div>
    </div>

    </form>
    <!-- <script src="js/main.js"></script> -->
    <script src="js/index.js"></script>

    <script>
$(document).ready(function() {
    var isStep4 = false;  // 追加：ステップ4に到達したかどうかを保持する変数

    $('#next_btn1').click(function() {
        if($('#name').val() == "" || $('#kana').val() == ""){
            alert('名前とふりがなを記入してください。');
        } else {
            $('.step1').hide();
            $('.step2').show();
        }
    });

    $('#next_btn2').click(function() {
        if($('#birthday').val() == "" || $('#mail').val() == ""){
            alert('生年月日とメールアドレスを記入してください。');
        } else {
            $('.step2').hide();
            $('.step3').show();
        }
    });

    $('#next_btn3').click(function() {
        if($('#types').val() == "" || $('#techo').val() == "" || $('#info').val() == ""){
            alert('障害種別と手帳の有無、希望する情報を選択してください。');
        } else {
            $('.step3').hide();
            $('.step4').show();
            isStep4 = true;  // 追加：ステップ4に到達した
        }
    });

    $('#myForm').submit(function(){
        if(isStep4 && ($('#zipcode').val() == "" || $('#address1').val() == "" || $('#address2').val() == "" || $('#address3').val() == "")){
            alert('お住まいの地域を入力してください。');  // 変更：条件を満たしたときだけアラートを表示
            return false;
        }else{
            alert('登録が完了しました！');  // 変更：条件を満たしたときだけアラートを表示
        }
    });
});
</script>




<script src="https://cdn.jsdelivr.net/npm/fetch-jsonp@1.1.3/build/fetch-jsonp.min.js"></script>
<script>
    let search = document.getElementById('search');
search.addEventListener('click', ()=>{
    
    let api = 'https://zipcloud.ibsnet.co.jp/api/search?zipcode=';
    let error = document.getElementById('error');
    let input = document.getElementById('zipcode');
    let address1 = document.getElementById('address1');
    let address2 = document.getElementById('address2');
    let address3 = document.getElementById('address3');
    let param = input.value.replace("-",""); //入力された郵便番号から「-」を削除
    let url = api + param;
    
    fetchJsonp(url, {
        timeout: 10000, //タイムアウト時間
    })
    .then((response)=>{
        error.textContent = ''; //HTML側のエラーメッセージ初期化
        return response.json();  
    })
    .then((data)=>{
        if(data.status === 400){ //エラー時
            error.textContent = data.message;
        }else if(data.results === null){
            error.textContent = '郵便番号から住所が見つかりませんでした。';
        } else {
            address1.value = data.results[0].address1;
            address2.value = data.results[0].address2;
            address3.value = data.results[0].address3;
        }
    })
    .catch((ex)=>{ //例外処理
        console.log(ex);
    });
}, false);
</script>
<footer>BizDiverse</footer>
</body>

</html>
