let img = document.getElementById("myimg");
                let back = document.getElementById("back");
                let next = document.getElementById("next");
                let imga = ["http://localhost/img/menu1.jpg", "http://localhost/img/menu2.jpg", "http://localhost/img/menu3.jpg", "http://localhost/img/menu4.jpg", "http://localhost/img/menu5.jpg"];
                let index = 0;
                function backimg(event) {
                    index--;
                    if (index < 0) {
                        index = imga.length - 1;

                    }
                    img.src = imga[index];
                }

                function nextimg(event) {
                    index++;
                    if (index > imga.length - 1) {
                        index = 0;
                    }
                    img.src = imga[index];
                }
                back.addEventListener('click', backimg);
                next.addEventListener('click', nextimg);
                