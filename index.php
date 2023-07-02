<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS link bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
  <!-- Font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Mulish:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Tahrirchiuz</title>
</head>
<body>
  <?php 
  // $text = null;
  // $result = null;

  if (isset($_POST['bosing'])) {
     $text = $_POST['latin'];
     $result = conText($text);
  } 

  function conText($text) {
    // $krill = [
    //   "а", "б", "в", "г", "д", "ж", "з", "и",
    //   "й", "к", "л", "м", "н", "о", "п", "р", "с", "т",
    //   "у", "ф", "х", "ч", "ш", "ъ", "ь", "щ",
    //   "ғ", "қ", "ў", "ҳ", "я", "э", "ю", "е", "ё", "ц",
    //   "А", "Б", "В", "Г", "Д", "Ж", "З", "И",
    //   "Й", "К", "Л", "М", "Н", "О", "П", "Р", "С", "Т",
    //   "У", "Ф", "Х", "Ч", "Ш", "Ъ", "Ь", "Щ",
    //   "Ғ", "Қ", "Ў", "Ҳ", "Я", "Э", "Ю", "Е", "Ё", "Ц",
    //   "№"
    // ];
    $krill = [
      "№", "Ц", "Ё", "Е", "Ю", "Э", "Я",
      "Ҳ", "Ў", "Қ", "Ғ", "Щ", "Ь", "Ъ", "Ш", "Ч", "Х", "Ф",
      "У", "Т", "С", "Р", "П", "О", "Н", "М", "Л", 
      "К", "Й", "И", "З", "Ж", "Д", "Г", "В", "Б", "А", "ц", 
      "ё", "е", "ю", "э", "я", "ҳ", "ў", "қ", "ғ",
      "щ", "ь", "ъ", "ш", "ч", "х", "ф", "у", "т", "с", "р", 
      "п", "о", "н", "м", "л", "к", "й", "и", "з", 
      "ж", "д", "г", "в", "б", "а"];
    // $lotin = [
    //   "a", "b", "v", "g", "d", "j", "z", "i",
    //   "y", "k", "l", "m", "n", "o", "p", "r", "s", "t",
    //   "u", "f", "x", "ch", "sh", "’", "", "sh",
    //   "g‘", "q", "o‘", "x", "ya", "e", "yu", "ye", "yo", "ts",
    //   "A", "B", "V", "G", "D", "J", "Z", "I",
    //   "Y", "K", "L", "M", "N", "O", "P", "R", "S", "T",
    //   "U", "F", "X", "Ch", "Sh", "’", "", "",
    //   "G‘", "Q", "O‘", "H", "Ya", "E", "Yu", "Ye", "Yo", "Ts",
    //   "#"
    // ];
    $latin = [
      "#", "Ts", "Yo", "Ye", "Yu", "E", "Ya", "H", 
      "O‘", "Q", "G‘", "", "", "’", "Sh", "Ch", "X", "F",
      "U", "T", "S", "R", "P", "O", "N", "M", "L", 
      "K", "Y", "I", "Z", "J", "D", "G", "V", "B", "A", 
      "ts", "yo", "ye", "yu", "e", "ya", "x", "o‘", "q", 
      "g‘", "sh", "", "’", "sh", "ch", "x", "f", "u", "t", 
      "s", "r", "p", "o", "n", "m", "l", "k", "y", "i", 
      "z", "j", "d", "g", "v", "b", "a"
    ];
    $harf1 = mb_substr($text, 0, 1);
    if (in_array($harf1, $krill)) {
        $conText = str_replace($krill, $latin, $text);
    } elseif (in_array($harf1, $latin)) {
        $conText = str_replace($latin, $krill, $text);
    } else {
        $conText = "Krillcha yoki lotin tilida yozing";
    }
    return $conText;
  }
  ?>

  <section class="container">
    <div class="wrapper">
      <header class="header max-w-full py-4 max-w-full py-4 px-4 sticky z-40 top-0">
        <a class="logo" href="/">
          <span>Tahrirchi</span>
        </a>
        <ul class="d-flex gap-4">
          <li>
            <a href="/">
              <span>Tahrir</span>
            </a>
          </li>
          <li>
            <a href="/">
              <span>Word</span>
            </a>
          </li>
          <li>
            <a href="/">
              <span>Narxlar</span>
            </a>
          </li>
          <li>
            <a href="/">
              <span>Biz haqimizda</span>
            </a>
          </li>
        </ul>
        <a href="/">
          <span>Chiqish</span>
        </a>
      </header>
      <div class="pt-5 pb-5 d-flex justify-content-center align-items-center">
        <div class="max-w-md mx-3">
          <div class="d-flex flex-row text-centerw-full justify-content-center align-items-center">
            <h1 class="col-6 mainpage_title">
              Bexato yozishga birinchi qadam!
            </h1>
            <div class="col-6">
              <p class="mainpage_secondary-title">
                Tahrirchi yordamida o‘zbek tilida </br>
                bexato va sifatli matnlar yozing. 
              </p>
              <div class="mainpage_btn">
                <button class="btn btn-gradient">
                  Tahrirga o‘tish
                  <span class="font-light px-4">Bu bepul</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="convertor">
        <div class="convertor-header">
          <div class="d-flex py-3 px-4 justify-content-center">
            <div class="d-flex align-items-center align-self-center justify-content-center">
              <div class="convertor-wrapper rounded-pill align-items-center">
                <form action="" method="post" class="d-flex convertor-form">
                  <label class="col-6 convertor-label left">
                    <input type="radio" name="radio" class="convertor-radios py-3" value="lotincha" checked>Lotincha
                  </label>
                  <label class="col-6 convertor-label right">
                    <input type="radio" name="radio" class="convertor-radios py-3" value="krillcha" checked>Криллча
                  </label>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="convertor-body">
          <div class="convertor-body_wrap">
            <form action="" method="POST" class="row mx-auto">
              <div class="col-6 p-4 pt-5">
                <input type="text" name="latin" class="convertor_input" value="<?php echo $text; ?>" id="" placeholder="Biror nima yozib ko'ring">
              </div>
              <div class="col-6 p-4 pt-5">
                <input type="text" name="krill" class="convertor_input" id="" placeholder=". . ." value="<?php echo $result; ?>">
              </div>
              <div class="col-12 convertor-body_btn row mx-auto">
                <input class="btn" type="submit" name="bosing" value="Yuboring">
              </div>
            </form>
          </div>
        </div>
      </div>
  </section>
</body>
</html>
