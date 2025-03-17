<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>首頁</title>
    </head>
    <body align="center">
        <style>
            body,
            html {
                margin: 0;
                height: 100%;
                padding: 0;

            }
            table {
                text-align: "center";
                border: 1px solid gray;
                width: 100%;
                border-collapse: collapse;

            }

            #top {
                height: 10%;
                background-color: gray;
            }
            img{
 width: 100%;
 margin-left: auto;
 margin-right: auto;
 margin-top: 20px;
 text-align: center;
}
.myimg{
 width: 70%;
 height:40%;
}
        </style>
        <table >
            <tr id="top">
                <td>
                    <a href="">首頁</a>
                </td>
                <td>
                    <a href="">菜單</a>
                </td>
                <td>
                    <a href="">訂餐</a>
                </td>
                <td>
                    <a href="">查看訂單 </a>
                </td>
                <td>
                    <a href="">登出</a>
                </td>
            </tr>
            <tr>
                <td>
                    <button id="back">back</button>
                </td>
                <td colspan="3" align="center"><img src="http://localhost/img/menu1.jpg" id="myimg" class="img"></td>
                <td>
                    <button id="next">next</button>
                </td>

            </tr>
<script>
    let img = document.getElementById("myimg");
    let back=document.getElementById("back");
    let next=document.getElementById("next");
    let imga=["http://localhost/img/menu1.jpg","http://localhost/img/menu2.jpg","http://localhost/img/menu3.jpg","http://localhost/img/menu4.jpg","http://localhost/img/menu5.jpg"];
    let index=0;
    function backimg(event){
index--;
if(index<0){
    index=imga.length-1;

}
img.src=imga[index];
    }

    function nextimg(event){
        index++;
        if(index>imga.length-1){
            index=0;
        }
        img.src=imga[index];
    }
    back.addEventListener('click',backimg);
    next.addEventListener('click',nextimg);
</script>
            <tr >
                <table>
                    <tr>
                        <td>製作人</td>
                        <td>連結</td>
                        <td ><a href="">留言板</a></td>
                    </tr>
                    <tr>
                        <td>鄧益汯</td>
                        <td>
                            <a href="https://www.ukn.edu.tw/p/412-1000-381.php?Lang=zh-tw">KNJC</a>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>黃聖翔</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>黃子杰</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>楊恩愷</td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </tr>

        </table>
    </body>
</html>