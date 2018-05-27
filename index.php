<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/css.css">

    <link rel="stylesheet" type="text/css" href="css/style_radio.css"> 

    <link rel="stylesheet" type="text/css" href="css/style_IPnumber.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400'>
    <link rel="stylesheet" href="css/style_select.css">
    <script  src="js/JS_select.js"></script>

  </head>
  <body>
    <video autoplay muted loop id="myVideo">
      <source src="Love-Coding.mp4" type="video/mp4">
    </video>
    
    <form action="result.php" method="post" id="mainform">
      <table border=0px cellspacing=0 style="margin:auto;">
        <tr>
          <td style="padding:0px 10px 0px 0px;">
            <abbr title="GENDER"><img src="img/genders.png" style="padding:35% 0% 0% 0%;"></abbr>
          </td>
          <td>
            <span class="radioGender">
              <ul>
                <li>
                  <input type="radio" id="f-option" name="gender" value="Male">
                  <label for="f-option">Male</label>
                  
                  <div class="check"></div>
                </li>
                
                <li>
                  <input type="radio" id="s-option" name="gender" value="Female">
                  <label for="s-option">Female</label>
                  
                  <div class="check"><div class="inside"></div></div>
                </li>
              </ul>
            </span>
          </td>
        </tr>
        <tr>
          <td style="padding:0px 10px 0px 0px;">
            <abbr title="AGE"><img src="img/family-silhouette.png" style="padding:10% 0% 0% 0%;"></abbr>
          </td>
          <td>
            <span class="input-number-decrement">–</span><input name="age" class="input-number" type="text" value="18" min="18" max="30"><span class="input-number-increment">+</span>
            <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
            <script  src="js/JS_IPnumber.js"></script>
          </td>
        </tr>
        <tr>
          <td style="padding:0px 10px 0px 0px;">
          <abbr title="DEPARTMENT"><img src="img/id-card.png" style="padding:10% 0% 0% 0%;"></abbr>
          </td>
          <td>
            <div class="cont_select_center">
              <div style="width:300px;" class="select_mate" data-mate-select="active" >
                <select name="department" onchange="" onclick="return false;" id="">
                  <option disabled selected>- - - Department - - -</option>
                  <option value="business-com">business-com</option>
                  <option value="art-math">art-math</option>
                  <option value="Fine-Arts">Fine-Arts</option>
                  <option value="science-math">science-math</option>
                  <option value="art-language">art-language</option>
                </select>
                
                <p class="selecionado_opcion"  onclick="open_select(this)" ></p>

                <span onclick="open_select(this)" class="icon_select_mate" >
                  <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
                    <path d="M0-.75h24v24H0z" fill="none"/>
                  </svg>
                </span>

                <div class="cont_list_select_mate">
                  <ul class="cont_select_int">  </ul> 
                </div>

              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <div class="cont_select_center">
              <div class="select_mate" data-mate-select="active" >
                <select name="pointGenMath" onchange="" onclick="return false;" id="">
                  <option value ="" disabled selected >--- POINT GENERAL MATHEMATICS ---</option>
                  <option value="a">A</option>
                  <option value="b+">B+</option>
                  <option value="b">B</option>
                  <option value="c+">C+</option>
                  <option value="c">C</option>
                  <option value="d+">D+</option>
                  <option value="d">D</option>
                </select>
                
                <p class="selecionado_opcion"  onclick="open_select(this)" ></p>

                <span onclick="open_select(this)" class="icon_select_mate" >
                  <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
                    <path d="M0-.75h24v24H0z" fill="none"/>
                  </svg>
                </span>

                <div class="cont_list_select_mate">
                  <ul class="cont_select_int">  </ul> 
                </div>

              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <div class="cont_select_center">
              <div class="select_mate" data-mate-select="active" >
                <select name="pointIntro" onchange="" onclick="return false;" id="">
                  <option disabled selected >--- POINT INTRODUCTION TO INFORMATION ---</option>
                  <option value="a">A</option>
                  <option value="b+">B+</option>
                  <option value="b">B</option>
                  <option value="c+">C+</option>
                  <option value="c">C</option>
                  <option value="d+">D+</option>
                  <option value="d">D</option>
                </select>
                
                <p class="selecionado_opcion"  onclick="open_select(this)" ></p>

                <span onclick="open_select(this)" class="icon_select_mate" >
                  <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
                    <path d="M0-.75h24v24H0z" fill="none"/>
                  </svg>
                </span>

                <div class="cont_list_select_mate">
                  <ul class="cont_select_int">  </ul> 
                </div>

              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <div class="cont_select_center">
              <div class="select_mate" data-mate-select="active" >
                <select name="pointCompro" onchange="" onclick="return false;" id="">
                  <option disabled selected >--- POINT COMPUTER PROGRAMMING ---</option>
                  <option value="a">A</option>
                  <option value="b+">B+</option>
                  <option value="b">B</option>
                  <option value="c+">C+</option>
                  <option value="c">C</option>
                  <option value="d+">D+</option>
                  <option value="d">D</option>
                </select>
                
                <p class="selecionado_opcion"  onclick="open_select(this)" ></p>

                <span onclick="open_select(this)" class="icon_select_mate" >
                  <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
                    <path d="M0-.75h24v24H0z" fill="none"/>
                  </svg>
                </span>

                <div class="cont_list_select_mate">
                  <ul class="cont_select_int">  </ul> 
                </div>

              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <div class="cont_select_center">
              <div class="select_mate" data-mate-select="active" >
                <select name="pointC++" onchange="" onclick="return false;" id="">
                  <option disabled selected >--- POINT COMP PROGRAMMING LAB (C++) ---</option>
                  <option value="a">A</option>
                  <option value="b+">B+</option>
                  <option value="b">B</option>
                  <option value="c+">C+</option>
                  <option value="c">C</option>
                  <option value="d+">D+</option>
                  <option value="d">D</option>
                </select>
                
                <p class="selecionado_opcion"  onclick="open_select(this)" ></p>

                <span onclick="open_select(this)" class="icon_select_mate" >
                  <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
                    <path d="M0-.75h24v24H0z" fill="none"/>
                  </svg>
                </span>

                <div class="cont_list_select_mate">
                  <ul class="cont_select_int">  </ul> 
                </div>

              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <div class="cont_select_center">
              <div class="select_mate" data-mate-select="active" >
                <select name="pointEng1" onchange="" onclick="return false;" id="">
                  <option disabled selected >--- POINT ENGLISH I ---</option>
                  <option value="a">A</option>
                  <option value="b+">B+</option>
                  <option value="b">B</option>
                  <option value="c+">C+</option>
                  <option value="c">C</option>
                  <option value="d+">D+</option>
                  <option value="d">D</option>
                </select>
                
                <p class="selecionado_opcion"  onclick="open_select(this)" ></p>

                <span onclick="open_select(this)" class="icon_select_mate" >
                  <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
                    <path d="M0-.75h24v24H0z" fill="none"/>
                  </svg>
                </span>

                <div class="cont_list_select_mate">
                  <ul class="cont_select_int">  </ul> 
                </div>

              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <div class="cont_select_center">
              <div class="select_mate" data-mate-select="active" >
                <select name="pointElect" onchange="" onclick="return false;" id="">
                  <option disabled selected >--- POINT FUNDAMENTAL OF ELECTRONICS ---</option>
                  <option value="a">A</option>
                  <option value="b+">B+</option>
                  <option value="b">B</option>
                  <option value="c+">C+</option>
                  <option value="c">C</option>
                  <option value="d+">D+</option>
                  <option value="d">D</option>
                </select>
                
                <p class="selecionado_opcion"  onclick="open_select(this)" ></p>

                <span onclick="open_select(this)" class="icon_select_mate" >
                  <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
                    <path d="M0-.75h24v24H0z" fill="none"/>
                  </svg>
                </span>

                <div class="cont_list_select_mate">
                  <ul class="cont_select_int">  </ul> 
                </div>

              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <div class="cont_select_center">
              <div class="select_mate" data-mate-select="active" >
                <select name="pointDiscrete" onchange="" onclick="return false;" id="">
                  <option disabled selected >--- POINT DISCRETE MATHEMATICS AND APP ---</option>
                  <option value="a">A</option>
                  <option value="b+">B+</option>
                  <option value="b">B</option>
                  <option value="c+">C+</option>
                  <option value="c">C</option>
                  <option value="d+">D+</option>
                  <option value="d">D</option>
                </select>
                
                <p class="selecionado_opcion"  onclick="open_select(this)" ></p>

                <span onclick="open_select(this)" class="icon_select_mate" >
                  <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
                    <path d="M0-.75h24v24H0z" fill="none"/>
                  </svg>
                </span>

                <div class="cont_list_select_mate">
                  <ul class="cont_select_int">  </ul> 
                </div>

              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <div class="cont_select_center">
              <div class="select_mate" data-mate-select="active" >
                <select name="pointOOP" onchange="" onclick="return false;" id="">
                  <option disabled selected >--- POINT OBJECT-ORIENTED PROGRAMMING ---</option>
                  <option value="a">A</option>
                  <option value="b+">B+</option>
                  <option value="b">B</option>
                  <option value="c+">C+</option>
                  <option value="c">C</option>
                  <option value="d+">D+</option>
                  <option value="d">D</option>
                </select>
                
                <p class="selecionado_opcion"  onclick="open_select(this)" ></p>

                <span onclick="open_select(this)" class="icon_select_mate" >
                  <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
                    <path d="M0-.75h24v24H0z" fill="none"/>
                  </svg>
                </span>

                <div class="cont_list_select_mate">
                  <ul class="cont_select_int">  </ul> 
                </div>

              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <div class="cont_select_center">
              <div class="select_mate" data-mate-select="active" >
                <select name="pointJava" onchange="" onclick="return false;" id="">
                  <option disabled selected >--- POINT OBJECT-ORIENTED PROGRAMMING LAB (JAVA) ---</option>
                  <option value="a">A</option>
                  <option value="b+">B+</option>
                  <option value="b">B</option>
                  <option value="c+">C+</option>
                  <option value="c">C</option>
                  <option value="d+">D+</option>
                  <option value="d">D</option>
                </select>
                
                <p class="selecionado_opcion"  onclick="open_select(this)" ></p>

                <span onclick="open_select(this)" class="icon_select_mate" >
                  <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
                    <path d="M0-.75h24v24H0z" fill="none"/>
                  </svg>
                </span>

                <div class="cont_list_select_mate">
                  <ul class="cont_select_int">  </ul> 
                </div>

              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <div class="cont_select_center">
              <div class="select_mate" data-mate-select="active" >
                <select name="pointDigital" onchange="" onclick="return false;" id="">
                  <option disabled selected >--- POINT FUNDAMENTAL OF DIGITAL ---</option>
                  <option value="a">A</option>
                  <option value="b+">B+</option>
                  <option value="b">B</option>
                  <option value="c+">C+</option>
                  <option value="c">C</option>
                  <option value="d+">D+</option>
                  <option value="d">D</option>
                </select>
                
                <p class="selecionado_opcion"  onclick="open_select(this)" ></p>

                <span onclick="open_select(this)" class="icon_select_mate" >
                  <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
                    <path d="M0-.75h24v24H0z" fill="none"/>
                  </svg>
                </span>

                <div class="cont_list_select_mate">
                  <ul class="cont_select_int">  </ul> 
                </div>

              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <div class="cont_select_center">
              <div class="select_mate" data-mate-select="active" >
                <select name="pointDataStruc" onchange="" onclick="return false;" id="">
                  <option disabled selected >--- POINT DATA STRUCTURE AND ALGORITHM ---</option>
                  <option value="a">A</option>
                  <option value="b+">B+</option>
                  <option value="b">B</option>
                  <option value="c+">C+</option>
                  <option value="c">C</option>
                  <option value="d+">D+</option>
                  <option value="d">D</option>
                </select>
                
                <p class="selecionado_opcion"  onclick="open_select(this)" ></p>

                <span onclick="open_select(this)" class="icon_select_mate" >
                  <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
                    <path d="M0-.75h24v24H0z" fill="none"/>
                  </svg>
                </span>

                <div class="cont_list_select_mate">
                  <ul class="cont_select_int">  </ul> 
                </div>

              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td colspan="2">
            <div class="cont_select_center">
              <div class="select_mate" data-mate-select="active" >
                <select name="pointEng2" onchange="" onclick="return false;" id="">
                  <option disabled selected >--- POINT ENGLISH II ---</option>
                  <option value="a">A</option>
                  <option value="b+">B+</option>
                  <option value="b">B</option>
                  <option value="c+">C+</option>
                  <option value="c">C</option>
                  <option value="d+">D+</option>
                  <option value="d">D</option>
                </select>
                
                <p class="selecionado_opcion"  onclick="open_select(this)" ></p>

                <span onclick="open_select(this)" class="icon_select_mate" >
                  <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
                    <path d="M0-.75h24v24H0z" fill="none"/>
                  </svg>
                </span>

                <div class="cont_list_select_mate">
                  <ul class="cont_select_int">  </ul> 
                </div>

              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
          <abbr title="GPA"><img src="img/test.png" style="padding:10% 0% 0% 0%;"></abbr>
          </td>
          <td><input type="number" name="gpa" step="any" id="IPGPA" placeholder="GPA"></td>
        </tr>
      </table>
      <input type="submit" name="sbmt" value="ส่งข้อมูล">
    </form>
  </body>
</html>
