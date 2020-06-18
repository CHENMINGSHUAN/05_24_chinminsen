<!-- <?php



        // $handle = fopen("data/survey.text.csv", "r");
        // flock($handle, LOCK_EX);



        // if ($handle) {
        //     while ($line = fgetcsv($handle)) {

        //     }
        // }

        // flock($handle, LOCK_UN);
        // fclose($handle);


        ?> -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        function getCSV() {
            var req = new XMLHttpRequest(); // HTTPでファイルを読み込むためのXMLHttpRrequestオブジェクトを生成
            req.open("get", "data/survey.text.csv", true); // アクセスするファイルを指定
            req.send(null); // HTTPリクエストの発行
            // レスポンスが返ってきたらconvertCSVtoArray()を呼ぶ	
            req.onload = function() {
                convertCSVtoArray(req.responseText); // 渡されるのは読み込んだCSVデータ
            }
        }

        // 読み込んだCSVデータを二次元配列に変換する関数convertCSVtoArray()の定義
        function convertCSVtoArray(str) { // 読み込んだCSVデータが文字列として渡される
            var result = []; // 最終的な二次元配列を入れるための配列
            var tmp = str.split("\n"); // 改行を区切り文字として行を要素とした配列を生成
            // 各行ごとにカンマで区切った文字列を要素とした二次元配列を生成
            for (var i = 0; i < tmp.length; ++i) {
                result[i] = tmp[i].split(',');
            }


            alert(result)

        }

        getCSV();




        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);
        google.charts.setOnLoadCallback(drawChart2);
        google.charts.setOnLoadCallback(drawChart3);
        google.charts.setOnLoadCallback(drawChart4);
        google.charts.setOnLoadCallback(drawChart5);
        google.charts.setOnLoadCallback(drawChart6);
        google.charts.setOnLoadCallback(drawChart7);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['年齢', '人数'],
                ['20歲以下', 11],
                ['20~30歲', 2],
                ['30~40歲', 2],
                ['40歲以上', 2],
            ]);

            var options = {
                title: '年齢'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

            chart.draw(data, options);
        }


        function drawChart2() {

            var data2 = google.visualization.arrayToDataTable([
                ['来たこと', '人数'],
                ['はい ', 11],
                ['いいえ', 2]
            ]);

            var options2 = {
                title: '福岡にきたことがありますか？'
            };

            var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));

            chart2.draw(data2, options2);
        }


        function drawChart3() {

            var data3 = google.visualization.arrayToDataTable([
                ['何泊', '人数'],
                ['一泊二日', 11],
                ['二泊三日', 2],
                ['三泊四日', 2],
                ['五日以上', 2],
            ]);

            var options3 = {
                title: '福岡で何泊をしたんですか？'
            };

            var chart3 = new google.visualization.PieChart(document.getElementById('piechart3'));

            chart3.draw(data3, options3);
        }

        function drawChart4() {

            var data4 = google.visualization.arrayToDataTable([
                ['理由', '人数'],
                ['食べ物', 11],
                ['観光スポット', 2],
                ['人文', 2],
                ['イベント', 2],
                ['出張', 2],
                ['空港があります', 2],
                ['他の理由', 2]
            ]);

            var options4 = {
                title: '福岡を選んだ理由'
            };

            var chart4 = new google.visualization.PieChart(document.getElementById('piechart4'));

            chart4.draw(data4, options4);
        }
       

        function drawChart5() {

            var data5 = google.visualization.arrayToDataTable([
                ['選び', '人数'],
                ['はい', 11],
                ['いいえ', 2],
                ['分からない', 2]
            ]);

            var options5 = {
                title: '日本へ旅行に行ったら、福岡を選びますか？'
            };

            var chart5 = new google.visualization.PieChart(document.getElementById('piechart5'));

            chart5.draw(data5, options5);
        }
     
        function drawChart6() {

            var data6 = google.visualization.arrayToDataTable([
                ['悩み', '人数'],
                ['はい', 11],
                ['いいえ', 2],
            ]);

            var options6 = {
                title: '面白いところを知らない悩みがありますか？'
            };

            var chart6 = new google.visualization.PieChart(document.getElementById('piechart6'));

            chart6.draw(data6, options6);
        }
     

        function drawChart7() {

            var data7 = google.visualization.arrayToDataTable([
                ['面白いところ', '人数'],
                ['はい', 11],
                ['いいえ', 2],
                ['分からない', 2]
            ]);

            var options7 = {
                title: '面白いところが分かったら、福岡に来たくなりますか？'
            };

            var chart7 = new google.visualization.PieChart(document.getElementById('piechart7'));

            chart7.draw(data7, options7);
        }
    </script>
</head>

<body>
    <fieldset>
        <legend>結果一欄</legend>
        <a href="survey.input.php">回到問卷</a>
        <div id="a"></div>
    </fieldset>
    <div id="piechart1" style="width: 900px; height: 500px;"></div>
    <div id="piechart2" style="width: 900px; height: 500px;"></div>
    <div id="piechart3" style="width: 900px; height: 500px;"></div>
    <div id="piechart4" style="width: 900px; height: 500px;"></div>
    <div id="piechart5" style="width: 900px; height: 500px;"></div>
    <div id="piechart6" style="width: 900px; height: 500px;"></div>
    <div id="piechart7" style="width: 900px; height: 500px;"></div>
    </div>
</body>

</html>