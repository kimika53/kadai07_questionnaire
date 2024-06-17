<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .q1{
      padding: 8px 0px;
      margin: 4px 0;
    }
    .occasion{
      padding: 8px 0px;
      margin: 4px 0;
    }
    select {
      padding: 2px;
    }
    input.date {
      padding: 2px;
    }
    button {
      padding: 2px 12px;
      margin-top: 12px; 
    }
  </style>
</head>
<body>
  <h1>飲食店利用後のアンケート</h1>
  <p>お客様のご意見をお聞かせいただき、今後のサービス向上に役立てたいと思います。以下の質問にお答えください。</p>
  <form action="write.php" method="post">
      <div class="q1">1. ご利用いただいた日付: 
        <input type="date"  class="date" name="date"/>
      </div>
      <div class="occasion">
        <label>2. ご来店の目的:         
        <select name="occasion">
          <option value="empty">--選択してください。--</option>
          <option value="ランチ">ランチ</option>
          <option value="ディナー">ディナー</option>
          <option value="特別なイベント">特別なイベント</option>
          <option value="その他">その他</option>
        </select>
        </label>
      </div>
      <div>
          <p>3. スタッフの対応について</p>
          <label><input type="radio" name="staffScore" value="満足">満足</label>
          <label><input type="radio" name="staffScore" value="普通">普通</label>
          <label><input type="radio" name="staffScore" value="不満">不満</label>
      </div>
      <div>
          <p>4. 料理の質について</p>
          <label><input type="radio" name="foodScore" value="満足">満足</label>
          <label><input type="radio" name="foodScore" value="普通">普通</label>
          <label><input type="radio" name="foodScore" value="不満">不満</label>
      </div>
      <div>
          <p>5. 店内の雰囲気や清潔さについて</p>
          <label><input type="radio" name="storeScore" value="満足">満足</label>
          <label><input type="radio" name="storeScore" value="普通">普通</label>
          <label><input type="radio" name="storeScore" value="不満">不満</label>
      </div>
      <div>
        <p>6. その他、ご意見やご提案があればお聞かせください。</p>
        <textarea name="suggestion" cols="40" rows="6"></textarea>
      </div>
      <button type="submit" value="送信">送信</button>
    </form>
</body>
</html>