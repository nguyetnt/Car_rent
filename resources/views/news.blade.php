<?php
include "./component/header.php"
?>
<style>
    .new-container {
        width: 100%;
    }

    .news-title {
        width: 100%;
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 12px;
        margin-bottom: 12px;
    }

    .main-new-container {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .inner-main-new-container {
        display: flex;
        justify-content: center;
        width: 100%;
        max-width: 1200px;
        gap: 20px
    }

    .inner-main-new-c-right {
        width: 450px;

    }

    .inner-main-new-c-left {
        flex: 1 1 0;
    }

    .highlight-new {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hightlight-new-1 {
        width: 70%;
    }

    .hightlight-new-1 img {
        width: 100%;
        height: 200px;
    }

    .hightlight-new-2 {
        width: 30%;
        height: 200px
    }

    .hightlight-new-2 img {
        width: 100%;
        height: 100%;
    }

    .c-new {
        width: 100%;
        display: flex;
        gap: 10px;
        ;
        margin-bottom: 12px;
    }

    .c-new-image {
        width: 300px;
        aspect-ratio: 5 / 2;
    }
</style>
<div class="new-container">
    <div class="news-title">
        <img src="https://res.cloudinary.com/cockbook/image/upload/v1682244050/single/image_1_ygsfns.png" alt="">
        <span>News</span>
    </div>
    <div class="main-new-container">
        <div class="inner-main-new-container">
            <div class="inner-main-new-c-left">
                <div class="highlight-new">
                        <div class="hightlight-new-1">
                            <img src="https://res.cloudinary.com/cockbook/image/upload/v1682244330/single/Rectangle_rywiys.png" alt="">
                        </div>
                    <div class="hightlight-new-2">
                        <a href="/news.php">
                            <div style="width: 100%; height: 50%">
                                <img src="https://res.cloudinary.com/cockbook/image/upload/v1682244330/single/Rectangle_rywiys.png" alt="">
                            </div>

                        </a>
                        <a href="/news.php">
                            <div style="width: 100%; height: 50%">
                                <img src="https://res.cloudinary.com/cockbook/image/upload/v1682244330/single/Rectangle_rywiys.png" alt="">
                            </div>

                        </a>
                    </div>
                </div>
                <br />
                <div class="c-new">
                    <a href="/news.php">
                        <div class="c-new-image">
                            <img style="width: 100%" src="https://res.cloudinary.com/cockbook/image/upload/v1682244330/single/Rectangle_rywiys.png" alt="">
                        </div>
                    </a>
                    <div>
                        <div style="font-weight: 600; margin-bottom: 12px">Test 123</div>
                        <div>News</div>
                    </div>
                </div>
                <div class="c-new">
                <a href="/news.php">
                    <div class="c-new-image">
                        <img style="width: 100%" src="https://res.cloudinary.com/cockbook/image/upload/v1682244330/single/Rectangle_rywiys.png" alt="">
                    </div>

                </a>
                    <div>
                        <div style="font-weight: 600; margin-bottom: 12px">Test 123</div>
                        <div>News</div>
                    </div>
                </div>
            </div>
            <div class="inner-main-new-c-right">
                <div class="news-title">
                    <img src="https://res.cloudinary.com/cockbook/image/upload/v1682245129/single/image_3_ayzc2m.png" alt="">
                    <span style="text-align: center;">Feature news</span>
                </div>
                <br />
                <div class="c-new">
                    <div class="c-new-image">
                        <img style="width: 100%" src="https://res.cloudinary.com/cockbook/image/upload/v1682244330/single/Rectangle_rywiys.png" alt="">
                    </div>
                    <div>
                        <div style="font-weight: 600; margin-bottom: 12px">Test 123</div>
                        <div>News</div>
                    </div>
                </div>
                <div class="c-new">
                    <div class="c-new-image">
                        <img style="width: 100%" src="https://res.cloudinary.com/cockbook/image/upload/v1682244330/single/Rectangle_rywiys.png" alt="">
                    </div>
                    <div>
                        <div style="font-weight: 600; margin-bottom: 12px">Test 123</div>
                        <div>News</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>