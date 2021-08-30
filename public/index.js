async function getResponse()
{
    const response = await fetch('http://wardrobe.com/products/ApiProducts');
    let products = await response.json();
    let img = document.getElementById('img');
    let desc = document.getElementById('desc');

    for (let key in products) {
        img.innerHTML += `
                            <img style="width: 600px;" src = "${products[key].image}" alt = ""/>
                        `
        desc.innerHTML += `
                             <div style = "padding-bottom: 750px; padding-right: 50px;" >
                                ${products[key].name}<br>
                                <div style = "color: dimgrey;">${products[key].description}<br>
                                    ${products[key].price} грн<br></div>
                                    <div>
                                        <button onClick='location.href="http://wardrobe.com/cart/add/${products[key].id}"' 
                                        type = "button" class="btn btn-outline-secondary btns">
                                            <span style = "vertical-align: inherit;">Додати в кошик</span>
                                        </button>
                                    </div>
                                </div>
                        `
    }
}
getResponse();
