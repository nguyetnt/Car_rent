<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .c-wrap-signup {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .w-signup {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .inner-w-signup {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 16px;
        max-width: 500px;
    }

    .c-flex-center {
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
    }
</style>

<div class="c-signup">
    <div class="c-wrap-signup">
        <img src="https://res.cloudinary.com/cockbook/image/upload/v1682247687/single/image_2_5_t9axtg.png" alt="" />
    </div>
    <br />
    <div class="w-signup">
        <div class="inner-w-signup">
            <div style="font-size: 24px; font-weight: 600">Login your account</div>
            <div style="width: 100%;">
                <div style="margin-bottom: 8px;">Email</div>
                <input type="text" style="width: 100%; height: 50px; background-color: #d9d9d9">
            </div>
            <div style="width: 100%;">
                <div style="margin-bottom: 8px;">Password</div>
                <input type="password" style="width: 100%; height: 50px; background-color: #d9d9d9">
            </div>
            <div style="width: 100%; height: 50px; background-color: #377BB9C9;" class="c-flex-center">
                Log in</div>
            <div>Don't you have an account? Sign up</div>
            <br>
        </div>
    </div>

</div>