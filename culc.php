<!DOCTYPE html>
<html lang ja>
  <head>
    <meta charaset="utf-8">
    <title>計算</title>
  </head>
  <body>
    <form method="POST" action="culc2.php">
    <p>記入日：<input type="date" name="date" id="date"></p>
    <p>氏名：<input type="text" name="name" id="name"></p>
    <p>住所：<input type="text" name="address" id="address"></p>
    <h2>所得</h2>
      <p>給与<input type="number" name="salary">円
        <select required>
          <option value="" name="income1" hidden>選択肢</option>
          <option value="$data1" name="income1">195万円以下</option>
          <option value="$data2" name="income1">195万円超-330万円以下</option>
          <option value="$data3" name="income1">330万円超-695万円以下</option>
          <option value="$data4" name="income1">695万円超-900万円以下</option>
          <option value="$data5" name="income1">900万円超-1,800万円以下</option>
          <option value="$data6" name="income1">1,800万円超-4,000万円以下</option>
          <option value="$data7" name="income1">4,000万円超</option>
        </select>
      </p>
      <h3>雑所得</h3>
      <p>公的年金等
        <label><input type="radio" class="pension">なし</label>
        <label><input type="radio" class="pension">あり</label>
        <label><input type="number" name="pension1"></label>円
      </p>
      <p>その他
        <label><input type="radio">なし</label>
        <label><input type="radio">あり</label>
        <label><input type="number" name="other"></label>円
      </p>
      <p>雑所得合計 円</p>
      <p>配当
        <label><input type="radio">なし</label>
        <label><input type="radio">あり</label>
        <label><input type="number" name="dividend"></label>円
      </p>
      <p>一時所得
        <label><input type="radio">なし</label>
        <label><input type="radio">あり</label>
        <label><input type="number" name="temp"></label>円
      </p>
      <p>所得合計 円</p>
    <h2>控除等金額</h2>
      <p>保険料控除
        <label><input type="radio">なし</label>
        <label><input type="radio">あり</label>
        <label><input type="number" name="insurance"></label>円
      </p>
      <p>配偶者控除
        <label><input type="radio">なし</label>
        <label><input type="radio">あり</label>
        <label><input type="number" name="spouse"></label>円
      </p>
      <p>扶養控除
        <label><input type="radio">なし</label>
        <label><input type="radio">あり</label>
        <kabel><input type="number" name="support">円</label>円
      </p>
      <p>基礎控除
        <label><input type="radio">なし</label>
        <label><input type="radio">あり</label>
        <label><input type="number" name="basic">円</label>
      </p>
      <p>雑損控除
        <label><input type="radio" >なし</label>
        <label><input type="radio" >あり</label>
        <label><input type="number" name="misce">円</label>
      </p>
      <p>医療費控除
        <label><input type="radio">なし</label>
        <label><input type="radio">あり</label>
        <label><input type="number" name="medic">円</label>
      </p>
      <p>控除合計 円</p>
  <input type="submit" value="計算" />
  </form>
  </body>
</html>

  