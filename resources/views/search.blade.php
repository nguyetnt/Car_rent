<?php 
    include "./component/header.php"
?>
<style>
    .c-search {
        width: 100%;
        
    }
    .c-header-search {
        width: 100%;
        background-color: #3137C1;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .c-search-bar {
        display: flex;
        align-items: center;
    }
    .c-btn-search-bar {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #31C151;
        text-transform: uppercase;
        color: #fff
    }
    .u-c-search {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: end;
    }
    .c-u-c-search {
        display: flex;
        justify-content: center;
        align-items: end;
    }
    .search-footer {
        width: 100%;
        background-color: #3137C1;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 30px;
    }
    .search-footer div {
        font-size: 24px;
        text-align: center;
        color: #fff;
        line-height: 1.8;
    }
</style>
<div class="c-search">
    <div class="c-header-search">
        <img src="https://res.cloudinary.com/cockbook/image/upload/v1682245265/single/image_4_1_vv9gyj.png" alt="">
    </div>
    <br />
    <div class="c-search-bar">
        <img style="height: 50px" src="https://res.cloudinary.com/cockbook/image/upload/v1682246855/single/image_2_4_jyd9uc.png" alt="">
        <input type="text" style="width: 600px; height: 50px; padding: 10px">
        <div class="c-btn-search-bar" style="width: 120px; height: 50px">Search</div>
    </div>
    <br />
    <br />
    <br />
    <br />
    <div class="u-c-search">
        <div class="c-u-c-search">
            <img src="https://res.cloudinary.com/cockbook/image/upload/v1682247157/single/image_3_2_x4nvq7.png" alt="" />
            <div>
                <div>We're here for you</div>
                <div>Providing customer support in over 30 languages</div>
            </div>
        </div>
        <div class="c-u-c-search">
            <img src="https://res.cloudinary.com/cockbook/image/upload/v1682247156/single/image_4_2_nuqftu.png" alt="" />
            <div>
                <div>Free cancellation</div>
                <div>On most bookings, up to 48 hours before pick-up</div>
            </div>
        </div>
        <div class="c-u-c-search">
            <img src="https://res.cloudinary.com/cockbook/image/upload/v1682247156/single/image_5_1_vk34ph.png" alt="" />
            <div>
                <div>5 milion + reviews</div>
                <div>By verified customers</div>
            </div>
        </div>
    </div>
    <br />
    <br />
    <div class="search-footer">
        <div>Save time, save money!</div>
        <div>Sign up and we'll send the best deals to you!</div>
        <div class="c-flex-cennter">
            <input type="text" style="width: 400px; height: 50px">
            <div class="c-btn-search-bar" style="width: 120px; height: 50px">Search</div>
        </div>
    </div>
</div>