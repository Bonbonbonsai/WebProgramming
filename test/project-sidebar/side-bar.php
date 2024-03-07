<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>side-bar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="nav-bar">
        <div class="logo">
            <span>
                <a href="">
                    <svg width="100" height="35" viewBox="0 0 188 145" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="94" cy="42" rx="94" ry="25" fill="#C97026" />
                        <rect y="42" width="188" height="78" fill="#C97026" />
                        <ellipse cx="94" cy="67" rx="91" ry="60" fill="white" />
                        <path d="M187.999 41C183.499 67.6667 6.99996 67.6667 -3.53854e-05 41V121C-2.91718e-05 151.5 187.999 154 187.999 121V41Z" fill="#870000" />
                        <ellipse cx="94.5" cy="12" rx="5.5" ry="9" fill="white" />
                        <ellipse cx="67.1142" cy="17.3147" rx="4.5" ry="28.3343" transform="rotate(61.9015 67.1142 17.3147)" fill="white" />
                        <ellipse cx="121.114" cy="17.3154" rx="4.5" ry="28.3343" transform="rotate(-61.9 121.114 17.3154)" fill="white" />
                    </svg>
                </a>
            </span>
        </div>

        <div class="shop-cart">
            <a data-bs-toggle="offcanvas" href="#shopping-cart" role="button" aria-controls="shopping-cart">
                <span class="fa fa-shopping-cart" style="font-size:36px"></span><span class="caret"></span>
            </a>

            <form action="" method="">
                <div class="offcanvas offcanvas-end" tabindex="-1" id="shopping-cart" aria-labelledby="offcanvasLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasLabel">รายการอาหารที่สั่ง</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0 all-align-center">
                                <div class="col-md-4">
                                    <img src="https://upload.wikimedia.org/wikipedia/vi/9/90/Microsoft_Photos_Icon_on_Windows_10.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="flex-card-header">
                                            <h6 class="card-title">ชื่ออาหาร</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <p>ราคา : 9999</p>
                                        <div class="flex-button">
                                            <input type="button" class="btn minus-btn" value="-">
                                            <input type="text" class="form-control w-50 amount-field" name="amountOfFood" id="amount" min=1 value="1">
                                            <input type="button" class="btn plus-btn" value="+">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-bottom">
                        <div class="total-price">
                            <div id="total-label">
                                ทั้งหมด :
                            </div>
                            <div id="totalNumPrice">
                                9999.87฿
                            </div>
                        </div>
                        <div class="check-out">
                            <button type="submit" class="btn btn-danger rounded-0">ลบรายการอาหารทั้งหมด</button>
                            <button type="submit" class="btn btn-success rounded-0">ยืนยันการสั่งอาหาร</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const minusBtn = document.querySelector('.minus-btn');
            const plusBtn = document.querySelector('.plus-btn');
            const amountField = document.querySelector('.amount-field');

            minusBtn.addEventListener('click', () => {
                const currentValue = parseInt(amountField.value);
                if (currentValue > 1) {
                    amountField.value = currentValue - 1;
                }
            });

            plusBtn.addEventListener('click', () => {
                const currentValue = parseInt(amountField.value);
                amountField.value = currentValue + 1;
            });
        });
    </script>
</body>

</html>
