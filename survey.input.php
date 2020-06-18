<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問卷調查</title>
    
</head>

<body>
    <form action="survey.creat.php" method="post">
        <div class="survey">
            <h1>福岡旅遊問卷調查</h1>
            <!-- 福岡旅行のアンケート調査 -->
            <div>
                姓名<input type="name" name="name">

                email <input type="email" name="email">
            
            <fieldset>
                <legend><b>Q1</b></legend>
                <p>您的年齡？</p>
                <!-- 年齢教えてください。 -->
                <ul>
                    <li><input type="radio" name="age" value="0">20歲以下</li>
                    <li><input type="radio" name="age" value="1">20~30歲</li>
                    <li><input type="radio" name="age" value="2">30~40歲</li>
                    <li><input type="radio" name="age" value="3">40歲以上</li>
                </ul>
            </fieldset>
            <fieldset>
                <legend><b>Q2</b></legend>
                <p>您有來過福岡嗎？</p>
                <!-- 福岡にきたことがありますか？ -->
                <ul>
                    <li><input type="radio" name="been" value="0">有</li>
                    <!-- はい -->
                    <li><input type="radio" name="been" value="1">沒有</li>
                    <!-- いいえ -->
                </ul>
                <p>若選擇沒有請跳至第五題</p>
                <!-- いいえと選んだら、Q5から答えてください。 -->
            </fieldset>
            <fieldset>
                <legend><b>Q3</b></legend>
                <p>福岡滯留的天數為幾天？</p>
                <!-- 福岡で何泊をしたんですか？ -->
                <ul>
                    <li><input type="radio" name="day" value="0">兩天一夜</li>
                    <!-- 一泊二日 -->
                    <li><input type="radio" name="day" value="1">三天兩夜</li>
                    <!-- 二泊三日 -->
                    <li><input type="radio" name="day" value="2">四天三夜</li>
                    <!-- 三泊四日 -->
                    <li><input type="radio" name="day" value="3">五天以上</li>
                    <!-- 五日以上 -->
                </ul>
            </fieldset>
            <fieldset>
                <legend><b>Q4</b></legend>
                <p>您選擇在福岡旅遊的最主要原因？</p>
                <!-- 旅行先として、福岡を選んだ一番メインの理由は何ですか？ -->
                <ul>
                    <li><input type="radio" name="reason" value="0">當地食物</li>
                    <!-- 食べ物 -->
                    <li><input type="radio" name="reason" value="1">觀光景點</li>
                    <!-- 観光スポット -->
                    <li><input type="radio" name="reason" value="2">風土民情</li>
                    <!-- 人文 -->
                    <li><input type="radio" name="reason" value="3">活動</li>
                    <!-- イベント -->
                    <li><input type="radio" name="reason" value="4">出差</li>
                    <!-- 出張 -->
                    <li><input type="radio" name="reason" value="5">飛機只有停靠福岡</li>
                    <!-- 空港があります。 -->
                    <li><input type="radio" name="reason" value="6">其他</li>
                    <!-- 他の理由 -->
                </ul>
            </fieldset>
            <fieldset>
                <legend><b>Q5</b></legend>
                <p>若要去日本玩，您會選擇福岡嗎？</p>
                <!-- 日本へ旅行に行ったら、福岡を選びますか？ -->
                <ul>
                    <li><input type="radio" name="play" value="0">會</li>
                    <!-- はい -->
                    <li><input type="radio" name="play" value="1">不會</li>
                    <!-- いいえ -->
                    <li><input type="radio" name="play" value="2">不確定</li>
                    <!-- 分からない -->
                </ul>
            </fieldset>
            <fieldset>
                <legend><b>Q6</b></legend>
                <p>您會有不知道福岡哪裡好玩的困擾嗎？</p>
                <!-- 面白いところを知らない悩みがありますか？ -->
                <ul>
                    <li><input type="radio" name="con" value="0">有</li>
                    <!-- はい -->
                    <li><input type="radio" name="con" value="1">沒有</li>
                    <!-- いいえ -->
                </ul>
            </fieldset>
            <fieldset>
                <legend><b>Q7</b></legend>
                <p>若知道福岡哪裡好玩，會增加來福岡的意願嗎？</p>
                <!-- 面白いところが分かったら、福岡に来たくなりますか？ -->
                <ul>
                    <li><input type="radio" name="will" value="0">會</li>
                    <!-- はい -->
                    <li><input type="radio" name="will" value="1">不會</li>
                    <!-- いいえ -->
                    <li><input type="radio" name="will" value="2">不確定</li>
                    <!-- 分からない -->
                </ul>
            </fieldset>
            <div>
                <button>submit</button>
            </div>
            <a href="survey.read.php">結果</a>
    </form>
    </div>
</body>

</html>