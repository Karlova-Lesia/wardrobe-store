<style>
    html {
        position: relative;
        min-height: 100%;
    }
    body {
        margin-bottom: 130px;
        background:#edeef0;
    }
    .child-div {
        display: inline-block;
    }
    .parent-div {
        height: 80px;
        background: lightcoral;
    }
    .align-right {
        text-align: right;
    }
    .name-store {
        color: dimgrey;
        font-family: Chilanka, sans-serif;
        padding-right: 10%;
        font-size: 40px;
        width: 25%;
    }
    .search-block {
        width: 40%;
    }
    .search {
        width: 100% !important;
    }
    .icon {
        width: 5%;
    }
    li > a {
        background-color: lightgrey !important;
    }
</style>
<div class="fixed-top">
<div class="container-fluid parent-div">
    <nav class="bd-subnavbar py-2" aria-label="Secondary navigation">
        <div
                onClick='location.href="http://wardrobe.com"'
                class="name-store child-div align-right"
        >
            <div>wardrobe</div>
        </div>
        <button
                onClick='location.href="http://wardrobe.com/products/list"'
                style="width: 150px"
                type="button"
                class="btn btn-secondary"
        >
            Каталог
        </button>
        <div class="child-div search-block">
            <div class="input-group w-50 search">
                <form method="post" class="input-group mb-3" action="/products/search">
                <button
                        type="submit"
                        class="btn btn-outline-secondary">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="bi bi-search"
                            viewBox="0 0 16 16"
                    >
                        <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
                        ></path>
                    </svg>
                    <span class="visually-hidden">Button</span>
                </button>
                <input
                        name="search"
                        type="text"
                        class="form-control"
                        placeholder="Пошук ..."
                        aria-label="Input group example"
                />
                </form>
            </div>
        </div>
        <div class="child-div icon align-right">
            <button
                    onClick='location.href="http://wardrobe.com/cart"'
                    type="button" class="btn btn-outline-secondary">
                <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-cart2"
                        viewBox="0 0 16 16"
                >
                    <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"
                    ></path>
                </svg>
                <span class="visually-hidden">Button</span>
                <span>(<?php echo \App\Models\Cart::countItems();?>)</span>
            </button>
        </div>
        <?php if (\App\Models\User::isGuest()) :?>
            <div class="child-div icon align-right">
                <button
                        onClick='location.href="http://wardrobe.com/user/login"'
                        type="button"
                        class="btn btn-outline-secondary"
                >
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="bi bi-lock"
                            viewBox="0 0 16 16"
                    >
                        <path
                                d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"
                        />
                    </svg>
                    <span class="visually-hidden">Button</span>
                </button>
            </div>
        <?php else :?>
            <div class="child-div icon align-right">
                <button
                        onClick='location.href="http://wardrobe.com/cabinet"'
                        type="button"
                        class="btn btn-outline-secondary"
                >
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="bi bi-person"
                            viewBox="0 0 16 16"
                    >
                        <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"
                        ></path>
                    </svg>
                    <span class="visually-hidden">Button</span>
                </button>
            </div>
            <div class="child-div icon align-right">
                <button
                        type="button"
                        class="btn btn-outline-secondary"
                        onClick='location.href="http://wardrobe.com/user/logout"'
                >
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="bi bi-unlock"
                            viewBox="0 0 16 16"
                    >
                        <path
                                d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2zM3 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1H3z"
                        />
                    </svg>
                    <span class="visually-hidden">Button</span>
                </button>
            </div>
        <?php endif;?>
    </nav>
</div>
</div>
